<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetricsOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function metric()
    {
    	return $this->belongsTo(Metric::class);
    }
}
