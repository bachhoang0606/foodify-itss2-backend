<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $table = 'steps';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'number',
        'food_id',
        'content',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }
}
