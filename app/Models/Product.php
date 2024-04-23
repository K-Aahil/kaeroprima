<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

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
        'name',
        'same_as_default',
        'name_an',
        'interest_rate',
        'image',
        'icon',
        'description',
        'description_an',
        'slug',
        'category',
        'code',
        'flag',
        'rate_flag',
        'sort',
        'meta_title',
        'meta_description',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
	];    

}
