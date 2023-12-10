<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategoryRegion extends Model
{
    use HasFactory;
    protected $table = 'food_category_regions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];

    public function foods()
    {
        return $this->hasMany(Food::class, 'food_category_regions_id');
    }
}
