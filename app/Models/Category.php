<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
        'parent',
        'name',
        'image',
        'status'
	];

    // return one level of child items
    public function categories()
    {
        return $this->hasMany(Category::class, 'parent');
    }

    // recursive relationship
    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent')->with('categories');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
