<?php

namespace App\Models;

use App\Models\MetricsOption;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookMetricsSummary extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function book()
    {
    	return $this->belongsTo(Book::class);
    }

    public function metricOptions()
    {
        return $this->belongsTo(MetricsOption::class, 'id');
    }
}
