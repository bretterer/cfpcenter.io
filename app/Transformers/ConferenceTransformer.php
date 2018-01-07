<?php

namespace App\Transformers;

use App\Models\Conference;
use League\Fractal\TransformerAbstract;

class ConferenceTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'tags',
    ];

    public function transform(Conference $conference)
    {
        return [
            'id'        => $conference->getId(),
            'name'      => $conference->getName(),
            'city'      => $conference->getCity(),
            'state'     => $conference->getState(),
            'country'   => $conference->getCountry(),
            'coc'       => $conference->getCoc(),
            'cocLink'   => $conference->getCocLink(),
            'website'   => $conference->getWebsite(),
            'about'     => $conference->getAbout(),
            'image'     => $conference->getImage(),
        ];
    }

    public function includeTags($conference)
    {
        return $this->collection($conference->tags, new TagsTransformer());
    }
}
