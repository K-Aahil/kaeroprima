<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'admin_menus';
    protected $fillable = ['id','name'];

    protected static function boot() {

		parent::boot();

        static::deleting(function ($model) {
            $model->list_items()->each(function($list_items) {
                $list_items->delete();
                $file_path = upload_path('items', $list_items->image);

                if(File::exists($file_path))
                    File::delete($file_path);

            });
        });

	}

    public function list_items() {
        return $this->hasMany(MenuItems::class, 'menu')->orderBy('sort', 'asc');
    }

}
