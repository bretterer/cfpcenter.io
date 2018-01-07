<?php

namespace App\Transformers;

use App\Models\Tag;
use League\Fractal\TransformerAbstract;

class TagsTransformer extends TransformerAbstract
{

    public function transform(Tag $tag)
    {
        return [
            'tag' => $tag,
        ];
    }
}
