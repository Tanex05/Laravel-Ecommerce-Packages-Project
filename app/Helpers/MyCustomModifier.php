<?php

namespace App\Helpers;

use Intervention\Image\Interfaces\ModifierInterface;
use Intervention\Image\Interfaces\ImageInterface;

// find a fix if capable

class MyCustomModifier implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        $image->greyscale();

        return $image;
    }
}
