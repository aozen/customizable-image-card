<?php

namespace Aozen\CustomizableImageCard;

use Laravel\Nova\Card;

class CustomizableImageCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    public function __construct()
    {
        return $this->withMeta([
            'title' => 'This package offers you customizable card options. Which includes: \'content area, image, redirect url, text color, size of image and sidebyside(image and text) option\'',
            'imageUrl' => 'https://picsum.photos/600/120',
            'redirectUrl' => null,
            'textcolor' => '#B22222',
            'isFlex' => 'd-flex-center',
            'imgsize' => 'w-30 justflexend',
            'textsize' => 'w-70 justflexstart',
            'panelheight' => '',
            'fontsize' => '1.875rem'
        ]);

    }

    public function content($string) {
        return $this->withMeta(['title' => $string]);
    }

    public function image($string) {
        return $this->withMeta(['imageUrl' => $string]);
    }

    public function url($string) {
        return $this->withMeta(['redirectUrl' => $string]);
    }

    public function color($string) {
        return $this->withMeta(['textcolor' => $string]);
    }

    //use with px, ex: 75px
    public function panelheight($string) {
        return $this->withMeta(['panelheight' => $string]);
    }

    //default 1.875rem
    public function fontsize($string) {
        return $this->withMeta(['fontsize' => $string]);
    }

    public function sizeOfImage($int)
    {
        if($int == 100) {
            return $this->withMeta(['imgsize' => "w-100 justify-center", 'textsize' => "w-100 justify-center", 'isFlex' => ""]);
        }
        else {
            return $this->withMeta(['imgsize' => "w-".$int . " justflexend", 'textsize' => "w-".(100 - $int) . " justflexstart", 'isFlex'=> "d-flex-center"]);
        }
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'customizable-image-card';
    }
}
