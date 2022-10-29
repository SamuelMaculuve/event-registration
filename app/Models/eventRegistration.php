<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventRegistration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function eventCompany()
    {
        return $this->hasOne(eventCompany::class);
    }

    public function eventRepresentative()
    {
        return $this->hasOne(eventRepresentative::class);
    }

    public function socialNetworks()
    {
        return $this->hasOne(socialNetworks::class);
    }
}
