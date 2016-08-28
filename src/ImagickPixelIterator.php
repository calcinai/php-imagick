<?php
/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

/**
 * Class ImagickPixelIterator
 */
class ImagickPixelIterator {
    /** @return bool */
    public function clear() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * ImagickPixelIterator constructor.
     * @param Imagick $wand
     */
    public function __construct(Imagick $wand) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function destroy() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getCurrentIteratorRow() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getIteratorRow() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getNextIteratorRow() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getPreviousIteratorRow() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $wand
     * @return bool
     */
    public function newPixelIterator(Imagick $wand) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $wand
     * @param int $x
     * @param int $y
     * @param int $columns
     * @param int $rows
     * @return bool
     */
    public function newPixelRegionIterator(Imagick $wand, $x, $y, $columns, $rows) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function resetIterator() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function setIteratorFirstRow() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function setIteratorLastRow() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $row
     * @return bool
     */
    public function setIteratorRow($row) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function syncIterator() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }
}