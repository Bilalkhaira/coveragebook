<?php

namespace App\Models;

use App\Models\BookMetricsSummary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function bookMetrics()
    {
    	return $this->hasMany(BookMetricsSummary::class);
    }

    public function frontCover()
    {
        return $this->hasOne(BookFrontCover::class);
    }
}
