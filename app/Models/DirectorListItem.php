<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class DirectorListItem extends Model {

    use HasFactory;

    protected $fillable = [ 'director_list_id', 'title', 'title_an', 'sub_title', 'sub_title_an', 'description', 'description_an', 'status', 'parent', 'sort', 'depth', 'url', 'image' ];
    protected $appends = [ 'image_url'];

    protected static function boot() {

		parent::boot();

        static::deleting(function ($model) {
            $file_path = upload_path('director_items', $model->image);
            if(File::exists($file_path))
                File::delete($file_path);

        });
	}

    public static function getNextSortRoot($director_list_id) {
        return self::where('director_list_id', $director_list_id)->max('sort') + 1;
    }

    public function parentMenu() {
        return $this->belongsTo(DirectorListItem::class, 'director_list_id');
    }

    public function child() {
        return $this->hasMany(DirectorListItem::class, 'parent')->orderBy('sort', 'ASC');
    }

    public function getImageUrlAttribute() {

        if ($this->image)
            return upload_path('director_items', $this->image);

        return '';
    }

}
