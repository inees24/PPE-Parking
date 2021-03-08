<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    public function scopeIsAdmin($query)
    {
        $query->where('is_admin', true);
    }

}
