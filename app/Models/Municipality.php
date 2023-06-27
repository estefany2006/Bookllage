<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function departments()
    {
        return $this->belongsTo(Departament::class);
    }
}
