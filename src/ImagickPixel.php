<?php
/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

/**
 * Class ImagickPixel
 */
class ImagickPixel {
    private $color = NULL;
    
    static private $colors = [
        'BLACK' => 0x000000,
        'WHITE' => 0xFFFFFF,
        'AQUA' => 0x1ABC9C,
        'GREEN' => 0x2ECC71,
        'BLUE' => 0x3498DB,
        'PURPLE' => 0x9B59B6,
        'GOLD' => 0xF1C40F,
        'ORANGE' => 0xE67E22,
        'RED' => 0xE74C3C,
        'GREY' => 0x95A5A6,
        'NAVY' => 0x34495E,
        'DARK_AQUA' => 0x11806A,
        'DARK_GREEN' => 0x1F8B4C,
        'DARK_BLUE' => 0x206694,
        'DARK_PURPLE' => 0x71368A,
        'DARK_GOLD' => 0xC27C0E,
        'DARK_ORANGE' => 0xA84300,
        'DARK_RED' => 0x992D22,
        'DARK_GREY' => 0x979C9F,
        'LIGHT_GREY' => 0xBCC0C0,
        'DARKER_GREY' => 0x7F8C8D,
        'DARK_NAVY' => 0x2C3E50,
        'BLURPLE' => 0x7289DA,
        'GREYPLE' => 0x99AAB5,
        'DARK_BUT_NOT_BLACK' => 0x2C2F33,
        'NOT_QUITE_BLACK' => 0x23272A
    ];
    
    /** @return bool */
    public function clear() {
        $this->color = null;
        return true;
    }

    /**
     * ImagickPixel constructor.
     * @param string $color
     */
    public function __construct($color) {
        $this->setColor($color);
    }

    /** @return bool */
    public function destroy() {
        return $this->clear();
    }

    /**
     * @param bool $normalized
     * @return array
     */
    public function getColor($normalized = false) {
        return $this->color;
    }

    /** @return string */
    public function getColorAsString() {
        $color = ($this->color[0] << 16) + ($this->color[1] << 8) + $this->color;
        
        $key = array_search(self::$colors, $color);
        if($key !== false) {
            return self::$colors[$key];
        }
        
        return 'unknown';
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
        return ($this->color[0] << 16) + ($this->color[1] << 8) + $this->color;
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
        if(is_string($color)) {
            $color = str_replace('#', '', $color);
        }
        
        if(is_array($color)) {
            $this->color = $color;
        } elseif(is_numeric($color) === true AND strlen($color) == 6) {
            $this->color = [ (int) substr($color, 0, 2), (int) substr($color, 3, 4), (int) substr($color, 5, 6) ];
        } elseif(isset(self::$colors[strtoupper($color)])) {
            $color = self::$colors[strtoupper($color)];
            $this->color = [ ($color >> 16) & 255, ($color >> 8) & 255, $color & 255 ]
        } else {
            throw new Exception(sprintf('Can not resolve color %s', $color));
        }
    }

    /**
     * @param string $colorCount
     */
    public function setColorCount($colorCount) {
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
