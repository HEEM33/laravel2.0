<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;


class universities extends Model
{
    use HasFactory;

    protected $table = 'universities';

    protected $fillable = [
        'name',
        'description',
        'image'
    ];
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function rate($rating, $user_id)
    {
        $this->ratings()->create([
            'rating' => $rating,
            'user_id' => $user_id,
        ]);
    }
}

