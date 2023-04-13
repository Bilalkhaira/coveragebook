<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatricsOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function matric()
    {
    	return $this->belongsTo(Matric::class);
    }
}
