<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OurService;

class ContactList extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_lists';

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
        'our_service_id',
        'name',
        'whatsapp_number',
        'instagram',
        'location',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
	];

    public function serviceItem()
    {
        return $this->belongsTo(OurService::class, 'our_service_id');
    }
}
