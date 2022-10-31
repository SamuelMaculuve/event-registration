<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventRegistration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function eventcompany()
    {
        return $this->hasOne(eventCompany::class);
    }

    public function eventrepresentative()
    {
        return $this->hasOne(eventRepresentative::class);
    }

    public function socialnetworks()
    {
        return $this->hasOne(socialNetworks::class);
    }
}
