<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi to Documents
    public function document(){
        return $this->hasOne(Document::class);
    }
}
