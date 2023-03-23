<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionsAndBooks extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(CollectionsAndBooks::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(CollectionsAndBooks::class, 'parent_id');
    }
}
