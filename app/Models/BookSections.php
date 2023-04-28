<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSections extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function slides()
    {
    	return $this->hasMany(SectionSlide::class, 'section_id');
    }
}
