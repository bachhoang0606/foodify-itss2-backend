<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $table = 'ingredients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'foods_id',
        'description',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class, 'foods_id');
    }
}
