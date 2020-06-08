<?php

namespace App\Transformers;

use App\Cat;
use League\Fractal\TransformerAbstract;

class CatTransformer extends TransformerAbstract
{
    public function transform(Cat $cat)
    {
        $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
            (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
            ? 'https://' : 'http://';

        return [
            'id' => $cat->id,
            'name' => $cat->name,
            'sex' => $cat->sex,
            'sterilization' => $cat->sterilization,
            'deworming' => $cat->deworming,
            'vaccine' => $cat->vaccine,
            'introduction' => $cat->introduction,
            'shortintro' => $cat->shortintro,
            'charactor' => $cat->charactor,
            'show' => $cat->show,
            'campus' => $cat->campus,
            'pic' => $http_type.$_SERVER["HTTP_HOST"].'/upload/'.$cat->pic,
            'head' => $http_type.$_SERVER["HTTP_HOST"].'/upload/'.$cat->head,
        ];
    }
}
