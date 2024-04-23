<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageBanners extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_banners';

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
        'page',
        'page_id',
        'banner',
        'title',
        'slug',
        'description',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
	];

    public function pages() 
    {
        return $this->belongsTo(Pages::class, 'page_id');
    }
}
