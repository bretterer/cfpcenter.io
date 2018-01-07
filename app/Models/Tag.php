<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    public function conference() : BelongsTo
    {
        return $this->belongsTo(Conference::class, 'id', 'conference_id');
    }
}
