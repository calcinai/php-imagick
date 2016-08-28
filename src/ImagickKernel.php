<?php
/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */

/**
 * Class ImagickKernel
 */
class ImagickKernel {
    /**
     * @param ImagickKernel $ImagickKernel
     */
    public function addKernel(ImagickKernel $ImagickKernel) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     *
     */
    public function addUnityKernel() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $kernelType
     * @param string $kernelString
     * @return ImagickKernel
     */
    public static function fromBuiltin($kernelType, $kernelString) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $matrix
     * @param array $origin
     * @return ImagickKernel
     */
    public static function fromMatrix(array $matrix, array $origin) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getMatrix() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     *
     */
    public function scale() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function separate() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }
}