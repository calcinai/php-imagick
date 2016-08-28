<?php

/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
class ImagickDraw {
    /**
     * @param array $affine
     * @return bool
     */
    public function affine(array $affine) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @param string $text
     * @return bool
     */
    public function annotation($x, $y, $text) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     * @param float $sd
     * @param float $ed
     * @return bool
     */
    public function arc($sx, $sy, $ex, $ey, $sd, $ed) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $coordinates
     * @return bool
     */
    public function bezier(array $coordinates) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $ox
     * @param float $oy
     * @param float $px
     * @param float $py
     * @return bool
     */
    public function circle($ox, $oy, $px, $py) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function clear() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickDraw */
    public function __clone() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @param int $paintMethod
     * @return bool
     */
    public function color($x, $y, $paintMethod) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $comment
     * @return bool
     */
    public function comment($comment) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $compose
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     * @param Imagick $compositeWand
     * @return bool
     */
    public function composite($compose, $x, $y, $width, $height, Imagick $compositeWand) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * ImagickDraw constructor.
     */
    public function __construct() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function destroy() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $ox
     * @param float $oy
     * @param float $rx
     * @param float $ry
     * @param float $start
     * @param float $end
     * @return bool
     */
    public function ellipse($ox, $oy, $rx, $ry, $start, $end) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getClipPath() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getClipRule() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getClipUnits() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixel */
    public function getFillColor() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getFillOpacity() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getFillRule() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getFont() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getFontFamily() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getFontSize() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getFontStretch() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getFontStyle() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getFontWeight() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getGravity() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function getStrokeAntialias() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixel */
    public function getStrokeColor() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getStrokeDashArray() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getStrokeDashOffset() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getStrokeLineCap() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getStrokeLineJoin() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getStrokeMiterLimit() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getStrokeOpacity() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getStrokeWidth() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getTextAlignment() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function getTextAntialias() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getTextDecoration() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getTextEncoding() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getTextInterlineSpacing() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getTextInterwordSpacing() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getTextKerning() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixel */
    public function getTextUnderColor() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getVectorGraphics() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     * @return bool
     */
    public function line($sx, $sy, $ex, $ey) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @param int $paintMethod
     * @return bool
     */
    public function matte($x, $y, $paintMethod) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function pathClose() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToAbsolute($x1, $y1, $x2, $y2, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierAbsolute($x1, $y1, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierRelative($x1, $y1, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierSmoothAbsolute($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierSmoothRelative($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToRelative($x1, $y1, $x2, $y2, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToSmoothAbsolute($x2, $y2, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToSmoothRelative($x2, $y2, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $rx
     * @param float $ry
     * @param float $x_axis_rotation
     * @param bool $large_arc_flag
     * @param bool $sweep_flag
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathEllipticArcAbsolute($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $rx
     * @param float $ry
     * @param float $x_axis_rotation
     * @param bool $large_arc_flag
     * @param bool $sweep_flag
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathEllipticArcRelative($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function pathFinish() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathLineToAbsolute($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @return bool
     */
    public function pathLineToHorizontalAbsolute($x) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @return bool
     */
    public function pathLineToHorizontalRelative($x) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathLineToRelative($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $y
     * @return bool
     */
    public function pathLineToVerticalAbsolute($y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $y
     * @return bool
     */
    public function pathLineToVerticalRelative($y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathMoveToAbsolute($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathMoveToRelative($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function pathStart() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function point($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $coordinates
     * @return bool
     */
    public function polygon(array $coordinates) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $coordinates
     * @return bool
     */
    public function polyline(array $coordinates) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function pop() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function popClipPath() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function popDefs() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function popPattern() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function push() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $clip_mask_id
     * @return bool
     */
    public function pushClipPath($clip_mask_id) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function pushDefs() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pattern_id
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     * @return bool
     */
    public function pushPattern($pattern_id, $x, $y, $width, $height) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @return bool
     */
    public function rectangle($x1, $y1, $x2, $y2) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function render() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     *
     */
    public function resetVectorGraphics() {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function rotate($degrees) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $rx
     * @param float $ry
     * @return bool
     */
    public function roundRectangle($x1, $y1, $x2, $y2, $rx, $ry) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function scale($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $clip_mask
     * @return bool
     */
    public function setClipPath($clip_mask) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $fill_rule
     * @return bool
     */
    public function setClipRule($fill_rule) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $clip_units
     * @return bool
     */
    public function setClipUnits($clip_units) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $opacity
     * @return bool
     */
    public function setFillAlpha($opacity) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickPixel $fill_pixel
     * @return bool
     */
    public function setFillColor(ImagickPixel $fill_pixel) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $fillOpacity
     * @return bool
     */
    public function setFillOpacity($fillOpacity) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $fill_url
     * @return bool
     */
    public function setFillPatternURL($fill_url) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $fill_rule
     * @return bool
     */
    public function setFillRule($fill_rule) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $font_name
     * @return bool
     */
    public function setFont($font_name) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $font_family
     * @return bool
     */
    public function setFontFamily($font_family) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $pointsize
     * @return bool
     */
    public function setFontSize($pointsize) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $fontStretch
     * @return bool
     */
    public function setFontStretch($fontStretch) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $style
     * @return bool
     */
    public function setFontStyle($style) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $font_weight
     * @return bool
     */
    public function setFontWeight($font_weight) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $gravity
     * @return bool
     */
    public function setGravity($gravity) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $x_resolution
     * @param string $y_resolution
     */
    public function setResolution($x_resolution, $y_resolution) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $opacity
     * @return bool
     */
    public function setStrokeAlpha($opacity) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $stroke_antialias
     * @return bool
     */
    public function setStrokeAntialias($stroke_antialias) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickPixel $stroke_pixel
     * @return bool
     */
    public function setStrokeColor(ImagickPixel $stroke_pixel) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $dashArray
     * @return bool
     */
    public function setStrokeDashArray(array $dashArray) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $dash_offset
     * @return bool
     */
    public function setStrokeDashOffset($dash_offset) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $linecap
     * @return bool
     */
    public function setStrokeLineCap($linecap) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $linejoin
     * @return bool
     */
    public function setStrokeLineJoin($linejoin) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $miterlimit
     * @return bool
     */
    public function setStrokeMiterLimit($miterlimit) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $stroke_opacity
     * @return bool
     */
    public function setStrokeOpacity($stroke_opacity) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $stroke_url
     * @return bool
     */
    public function setStrokePatternURL($stroke_url) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $stroke_width
     * @return bool
     */
    public function setStrokeWidth($stroke_width) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $alignment
     * @return bool
     */
    public function setTextAlignment($alignment) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $antiAlias
     * @return bool
     */
    public function setTextAntialias($antiAlias) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $decoration
     * @return bool
     */
    public function setTextDecoration($decoration) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $encoding
     * @return bool
     */
    public function setTextEncoding($encoding) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $spacing
     */
    public function setTextInterlineSpacing($spacing) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $spacing
     */
    public function setTextInterwordSpacing($spacing) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $kerning
     */
    public function setTextKerning($kerning) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickPixel $under_color
     * @return bool
     */
    public function setTextUnderColor(ImagickPixel $under_color) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $xml
     * @return bool
     */
    public function setVectorGraphics($xml) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @return bool
     */
    public function setViewbox($x1, $y1, $x2, $y2) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function skewX($degrees) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function skewY($degrees) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function translate($x, $y) {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }
}