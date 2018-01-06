<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    protected $table = 'submissions';

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function scopeByConferenceId(Builder $query, int $conferenceId)
    {
        return $query->where('conference_id', '=', $conferenceId);
    }

    public function scopeByUser(Builder $query, int $userId)
    {
        return $query->where('user_id', '=', $userId);
    }
}
