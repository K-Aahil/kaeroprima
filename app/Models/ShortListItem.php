<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class ShortListItem extends Model {

    use HasFactory;

    protected $fillable = [ 'title', 'title_an', 'sub_title', 'sub_title_an', 'description', 'description_an', 'status', 'parent', 'sort', 'short_list_id', 'depth', 'url', 'image' ];
    protected $appends = [ 'image_url'];

    protected static function boot() {

		parent::boot();

        static::deleting(function ($model) {
            $file_path = upload_path('items', $model->image);
            if(File::exists($file_path))
                File::delete($file_path);

        });
	}

    public static function getNextSortRoot($short_list_id) {
        return self::where('short_list_id', $short_list_id)->max('sort') + 1;
    }

    public function parentMenu() {
        return $this->belongsTo(ShortListItem::class, 'short_list_id');
    }

    public function child() {
        return $this->hasMany(ShortListItem::class, 'parent')->orderBy('sort', 'ASC');
    }

    public function getImageUrlAttribute() {

        if ($this->image)
            return upload_path('items', $this->image);

        return '';
    }

}
