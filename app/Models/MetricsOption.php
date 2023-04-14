<?php

namespace App\Models;

use App\Models\BookMetricsSummary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MetricsOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function metric()
    {
    	return $this->belongsTo(Metric::class);
    }

    public function bookMetricSummmary()
    {
        return $this->hasOne(BookMetricsSummary::class, 'metric_option_id');
    }
}
