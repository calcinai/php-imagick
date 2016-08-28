<?php

/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Imagick\Argument;

use Imagick\Argument;

class Gravity extends Argument{

    public function __construct($value) {
        parent::__construct('gravity', self::lookupGravityValue($value));
    }

    private static function lookupGravityValue($value){
        switch($value){
        case \Imagick::GRAVITY_NORTHWEST:
            return 'NorthWest';
        case \Imagick::GRAVITY_NORTH:
            return 'North';
        case \Imagick::GRAVITY_NORTHEAST:
            return 'NorthEast';
        case \Imagick::GRAVITY_WEST:
            return 'West';
        case \Imagick::GRAVITY_EAST:
            return 'East';
        case \Imagick::GRAVITY_SOUTHWEST:
            return 'SouthWest';
        case \Imagick::GRAVITY_SOUTH:
            return 'South';
        case \Imagick::GRAVITY_SOUTHEAST:
            return 'SouthEast';
        case \Imagick::GRAVITY_CENTER:
            return 'Center';
        default:
            return 'undefined';
        }
    }



}