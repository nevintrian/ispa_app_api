<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function disease(): BelongsTo
    {
        return $this->belongsTo(Disease::class, 'label_from_disease_id', 'id');
    }
}
