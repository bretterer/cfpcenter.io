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
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeByConferenceId(Builder $query, int $conferenceId)
    {
        return $query->where('conference_id', '=', $conferenceId);
    }

    public function scopeByUser(Builder $query, int $userId)
    {
        return $query->where('user_id', '=', $userId);
    }

    public function getTalkTitle() : string
    {
        return $this->talk_title;
    }

    public function getUserId() : int
    {
        return $this->user_id;
    }

    public function getConferenceId() : int
    {
        return $this->conference_id;
    }

    public function getTalkLength() : int
    {
        return $this->talk_length;
    }

    public function getTalkLevel() : string
    {
        return $this->talk_level;
    }

    public function getTalkLabels() : string
    {
        return $this->labels;
    }

    public function getJoindinLink()
    {
        return $this->joindin_link;
    }
}
