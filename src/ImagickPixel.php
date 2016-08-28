<?php
/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

/**
 * Class ImagickPixel
 */
class ImagickPixel {
    /** @return bool */
    public function clear() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * ImagickPixel constructor.
     * @param string $color
     */
    public function __construct($color) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function destroy() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $normalized
     * @return array
     */
    public function getColor($normalized = false) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getColorAsString() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getColorCount() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return mixed */
    public function getColorQuantum() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $color
     * @return float
     */
    public function getColorValue($color) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return mixed */
    public function getColorValueQuantum() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getHSL() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getIndex() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickPixel $color
     * @param float $fuzz
     * @return bool
     */
    public function isPixelSimilar(ImagickPixel $color, $fuzz) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $color
     * @param string $fuzz
     * @return bool
     */
    public function isPixelSimilarQuantum($color, $fuzz) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickPixel $color
     * @param float $fuzz
     * @return bool
     */
    public function isSimilar(ImagickPixel $color, $fuzz) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $color
     * @return bool
     */
    public function setColor($color) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $colorCount
     */
    public function setcolorcount($colorCount) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $color
     * @param float $value
     * @return bool
     */
    public function setColorValue($color, $value) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $color
     * @param mixed $value
     */
    public function setColorValueQuantum($color, $value) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $hue
     * @param float $saturation
     * @param float $luminosity
     * @return bool
     */
    public function setHSL($hue, $saturation, $luminosity) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $index
     */
    public function setIndex($index) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }
}