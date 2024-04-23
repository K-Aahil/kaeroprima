<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

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
        'post_category_id',
        'tanggal',
        'short',
        'title',
        'flag',
        'url_media',
        'description',
        'same_as_default',
        'title_an',
        'description_an',
        'data_file',
        'icon',
        'slug',
        'meta_title',
        'meta_description',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
	];

    public function category() 
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }
}
