<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'users_id',
        'deleted_flag',
        'name',
        'description',
        'views',
        'total_like',
        'food_category_regions_id',
        'food_categories_id',
        'thumbnail',
        'video',
        'prep_time',
        'cooking_time',
        'servings',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(FoodCategory::class, 'food_categories_id');
    }
    public function region()
    {
        return $this->belongsTo(FoodCategoryRegion::class, 'food_category_regions_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'foods_id');
    }

    public function steps()
    {
        return $this->hasMany(Step::class, 'foods_id')->orderBy('number');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class, 'foods_id');
    }
}
