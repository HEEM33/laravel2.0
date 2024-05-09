<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
       'user_id', 
       'universities_id', 
       'comment', 
       'created_at',
    ];
//*
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
