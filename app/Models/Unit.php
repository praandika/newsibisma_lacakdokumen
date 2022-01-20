<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relasi to Stock
    public function stock(){
        return $this->hasMany(Stock::class);
    }
}
