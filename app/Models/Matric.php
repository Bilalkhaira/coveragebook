<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matric extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function options()
    {
    	return $this->hasMany(MatricsOption::class);
    }
}
