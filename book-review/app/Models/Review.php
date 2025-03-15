<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    protected static function booted(){
        static::updated(function (Review $review) {
            $cacheKey = 'book:' . $review->book->id;
            cache()->forget($cacheKey);
        });

        static::deleted(function (Review $review) {
            $cacheKey = 'book:' . $review->book->id;
            cache()->forget($cacheKey);
        });
    }
}
