<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conference extends Model
{
    protected $table = 'conferences';

    public function submissions() : HasMany
    {
        return $this->hasMany(Submission::class, 'conference_id', 'id');
    }

    public function getId() : int
    {
        return $this->id;
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

    public function scopeByConferenceId(Builder $query, int $id)
    {
        return $query->where('id', '=', $id);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    public function setCoc(int $coc)
    {
        $this->coc = $coc;
    }

    public function setCocLink(string $cocLink)
    {
        $this->coc_link = $cocLink;
    }

    public function setAbout(string $about)
    {
        $this->about = $about;
    }

    public function setWebsite(string $website)
    {
        $this->website = $website;
    }

    public function setImage(string $image)
    {
        $this->image_link = $image;
    }
}
