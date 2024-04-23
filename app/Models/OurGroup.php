<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class OurGroup extends Model {

    use HasFactory;

    protected $fillable = [ 'title', 'title_an', 'sub_title', 'sub_title_an', 'description', 'description_an', 'status', 'parent', 'sort', 'our_partner_id', 'depth', 'url', 'image' ];
    protected $appends = [ 'image_url'];

    protected static function boot() {

		parent::boot();

        static::deleting(function ($model) {
            $file_path = upload_path('items', $model->image);
            if(File::exists($file_path))
                File::delete($file_path);

        });
	}

    public static function getNextSortRoot($our_partner_id) {
        return self::where('our_partner_id', $our_partner_id)->max('sort') + 1;
    }

    public function parentMenu() {
        return $this->belongsTo(OurGroup::class, 'our_partner_id');
    }

    public function child() {
        return $this->hasMany(OurGroup::class, 'parent')->orderBy('sort', 'ASC');
    }

    public function getImageUrlAttribute() {

        if ($this->image)
            return upload_path('items', $this->image);

        return '';
    }

}
