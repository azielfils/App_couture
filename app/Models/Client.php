<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Mesure()
    {
        return $this->hasOne(Mesure::class);
    }

    public function Paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
