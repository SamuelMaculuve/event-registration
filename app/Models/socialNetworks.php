<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialNetworks extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function eventregistration()
    {
        return $this->belongsTo(eventRegistration::class);
    }
}
