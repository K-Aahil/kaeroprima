<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class MenuItems extends Model {

    use HasFactory;
    protected $table = 'admin_menu_items';
    protected $fillable = [ 'id','label', 'label_an', 'link', 'description', 'status', 'parent', 'sort', 'menu', 'depth', 'class', 'image' ];
    protected $appends = [ 'image_url'];

    protected static function boot() {

		parent::boot();

        static::deleting(function ($model) {
            $file_path = upload_path('menus', $model->image);
            if(File::exists($file_path))
                File::delete($file_path);

        });
	}

    public static function getNextSortRoot($menu) {
        return self::where('menu', $menu)->max('sort') + 1;
    }

    public function parentMenu() {
        return $this->belongsTo(MenuItems::class, 'menu');
    }

    public function child() {
        return $this->hasMany(MenuItems::class, 'parent')->orderBy('sort', 'ASC');
    }

    public function getImageUrlAttribute() {

        if ($this->image)
            return upload_path('menus', $this->image);

        return '';
    }

}
