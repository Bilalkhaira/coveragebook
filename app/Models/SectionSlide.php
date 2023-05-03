<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSlide extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function section()
    {
    	return $this->belongsTo(BookSections::class, 'id');
    }
    
}
