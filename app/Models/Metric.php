<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function options()
    {
    	return $this->hasMany(MetricsOption::class);
    }
}
