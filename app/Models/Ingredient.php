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
        'name',
        'name_no_accent',
        'quantity'
    ];

    public function foods()
    {
        return $this->belongsTo(Food::class, 'foods_id');
    }
}
