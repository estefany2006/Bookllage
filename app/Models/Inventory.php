<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function municipalities()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
