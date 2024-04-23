#!/bin/bash

# Configure tzdata
ln -fs /usr/share/zoneinfo/Asia/Jakarta /etc/localtime
dpkg-reconfigure --frontend noninteractive tzdata

# Update and install packages
apt update
apt install -y apache2
apt install -y git mariadb-server unzip openssl software-properties-common
echo "Installing PHP 8.2" > /var/www/html/index.html
add-apt-repository ppa:ondrej/php -y
apt -y install php8.2 php8.2-{cli,gd,mysql,pdo,mbstring,tokenizer,bcmath,xml,fpm,curl,zip,intl} libapache2-mod-php8.2
a2enmod php8.2
php --version

# Install composer
echo "Installing   Composer" > /var/www/html/index.html
export HOME=/root
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Create database
echo "Creating database" > /var/www/html/index.html
systemctl start mysql.service
database_id='kaeroprima'
mysql -u root -e "CREATE DATABASE IF NOT EXISTS $database_id"
mysql -u root -e "CREATE USER IF NOT EXISTS '$database_id'@'localhost' IDENTIFIED BY '$database_id'"
mysql -u root -e "GRANT ALL PRIVILEGES ON $database_id.* TO '$database_id'@'localhost'"
mysql -u root -e "FLUSH PRIVILEGES"
mysql -uroot -p kaeroprima < kaero_prima.sql

# Create .env file
echo "Creating .env file" > /var/www/html/index.html
cp .env.example .env
echo "DB_CONNECTION=mysql" >> .env
echo "DB_HOST=localhost" >> .env
echo "DB_PORT=3306" >> .env
echo "DB_DATABASE=kaeroprima" >> .env
echo "DB_USERNAME=kaeroprima" >> .env
echo "DB_PASSWORD=kaeroprima" >> .env
echo "APP_ENV=local" >> .env
echo "APP_DEBUG=true" >> .env


# Install Laravel
echo "Installing Laravel" > /var/www/html/index.html
/usr/local/bin/composer install
echo "Configuring Laravel" > /var/www/html/index.html
php artisan key:generate --force
chgrp -R www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache
chown -R $USER:www-data .

# # Migrate database
# echo "Migrating database" > /var/www/html/index.html
# php artisan migrate --seed --force

# Configure Apache
echo "Configuring Apache" > /var/www/html/index.html
echo "<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/public
    <Directory /var/www/html/public>
        Options -Indexes +FollowSymLinks +MultiViews
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite
a2enmod rewrite


# Configure Self Signed SSL

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/apache-selfsigned.key -out /etc/ssl/certs/apache-selfsigned.crt -subj "/C=PE/ST=Lima/L=Lima/O=Acme Inc. /OU=IT Department/CN=acme.com"
openssl dhparam -out /etc/ssl/certs/dhparam.pem 2048
cp /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf.bak

echo "<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html/public
        <Directory /var/www/html/public>
            Options -Indexes +FollowSymLinks +MultiViews
            AllowOverride All
            Require all granted
        </Directory>
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
        SSLEngine on
        SSLCertificateFile /etc/ssl/certs/apache-selfsigned.crt
        SSLCertificateKeyFile /etc/ssl/private/apache-selfsigned.key
        <FilesMatch \"\.(cgi|shtml|phtml|php)$\">
            SSLOptions +StdEnvVars
        </FilesMatch>
        <Directory /usr/lib/cgi-bin>
            SSLOptions +StdEnvVars
        </Directory>
        BrowserMatch \"MSIE [2-6]\" \
            nokeepalive ssl-unclean-shutdown \
            downgrade-1.0 force-response-1.0
        BrowserMatch \"MSIE [17-9]\" ssl-unclean-shutdown
    </VirtualHost>
</IfModule>" > /etc/apache2/sites-available/default-ssl.conf

a2enmod ssl
a2ensite default-ssl.conf

systemctl restart apache2.service
systemctl enable apache2.service
systemctl enable mysql.service

php artisan --version
