<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Disease extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function patient(): HasOne
    {
        return $this->hasOne(Disease::class);
    }

    public function test(): HasOne
    {
        return $this->hasOne(Test::class);
    }
}
