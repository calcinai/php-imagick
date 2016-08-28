<?php

/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Imagick;

class Argument {

    public $name;
    public $value;

    public function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function compile(){
        return sprintf('-%s "%s"', $this->name, $this->value);
    }

    public function __toString() {
        return $this->compile();
    }

}