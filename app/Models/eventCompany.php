<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventCompany extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function eventRegistration()
    {
        return $this->belongsTo(eventRegistration::class);
    }
}
