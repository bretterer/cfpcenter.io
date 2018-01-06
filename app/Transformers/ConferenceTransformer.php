<?php

namespace App\Transformers;

use App\Models\Conference;
use League\Fractal\TransformerAbstract;

class ConferenceTransformer extends TransformerAbstract
{
    public function transform(Conference $conference)
    {
        return [
            'name'      => $conference->getName(),
            'city'      => $conference->getCity(),
            'state'     => $conference->getState(),
            'country'   => $conference->getCountry(),
            'coc'       => $conference->getCoc(),
            'cocLink'   => $conference->getCocLink(),
            'website'   => $conference->getWebsite(),
            'image'     => $conference->getImage(),
        ];
    }
}
