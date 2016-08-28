<?php
/**
 * @package    php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

/**
 * Class ImagickPixel
 */
class ImagickPixel {
    /** @return bool */
    public function clear() {
    }

    /**
     * ImagickPixel constructor.
     * @param string $color
     */
    public function __construct($color) {
    }

    /** @return bool */
    public function destroy() {
    }

    /**
     * @param bool $normalized
     * @return array
     */
    public function getColor($normalized = false) {
    }

    /** @return string */
    public function getColorAsString() {
    }

    /** @return int */
    public function getColorCount() {
    }

    /** @return mixed */
    public function getColorQuantum() {
    }

    /**
     * @param int $color
     * @return float
     */
    public function getColorValue($color) {
    }

    /** @return mixed */
    public function getColorValueQuantum() {
    }

    /** @return array */
    public function getHSL() {
    }

    /** @return int */
    public function getIndex() {
    }

    /**
     * @param ImagickPixel $color
     * @param float $fuzz
     * @return bool
     */
    public function isPixelSimilar(ImagickPixel $color, $fuzz) {
    }

    /**
     * @param string $color
     * @param string $fuzz
     * @return bool
     */
    public function isPixelSimilarQuantum($color, $fuzz) {
    }

    /**
     * @param ImagickPixel $color
     * @param float $fuzz
     * @return bool
     */
    public function isSimilar(ImagickPixel $color, $fuzz) {
    }

    /**
     * @param string $color
     * @return bool
     */
    public function setColor($color) {
    }

    /**
     * @param string $colorCount
     */
    public function setcolorcount($colorCount) {
    }

    /**
     * @param int $color
     * @param float $value
     * @return bool
     */
    public function setColorValue($color, $value) {
    }

    /**
     * @param int $color
     * @param mixed $value
     */
    public function setColorValueQuantum($color, $value) {
    }

    /**
     * @param float $hue
     * @param float $saturation
     * @param float $luminosity
     * @return bool
     */
    public function setHSL($hue, $saturation, $luminosity) {
    }

    /**
     * @param int $index
     */
    public function setIndex($index) {
    }
}