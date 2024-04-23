<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'careers';

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
        'career_category_id',
        'career_path_id',
        'title',
        'description',
        'location',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
	];

    public function category() 
    {
        return $this->belongsTo(CareerCategory::class, 'career_category_id');
    }

    public function path() 
    {
        return $this->belongsTo(CareerPath::class, 'career_path_id');
    }
}
