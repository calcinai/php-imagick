<?php

/**
 * @package    php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
class ImagickDraw {
    /**
     * @param array $affine
     * @return bool
     */
    public function affine(array $affine) {
    }

    /**
     * @param float $x
     * @param float $y
     * @param string $text
     * @return bool
     */
    public function annotation( $x, $y, $text) {
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
    public function arc( $sx, $sy, $ex, $ey, $sd, $ed) {
    }

    /**
     * @param array $coordinates
     * @return bool
     */
    public function bezier(array $coordinates) {
    }

    /**
     * @param float $ox
     * @param float $oy
     * @param float $px
     * @param float $py
     * @return bool
     */
    public function circle( $ox, $oy, $px, $py) {
    }

    /** @return bool */
    public function clear() {
    }

    /** @return ImagickDraw */
    public function __clone () {
    }

    /**
     * @param float $x
     * @param float $y
     * @param int $paintMethod
     * @return bool
     */
    public function color( $x, $y, $paintMethod) {
    }

    /**
     * @param string $comment
     * @return bool
     */
    public function comment( $comment) {
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
    public function composite( $compose, $x, $y, $width, $height, Imagick $compositeWand) {
    }

    /**
     * ImagickDraw constructor.
     */
    public function __construct() {
    }

    /** @return bool */
    public function destroy() {
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
    public function ellipse( $ox, $oy, $rx, $ry, $start, $end) {
    }

    /** @return string */
    public function getClipPath() {
    }

    /** @return int */
    public function getClipRule() {
    }

    /** @return int */
    public function getClipUnits() {
    }

    /** @return ImagickPixel */
    public function getFillColor() {
    }

    /** @return float */
    public function getFillOpacity() {
    }

    /** @return int */
    public function getFillRule() {
    }

    /** @return string */
    public function getFont() {
    }

    /** @return string */
    public function getFontFamily() {
    }

    /** @return float */
    public function getFontSize() {
    }

    /** @return int */
    public function getFontStretch() {
    }

    /** @return int */
    public function getFontStyle() {
    }

    /** @return int */
    public function getFontWeight() {
    }

    /** @return int */
    public function getGravity() {
    }

    /** @return bool */
    public function getStrokeAntialias() {
    }

    /** @return ImagickPixel */
    public function getStrokeColor() {
    }

    /** @return array */
    public function getStrokeDashArray() {
    }

    /** @return float */
    public function getStrokeDashOffset() {
    }

    /** @return int */
    public function getStrokeLineCap() {
    }

    /** @return int */
    public function getStrokeLineJoin() {
    }

    /** @return int */
    public function getStrokeMiterLimit() {
    }

    /** @return float */
    public function getStrokeOpacity() {
    }

    /** @return float */
    public function getStrokeWidth() {
    }

    /** @return int */
    public function getTextAlignment() {
    }

    /** @return bool */
    public function getTextAntialias() {
    }

    /** @return int */
    public function getTextDecoration() {
    }

    /** @return string */
    public function getTextEncoding() {
    }

    /** @return float */
    public function getTextInterlineSpacing() {
    }

    /** @return float */
    public function getTextInterwordSpacing() {
    }

    /** @return float */
    public function getTextKerning() {
    }

    /** @return ImagickPixel */
    public function getTextUnderColor() {
    }

    /** @return string */
    public function getVectorGraphics() {
    }

    /**
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     * @return bool
     */
    public function line( $sx, $sy, $ex, $ey) {
    }

    /**
     * @param float $x
     * @param float $y
     * @param int $paintMethod
     * @return bool
     */
    public function matte( $x, $y, $paintMethod) {
    }

    /** @return bool */
    public function pathClose() {
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
    public function pathCurveToAbsolute( $x1, $y1, $x2, $y2, $x, $y) {
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierAbsolute( $x1, $y1, $x, $y) {
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierRelative( $x1, $y1, $x, $y) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierSmoothAbsolute( $x, $y) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToQuadraticBezierSmoothRelative( $x, $y) {
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
    public function pathCurveToRelative( $x1, $y1, $x2, $y2, $x, $y) {
    }

    /**
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToSmoothAbsolute( $x2, $y2, $x, $y) {
    }

    /**
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathCurveToSmoothRelative( $x2, $y2, $x, $y) {
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
    public function pathEllipticArcAbsolute( $rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {
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
    public function pathEllipticArcRelative( $rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {
    }

    /** @return bool */
    public function pathFinish() {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathLineToAbsolute( $x, $y) {
    }

    /**
     * @param float $x
     * @return bool
     */
    public function pathLineToHorizontalAbsolute( $x) {
    }

    /**
     * @param float $x
     * @return bool
     */
    public function pathLineToHorizontalRelative( $x) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathLineToRelative( $x, $y) {
    }

    /**
     * @param float $y
     * @return bool
     */
    public function pathLineToVerticalAbsolute( $y) {
    }

    /**
     * @param float $y
     * @return bool
     */
    public function pathLineToVerticalRelative( $y) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathMoveToAbsolute( $x, $y) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function pathMoveToRelative( $x, $y) {
    }

    /** @return bool */
    public function pathStart() {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function point( $x, $y) {
    }

    /**
     * @param array $coordinates
     * @return bool
     */
    public function polygon(array $coordinates) {
    }

    /**
     * @param array $coordinates
     * @return bool
     */
    public function polyline(array $coordinates) {
    }

    /** @return bool */
    public function pop() {
    }

    /** @return bool */
    public function popClipPath() {
    }

    /** @return bool */
    public function popDefs() {
    }

    /** @return bool */
    public function popPattern() {
    }

    /** @return bool */
    public function push() {
    }

    /**
     * @param string $clip_mask_id
     * @return bool
     */
    public function pushClipPath( $clip_mask_id) {
    }

    /** @return bool */
    public function pushDefs() {
    }

    /**
     * @param string $pattern_id
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     * @return bool
     */
    public function pushPattern( $pattern_id, $x, $y, $width, $height) {
    }

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @return bool
     */
    public function rectangle( $x1, $y1, $x2, $y2) {
    }

    /** @return bool */
    public function render() {
    }

    /**
     *
     */
    public function resetVectorGraphics() {
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function rotate( $degrees) {
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
    public function roundRectangle( $x1, $y1, $x2, $y2, $rx, $ry) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function scale( $x, $y) {
    }

    /**
     * @param string $clip_mask
     * @return bool
     */
    public function setClipPath( $clip_mask) {
    }

    /**
     * @param int $fill_rule
     * @return bool
     */
    public function setClipRule( $fill_rule) {
    }

    /**
     * @param int $clip_units
     * @return bool
     */
    public function setClipUnits( $clip_units) {
    }

    /**
     * @param float $opacity
     * @return bool
     */
    public function setFillAlpha( $opacity) {
    }

    /**
     * @param ImagickPixel $fill_pixel
     * @return bool
     */
    public function setFillColor(ImagickPixel $fill_pixel) {
    }

    /**
     * @param float $fillOpacity
     * @return bool
     */
    public function setFillOpacity( $fillOpacity) {
    }

    /**
     * @param string $fill_url
     * @return bool
     */
    public function setFillPatternURL( $fill_url) {
    }

    /**
     * @param int $fill_rule
     * @return bool
     */
    public function setFillRule( $fill_rule) {
    }

    /**
     * @param string $font_name
     * @return bool
     */
    public function setFont( $font_name) {
    }

    /**
     * @param string $font_family
     * @return bool
     */
    public function setFontFamily( $font_family) {
    }

    /**
     * @param float $pointsize
     * @return bool
     */
    public function setFontSize( $pointsize) {
    }

    /**
     * @param int $fontStretch
     * @return bool
     */
    public function setFontStretch( $fontStretch) {
    }

    /**
     * @param int $style
     * @return bool
     */
    public function setFontStyle( $style) {
    }

    /**
     * @param int $font_weight
     * @return bool
     */
    public function setFontWeight( $font_weight) {
    }

    /**
     * @param int $gravity
     * @return bool
     */
    public function setGravity( $gravity) {
    }

    /**
     * @param string $x_resolution
     * @param string $y_resolution
     */
    public function setResolution( $x_resolution, $y_resolution) {
    }

    /**
     * @param float $opacity
     * @return bool
     */
    public function setStrokeAlpha( $opacity) {
    }

    /**
     * @param bool $stroke_antialias
     * @return bool
     */
    public function setStrokeAntialias( $stroke_antialias) {
    }

    /**
     * @param ImagickPixel $stroke_pixel
     * @return bool
     */
    public function setStrokeColor(ImagickPixel $stroke_pixel) {
    }

    /**
     * @param array $dashArray
     * @return bool
     */
    public function setStrokeDashArray(array $dashArray) {
    }

    /**
     * @param float $dash_offset
     * @return bool
     */
    public function setStrokeDashOffset( $dash_offset) {
    }

    /**
     * @param int $linecap
     * @return bool
     */
    public function setStrokeLineCap( $linecap) {
    }

    /**
     * @param int $linejoin
     * @return bool
     */
    public function setStrokeLineJoin( $linejoin) {
    }

    /**
     * @param int $miterlimit
     * @return bool
     */
    public function setStrokeMiterLimit( $miterlimit) {
    }

    /**
     * @param float $stroke_opacity
     * @return bool
     */
    public function setStrokeOpacity( $stroke_opacity) {
    }

    /**
     * @param string $stroke_url
     * @return bool
     */
    public function setStrokePatternURL( $stroke_url) {
    }

    /**
     * @param float $stroke_width
     * @return bool
     */
    public function setStrokeWidth( $stroke_width) {
    }

    /**
     * @param int $alignment
     * @return bool
     */
    public function setTextAlignment( $alignment) {
    }

    /**
     * @param bool $antiAlias
     * @return bool
     */
    public function setTextAntialias( $antiAlias) {
    }

    /**
     * @param int $decoration
     * @return bool
     */
    public function setTextDecoration( $decoration) {
    }

    /**
     * @param string $encoding
     * @return bool
     */
    public function setTextEncoding( $encoding) {
    }

    /**
     * @param float $spacing
     */
    public function setTextInterlineSpacing( $spacing) {
    }

    /**
     * @param float $spacing
     */
    public function setTextInterwordSpacing( $spacing) {
    }

    /**
     * @param float $kerning
     */
    public function setTextKerning( $kerning) {
    }

    /**
     * @param ImagickPixel $under_color
     * @return bool
     */
    public function setTextUnderColor(ImagickPixel $under_color) {
    }

    /**
     * @param string $xml
     * @return bool
     */
    public function setVectorGraphics( $xml) {
    }

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @return bool
     */
    public function setViewbox( $x1, $y1, $x2, $y2) {
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function skewX( $degrees) {
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function skewY( $degrees) {
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function translate( $x, $y) {
    }
}