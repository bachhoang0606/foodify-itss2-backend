<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;
    protected $table = 'food_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
    ];

    public function foods()
    {
        return $this->hasMany(Food::class, 'food_categories_id');
    }

}
