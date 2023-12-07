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
        'user_id',
        'deleted_flag',
        'name',
        'description',
        'views',
        'total_like',
        'category_region_id',
        'category_id',
        'thumbnail',
        'video',
        'prep_time',
        'cooking_time',
        'servings',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(FoodCategory::class,'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'food_id');
    }

    public function steps()
    {
        return $this->hasMany(Step::class, 'food_id');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class,'food_id');
    }
}
