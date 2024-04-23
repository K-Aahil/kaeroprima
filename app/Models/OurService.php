<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContactList;
use App\Models\OurService;
use App\Models\OurServiceItem;
use App\Models\DoctorSchedule;
use File;

class OurService extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'our_services';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'service_contact',
        'image',
        'slug',
        'color',
        'status',
        'image_banner',
	];

    protected static function boot() 
    {
        parent::boot();

        static::deleting(function ($model) {
            $model->items()->each(function($items) {
                $items->delete();
                $file_path = upload_path('our_service_item', $items->image);

                if (File::exists($file_path))
                    File::delete($file_path);
            });
        });
    }

    public function items()
{
        return $this->hasMany(OurServiceItem::class, 'our_service_id');
    }

    public function doctor_schedules() 
    {
        return $this->hasMany(DoctorSchedule::class, 'our_service_id');
    }

    public function contact_list() 
    {
        return $this->hasMany(ContactList::class, 'our_service_id');
    }
}
