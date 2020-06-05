<?php

namespace App\Transformers;

use App\Contact;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{
    public function transform(Contact $contact)
    {
        return [
            'id' => $contact->id,
            'title' => $contact->title,
            'content' => $contact->content,
            'icon' => 'http://whutcats.test/upload/'.$contact->icon,
        ];
    }
}
