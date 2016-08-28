<?php
/**
 * @package    php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

/**
 * Class ImagickPixelIterator
 */
class ImagickPixelIterator {
    /** @return bool */
    public function clear() {
    }

    /**
     * ImagickPixelIterator constructor.
     * @param Imagick $wand
     */
    public function __construct(Imagick $wand) {
    }

    /** @return bool */
    public function destroy() {
    }

    /** @return array */
    public function getCurrentIteratorRow() {
    }

    /** @return int */
    public function getIteratorRow() {
    }

    /** @return array */
    public function getNextIteratorRow() {
    }

    /** @return array */
    public function getPreviousIteratorRow() {
    }

    /**
     * @param Imagick $wand
     * @return bool
     */
    public function newPixelIterator(Imagick $wand) {
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
    }

    /** @return bool */
    public function resetIterator() {
    }

    /** @return bool */
    public function setIteratorFirstRow() {
    }

    /** @return bool */
    public function setIteratorLastRow() {
    }

    /**
     * @param int $row
     * @return bool
     */
    public function setIteratorRow($row) {
    }

    /** @return bool */
    public function syncIterator() {
    }
}