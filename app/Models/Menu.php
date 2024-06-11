<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function scopeFilter($query, $search)
    {
        if (isset($search) && $search !== '') {
            return $query->where('name', 'like', '%' . $search . '%');
        }
        
        return $query;
    }
};

