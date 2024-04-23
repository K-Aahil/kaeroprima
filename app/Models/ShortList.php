<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class ShortList extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','sort','code','description','status','image'];

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
        return $this->hasMany(ShortListItem::class, 'short_list_id')->orderBy('sort', 'asc');
    }

}
