<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookFrontCover extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
