<?php

/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Imagick;

class Argument {

    public $name;
    public $value;

    public function __construct($name, $value = null) {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function compile() {
        $string = sprintf('-%s', $this->name);
        if ($this->value !== null) {
            $string .= sprintf(' "%s"', $this->value);
        }
        return $string;
    }

    public function __toString() {
        return $this->compile();
    }

}
