<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'foods_id',
        'username',
        'content',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class, 'foods_id');
    }
}
