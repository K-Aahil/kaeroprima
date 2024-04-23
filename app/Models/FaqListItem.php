<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class FaqListItem extends Model {

    use HasFactory;

    protected $fillable = [ 'faq_list_id', 'title', 'title_an', 'sub_title', 'sub_title_an', 'description', 'description_an', 'status', 'parent', 'sort', 'depth', 'url', 'image' ];
    protected $appends = [ 'image_url'];

    protected static function boot() {

		parent::boot();

        static::deleting(function ($model) {
            $file_path = upload_path('faq_items', $model->image);
            if(File::exists($file_path))
                File::delete($file_path);

        });
	}

    public static function getNextSortRoot($faq_list_id) {
        return self::where('faq_list_id', $faq_list_id)->max('sort') + 1;
    }

    public function parentMenu() {
        return $this->belongsTo(FaqListItem::class, 'faq_list_id');
    }

    public function child() {
        return $this->hasMany(FaqListItem::class, 'parent')->orderBy('sort', 'ASC');
    }

    public function getImageUrlAttribute() {

        if ($this->image)
            return upload_path('faq_items', $this->image);

        return '';
    }

}
