<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class OurPartner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

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

    public function list_groups() {
        return $this->hasMany(OurGroup::class, 'our_partner_id')->orderBy('sort', 'asc');
    }

}
