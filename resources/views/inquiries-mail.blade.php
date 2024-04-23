<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Telah mengisi formulir product inquiries BPR Mitra Parahyangan yang terdiri dari :</p>
    <p>Product : {{ $data_product['product_name'] }}</p>
    <p>Nama Lengkap : {{ $data['name'] }}</p>
    <p>Email : {{ $data['email'] }}</p>
    <p>No. Telephone : {{ $data['phone'] }}</p>
</body>
</html>