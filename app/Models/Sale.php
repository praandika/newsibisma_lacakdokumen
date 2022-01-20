<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;
use App\Models\Stock;
use App\Models\Leasing;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi to Documents
    public function document(){
        return $this->hasOne(Document::class);
    }

    // Relasi to Stock
    public function stock(){
        return $this->belongsTo(Stock::class);
    }

    // Relasi to leasing
    public function leasing(){
        return $this->belongsTo(Leasing::class);
    }
}
