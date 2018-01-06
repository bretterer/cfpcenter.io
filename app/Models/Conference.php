<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conference extends Model
{
    protected $table = 'conferences';

    public function submissions() : HasMany
    {
        return $this->hasMany(Submission::class, 'conference_id', 'id');
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getCity() : string
    {
        return $this->city;
    }

    public function getState() : string
    {
        return $this->state;
    }

    public function getCountry() : string
    {
        return $this->country;
    }

    public function getCoc() : int
    {
        return $this->coc;
    }

    public function getCocLink() : string
    {
        return $this->coc_link;
    }

    public function getWebsite() : string
    {
        return $this->website;
    }

    public function getAbout() : string
    {
        return $this->about;
    }

    public function getImage() : string
    {
        return $this->image_link;
    }
}
