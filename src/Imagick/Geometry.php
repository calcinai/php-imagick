<?php
/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Imagick;


class Geometry {

    public $width;
    public $height;
    public $offset_x = 0;
    public $offset_y = 0;

    public $area;

    public $scale_mode;

    const SCALE_MAXIMUM     = '';
    const SCALE_MINIMUM     = '^';
    const SCALE_EMPHATIC    = '!';
    const SCALE_SHRINK      = '>';
    const SCALE_ENLARGE     = '<';

    public function __construct($width = null, $height = null, $offset_x = null, $offset_y = null) {

        $this->width = $width;
        $this->height = $height;
        $this->offset_x = $offset_x;
        $this->offset_y = $offset_y;
    }

    /**
     * @return string
     */
    public function compile(){

        if($this->area !== null){
            return sprintf('%s@', $this->area);
        }

        $compiled = '';

        if($this->width !== null){
            $compiled .= $this->width;
        }

        $compiled .= 'x';

        if($this->height !== null){
            $compiled .= $this->height;
        }

        if($this->scale_mode !== null){
            $compiled .= sprintf('%s', $this->scale_mode);
        }

        $compiled .= sprintf('%s%d', $this->offset_x < 0 ? '-' : '+', abs($this->offset_x));
        $compiled .= sprintf('%s%d', $this->offset_y < 0 ? '-' : '+', abs($this->offset_y));

        return $compiled;

    }


    public function __toString() {
        return $this->compile();
    }

}