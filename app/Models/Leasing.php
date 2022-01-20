<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leasing extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi to Sales
    public function sale(){
        return $this->hasMany(Sale::class);
    }
}
