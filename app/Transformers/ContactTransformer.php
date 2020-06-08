<?php

namespace App\Transformers;

use App\Contact;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{
    public function transform(Contact $contact)
    {

    $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
        (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
        ? 'https://' : 'http://';

        return [
            'id' => $contact->id,
            'title' => $contact->title,
            'content' => $contact->content,
            'icon' => $http_type.$_SERVER["HTTP_HOST"].'/upload/'.$contact->icon,
        ];
    }
}
