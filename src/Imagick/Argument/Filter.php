<?php

/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Imagick\Argument;

use Imagick\Argument;

class Filter extends Argument{

    public function __construct($value) {
        parent::__construct('filter', self::lookupFilterValue($value));
    }


    private static function lookupFilterValue($value){
        switch($value){
            case \Imagick::FILTER_POINT:
                return 'Point';
            case \Imagick::FILTER_BOX :
                return 'Box';
            case \Imagick::FILTER_TRIANGLE:
                return 'Triangle';
            case \Imagick::FILTER_HERMITE:
                return 'Hermite';
            case \Imagick::FILTER_HANNING:
                return 'Hanning';
            case \Imagick::FILTER_HAMMING:
                return 'Hamming';
            case \Imagick::FILTER_BLACKMAN:
                return 'Blackman';
            case \Imagick::FILTER_GAUSSIAN:
                return 'Gaussian';
            case \Imagick::FILTER_QUADRATIC:
                return 'Quadratic';
            case \Imagick::FILTER_CUBIC:
                return 'Cubic';
            case \Imagick::FILTER_CATROM:
                return 'Catrom';
            case \Imagick::FILTER_MITCHELL:
                return 'Mitchell';
            case \Imagick::FILTER_LANCZOS:
                return 'Lanczos';
        }

        //Need to deal with this somehow..
        return '';
    }



}