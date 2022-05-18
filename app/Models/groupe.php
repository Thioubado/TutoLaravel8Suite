<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getNomAttribute($value)
    {
        return ucFirst($value);
    }

    public function getPrenomAttribute($value)
    {
        return ucFirst($value);
    }

    public function setNomAttribute($value)
    {
        return $this -> attributes['nom'] = 'Mr '.$value;
    }

    public function setAddressAttribute($value)
    {
        return $this -> attributes['address'] = $value. ', Europe';
    }
}
