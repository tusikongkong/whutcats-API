<?php

namespace App\Transformers;

use App\Cat;
use League\Fractal\TransformerAbstract;

class CatTransformer extends TransformerAbstract
{
    public function transform(Cat $cat)
    {
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
            'pic' => 'http://whutcats.test/upload/'.$cat->pic
        ];
    }
}
