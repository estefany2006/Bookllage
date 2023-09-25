<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function municipalities()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
