<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $table = 'steps';
    protected $primaryKey = 'id';

    protected $fillable = [
        'number',
        'foods_id',
        'content',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class, 'foods_id');
    }
}
