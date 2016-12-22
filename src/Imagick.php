<?php
use Imagick\Argument;
use Imagick\Geometry;

/**
 * @package    calcinai/php-imagick
 * @author     Michael Calcinai <michael@calcin.ai>
 */
class Imagick implements Iterator
{

    const COLOR_BLACK = 11;
    const COLOR_BLUE = 12;
    const COLOR_CYAN = 13;
    const COLOR_GREEN = 14;
    const COLOR_RED = 15;
    const COLOR_YELLOW = 16;
    const COLOR_MAGENTA = 17;
    const COLOR_OPACITY = 18;
    const COLOR_ALPHA = 19;
    const COLOR_FUZZ = 20;
    const COMPOSITE_DEFAULT = 40;
    const COMPOSITE_UNDEFINED = 0;
    const COMPOSITE_NO = 1;
    const COMPOSITE_ADD = 2;
    const COMPOSITE_ATOP = 3;
    const COMPOSITE_BLEND = 4;
    const COMPOSITE_BUMPMAP = 5;
    const COMPOSITE_CLEAR = 7;
    const COMPOSITE_COLORBURN = 8;
    const COMPOSITE_COLORDODGE = 9;
    const COMPOSITE_COLORIZE = 10;
    const COMPOSITE_COPYBLACK = 11;
    const COMPOSITE_COPYBLUE = 12;
    const COMPOSITE_COPY = 13;
    const COMPOSITE_COPYCYAN = 14;
    const COMPOSITE_COPYGREEN = 15;
    const COMPOSITE_COPYMAGENTA = 16;
    const COMPOSITE_COPYOPACITY = 17;
    const COMPOSITE_COPYRED = 18;
    const COMPOSITE_COPYYELLOW = 19;
    const COMPOSITE_DARKEN = 20;
    const COMPOSITE_DSTATOP = 21;
    const COMPOSITE_DST = 22;
    const COMPOSITE_DSTIN = 23;
    const COMPOSITE_DSTOUT = 24;
    const COMPOSITE_DSTOVER = 25;
    const COMPOSITE_DIFFERENCE = 26;
    const COMPOSITE_DISPLACE = 27;
    const COMPOSITE_DISSOLVE = 28;
    const COMPOSITE_EXCLUSION = 29;
    const COMPOSITE_HARDLIGHT = 30;
    const COMPOSITE_HUE = 31;
    const COMPOSITE_IN = 32;
    const COMPOSITE_LIGHTEN = 33;
    const COMPOSITE_LUMINIZE = 35;
    const COMPOSITE_MINUS = 36;
    const COMPOSITE_MODULATE = 37;
    const COMPOSITE_MULTIPLY = 38;
    const COMPOSITE_OUT = 39;
    const COMPOSITE_OVER = 40;
    const COMPOSITE_OVERLAY = 41;
    const COMPOSITE_PLUS = 42;
    const COMPOSITE_REPLACE = 43;
    const COMPOSITE_SATURATE = 44;
    const COMPOSITE_SCREEN = 45;
    const COMPOSITE_SOFTLIGHT = 46;
    const COMPOSITE_SRCATOP = 47;
    const COMPOSITE_SRC = 48;
    const COMPOSITE_SRCIN = 49;
    const COMPOSITE_SRCOUT = 50;
    const COMPOSITE_SRCOVER = 51;
    const COMPOSITE_SUBTRACT = 52;
    const COMPOSITE_THRESHOLD = 53;
    const COMPOSITE_XOR = 54;
    const MONTAGEMODE_FRAME = 1;
    const MONTAGEMODE_UNFRAME = 2;
    const MONTAGEMODE_CONCATENATE = 3;
    const STYLE_NORMAL = 1;
    const STYLE_ITALIC = 2;
    const STYLE_OBLIQUE = 3;
    const STYLE_ANY = 4;
    const FILTER_UNDEFINED = 0;
    const FILTER_POINT = 1;
    const FILTER_BOX = 2;
    const FILTER_TRIANGLE = 3;
    const FILTER_HERMITE = 4;
    const FILTER_HANNING = 5;
    const FILTER_HAMMING = 6;
    const FILTER_BLACKMAN = 7;
    const FILTER_GAUSSIAN = 8;
    const FILTER_QUADRATIC = 9;
    const FILTER_CUBIC = 10;
    const FILTER_CATROM = 11;
    const FILTER_MITCHELL = 12;
    const FILTER_LANCZOS = 22;
    const FILTER_BESSEL = 13;
    const FILTER_SINC = 14;
    const IMGTYPE_UNDEFINED = 0;
    const IMGTYPE_BILEVEL = 1;
    const IMGTYPE_GRAYSCALE = 2;
    const IMGTYPE_GRAYSCALEMATTE = 3;
    const IMGTYPE_PALETTE = 4;
    const IMGTYPE_PALETTEMATTE = 5;
    const IMGTYPE_TRUECOLOR = 6;
    const IMGTYPE_TRUECOLORMATTE = 7;
    const IMGTYPE_COLORSEPARATION = 8;
    const IMGTYPE_COLORSEPARATIONMATTE = 9;
    const IMGTYPE_OPTIMIZE = 10;
    const RESOLUTION_UNDEFINED = 0;
    const RESOLUTION_PIXELSPERINCH = 1;
    const RESOLUTION_PIXELSPERCENTIMETER = 2;
    const COMPRESSION_UNDEFINED = 0;
    const COMPRESSION_NO = 1;
    const COMPRESSION_BZIP = 2;
    const COMPRESSION_FAX = 6;
    const COMPRESSION_GROUP4 = 7;
    const COMPRESSION_JPEG = 8;
    const COMPRESSION_JPEG2000 = 9;
    const COMPRESSION_LOSSLESSJPEG = 10;
    const COMPRESSION_LZW = 11;
    const COMPRESSION_RLE = 12;
    const COMPRESSION_ZIP = 13;
    const COMPRESSION_DXT1 = 3;
    const COMPRESSION_DXT3 = 4;
    const COMPRESSION_DXT5 = 5;
    const PAINT_POINT = 1;
    const PAINT_REPLACE = 2;
    const PAINT_FLOODFILL = 3;
    const PAINT_FILLTOBORDER = 4;
    const PAINT_RESET = 5;
    const GRAVITY_NORTHWEST = 1;
    const GRAVITY_NORTH = 2;
    const GRAVITY_NORTHEAST = 3;
    const GRAVITY_WEST = 4;
    const GRAVITY_CENTER = 5;
    const GRAVITY_EAST = 6;
    const GRAVITY_SOUTHWEST = 7;
    const GRAVITY_SOUTH = 8;
    const GRAVITY_SOUTHEAST = 9;
    const STRETCH_NORMAL = 1;
    const STRETCH_ULTRACONDENSED = 2;
    const STRETCH_CONDENSED = 4;
    const STRETCH_SEMICONDENSED = 5;
    const STRETCH_SEMIEXPANDED = 6;
    const STRETCH_EXPANDED = 7;
    const STRETCH_EXTRAEXPANDED = 8;
    const STRETCH_ULTRAEXPANDED = 9;
    const STRETCH_ANY = 10;
    const ALIGN_UNDEFINED = 0;
    const ALIGN_LEFT = 1;
    const ALIGN_CENTER = 2;
    const ALIGN_RIGHT = 3;
    const DECORATION_NO = 1;
    const DECORATION_UNDERLINE = 2;
    const DECORATION_OVERLINE = 3;
    const DECORATION_LINETROUGH = 4;
    const NOISE_UNIFORM = 1;
    const NOISE_GAUSSIAN = 2;
    const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
    const NOISE_IMPULSE = 4;
    const NOISE_LAPLACIAN = 5;
    const NOISE_POISSON = 6;
    const NOISE_RANDOM = 7;
    const CHANNEL_UNDEFINED = 0;
    const CHANNEL_RED = 1;
    const CHANNEL_GRAY = 1;
    const CHANNEL_CYAN = 1;
    const CHANNEL_GREEN = 2;
    const CHANNEL_MAGENTA = 2;
    const CHANNEL_BLUE = 4;
    const CHANNEL_YELLOW = 4;
    const CHANNEL_ALPHA = 8;
    const CHANNEL_OPACITY = 8;
    const CHANNEL_MATTE = 8;
    const CHANNEL_BLACK = 32;
    const CHANNEL_INDEX = 32;
    const CHANNEL_ALL = 134217727;
    const CHANNEL_DEFAULT = 134217719;
    const METRIC_UNDEFINED = 0;
    const METRIC_MEANABSOLUTEERROR = 2;
    const METRIC_MEANSQUAREERROR = 4;
    const METRIC_PEAKABSOLUTEERROR = 5;
    const METRIC_PEAKSIGNALTONOISERATIO = 6;
    const METRIC_ROOTMEANSQUAREDERROR = 7;
    const PIXEL_CHAR = 1;
    const PIXEL_DOUBLE = 2;
    const PIXEL_FLOAT = 3;
    const PIXEL_INTEGER = 4;
    const PIXEL_LONG = 5;
    const PIXEL_QUANTUM = 6;
    const PIXEL_SHORT = 7;
    const EVALUATE_UNDEFINED = 0;
    const EVALUATE_ADD = 1;
    const EVALUATE_AND = 2;
    const EVALUATE_DIVIDE = 3;
    const EVALUATE_LEFTSHIFT = 4;
    const EVALUATE_MAX = 5;
    const EVALUATE_MIN = 6;
    const EVALUATE_MULTIPLY = 7;
    const EVALUATE_OR = 8;
    const EVALUATE_RIGHTSHIFT = 9;
    const EVALUATE_SET = 10;
    const EVALUATE_SUBTRACT = 11;
    const EVALUATE_XOR = 12;
    const EVALUATE_POW = 13;
    const EVALUATE_LOG = 14;
    const EVALUATE_THRESHOLD = 15;
    const EVALUATE_THRESHOLDBLACK = 16;
    const EVALUATE_THRESHOLDWHITE = 17;
    const EVALUATE_GAUSSIANNOISE = 18;
    const EVALUATE_IMPULSENOISE = 19;
    const EVALUATE_LAPLACIANNOISE = 20;
    const EVALUATE_MULTIPLICATIVENOISE = 21;
    const EVALUATE_POISSONNOISE = 22;
    const EVALUATE_UNIFORMNOISE = 23;
    const EVALUATE_COSINE = 24;
    const EVALUATE_SINE = 25;
    const EVALUATE_ADDMODULUS = 26;
    const COLORSPACE_UNDEFINED = 0;
    const COLORSPACE_RGB = 1;
    const COLORSPACE_GRAY = 2;
    const COLORSPACE_TRANSPARENT = 3;
    const COLORSPACE_OHTA = 4;
    const COLORSPACE_LAB = 5;
    const COLORSPACE_XYZ = 6;
    const COLORSPACE_YCBCR = 7;
    const COLORSPACE_YCC = 8;
    const COLORSPACE_YIQ = 9;
    const COLORSPACE_YPBPR = 10;
    const COLORSPACE_YUV = 11;
    const COLORSPACE_CMYK = 12;
    const COLORSPACE_SRGB = 13;
    const COLORSPACE_HSB = 14;
    const COLORSPACE_HSL = 15;
    const COLORSPACE_HWB = 16;
    const COLORSPACE_REC601LUMA = 17;
    const COLORSPACE_REC709LUMA = 19;
    const COLORSPACE_LOG = 21;
    const COLORSPACE_CMY = 22;
    const VIRTUALPIXELMETHOD_UNDEFINED = 0;
    const VIRTUALPIXELMETHOD_BACKGROUND = 1;
    const VIRTUALPIXELMETHOD_CONSTANT = 2;
    const VIRTUALPIXELMETHOD_EDGE = 4;
    const VIRTUALPIXELMETHOD_MIRROR = 5;
    const VIRTUALPIXELMETHOD_TILE = 7;
    const VIRTUALPIXELMETHOD_TRANSPARENT = 8;
    const VIRTUALPIXELMETHOD_MASK = 9;
    const VIRTUALPIXELMETHOD_BLACK = 10;
    const VIRTUALPIXELMETHOD_GRAY = 11;
    const VIRTUALPIXELMETHOD_WHITE = 12;
    const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;
    const VIRTUALPIXELMETHOD_VERTICALTILE = 14;
    const PREVIEW_UNDEFINED = 0;
    const PREVIEW_ROTATE = 1;
    const PREVIEW_SHEAR = 2;
    const PREVIEW_ROLL = 3;
    const PREVIEW_HUE = 4;
    const PREVIEW_SATURATION = 5;
    const PREVIEW_BRIGHTNESS = 6;
    const PREVIEW_GAMMA = 7;
    const PREVIEW_SPIFF = 8;
    const PREVIEW_DULL = 9;
    const PREVIEW_GRAYSCALE = 10;
    const PREVIEW_QUANTIZE = 11;
    const PREVIEW_DESPECKLE = 12;
    const PREVIEW_REDUCENOISE = 13;
    const PREVIEW_ADDNOISE = 14;
    const PREVIEW_SHARPEN = 15;
    const PREVIEW_BLUR = 16;
    const PREVIEW_THRESHOLD = 17;
    const PREVIEW_EDGEDETECT = 18;
    const PREVIEW_SPREAD = 19;
    const PREVIEW_SOLARIZE = 20;
    const PREVIEW_SHADE = 21;
    const PREVIEW_RAISE = 22;
    const PREVIEW_SEGMENT = 23;
    const PREVIEW_SWIRL = 24;
    const PREVIEW_IMPLODE = 25;
    const PREVIEW_WAVE = 26;
    const PREVIEW_OILPAINT = 27;
    const PREVIEW_CHARCOALDRAWING = 28;
    const PREVIEW_JPEG = 29;
    const RENDERINGINTENT_UNDEFINED = 0;
    const RENDERINGINTENT_SATURATION = 1;
    const RENDERINGINTENT_PERCEPTUAL = 2;
    const RENDERINGINTENT_ABSOLUTE = 3;
    const RENDERINGINTENT_RELATIVE = 4;
    const INTERLACE_UNDEFINED = 0;
    const INTERLACE_NO = 1;
    const INTERLACE_LINE = 2;
    const INTERLACE_PLANE = 3;
    const INTERLACE_PARTITION = 4;
    const INTERLACE_GIF = 5;
    const INTERLACE_JPEG = 6;
    const INTERLACE_PNG = 7;
    const FILLRULE_UNDEFINED = 0;
    const FILLRULE_EVENODD = 1;
    const FILLRULE_NONZERO = 2;
    const PATHUNITS_UNDEFINED = 0;
    const PATHUNITS_USERSPACE = 1;
    const PATHUNITS_USERSPACEONUSE = 2;
    const PATHUNITS_OBJECTBOUNDINGBOX = 3;
    const LINECAP_UNDEFINED = 0;
    const LINECAP_BUTT = 1;
    const LINECAP_ROUND = 2;
    const LINECAP_SQUARE = 3;
    const LINEJOIN_UNDEFINED = 0;
    const LINEJOIN_MITER = 1;
    const LINEJOIN_ROUND = 2;
    const LINEJOIN_BEVEL = 3;
    const RESOURCETYPE_UNDEFINED = 0;
    const RESOURCETYPE_AREA = 1;
    const RESOURCETYPE_DISK = 2;
    const RESOURCETYPE_FILE = 3;
    const RESOURCETYPE_MAP = 4;
    const RESOURCETYPE_MEMORY = 5;
    const DISPOSE_UNRECOGNIZED = 0;
    const DISPOSE_UNDEFINED = 0;
    const DISPOSE_NONE = 1;
    const DISPOSE_BACKGROUND = 2;
    const DISPOSE_PREVIOUS = 3;
    const INTERPOLATE_UNDEFINED = 0;
    const INTERPOLATE_AVERAGE = 1;
    const INTERPOLATE_BICUBIC = 2;
    const INTERPOLATE_BILINEAR = 3;
    const INTERPOLATE_FILTER = 4;
    const INTERPOLATE_INTEGER = 5;
    const INTERPOLATE_MESH = 6;
    const INTERPOLATE_NEARESTNEIGHBOR = 7;
    const INTERPOLATE_SPLINE = 8;
    const LAYERMETHOD_UNDEFINED = 0;
    const LAYERMETHOD_COALESCE = 1;
    const LAYERMETHOD_COMPAREANY = 2;
    const LAYERMETHOD_COMPARECLEAR = 3;
    const LAYERMETHOD_COMPAREOVERLAY = 4;
    const LAYERMETHOD_DISPOSE = 5;
    const LAYERMETHOD_OPTIMIZE = 6;
    const LAYERMETHOD_OPTIMIZEPLUS = 8;
    const LAYERMETHOD_OPTIMIZETRANS = 9;
    const LAYERMETHOD_COMPOSITE = 12;
    const LAYERMETHOD_OPTIMIZEIMAGE = 7;
    const LAYERMETHOD_REMOVEDUPS = 10;
    const LAYERMETHOD_REMOVEZERO = 11;
    const ORIENTATION_UNDEFINED = 0;
    const ORIENTATION_TOPLEFT = 1;
    const ORIENTATION_TOPRIGHT = 2;
    const ORIENTATION_BOTTOMRIGHT = 3;
    const ORIENTATION_BOTTOMLEFT = 4;
    const ORIENTATION_LEFTTOP = 5;
    const ORIENTATION_RIGHTTOP = 6;
    const ORIENTATION_RIGHTBOTTOM = 7;
    const ORIENTATION_LEFTBOTTOM = 8;
    const DISTORTION_UNDEFINED = 0;
    const DISTORTION_AFFINE = 1;
    const DISTORTION_AFFINEPROJECTION = 2;
    const DISTORTION_ARC = 9;
    const DISTORTION_BILINEAR = 6;
    const DISTORTION_PERSPECTIVE = 4;
    const DISTORTION_PERSPECTIVEPROJECTION = 5;
    const DISTORTION_SCALEROTATETRANSLATE = 3;
    const DISTORTION_POLYNOMIAL = 8;
    const DISTORTION_POLAR = 10;
    const DISTORTION_DEPOLAR = 11;
    const DISTORTION_BARREL = 14;
    const DISTORTION_BARRELINVERSE = 15;
    const DISTORTION_SHEPARDS = 16;
    const DISTORTION_SENTINEL = 18;
    const LAYERMETHOD_MERGE = 13;
    const LAYERMETHOD_FLATTEN = 14;
    const LAYERMETHOD_MOSAIC = 15;
    const ALPHACHANNEL_ACTIVATE = 1;
    const ALPHACHANNEL_DEACTIVATE = 4;
    const ALPHACHANNEL_RESET = 7;
    const ALPHACHANNEL_SET = 8;
    const ALPHACHANNEL_UNDEFINED = 0;
    const ALPHACHANNEL_COPY = 3;
    const ALPHACHANNEL_EXTRACT = 5;
    const ALPHACHANNEL_OPAQUE = 6;
    const ALPHACHANNEL_SHAPE = 9;
    const ALPHACHANNEL_TRANSPARENT = 10;
    const SPARSECOLORMETHOD_UNDEFINED = 0;
    const SPARSECOLORMETHOD_BARYCENTRIC = 1;
    const SPARSECOLORMETHOD_BILINEAR = 7;
    const SPARSECOLORMETHOD_POLYNOMIAL = 8;
    const SPARSECOLORMETHOD_SPEPARDS = 16;
    const SPARSECOLORMETHOD_VORONOI = 18;
    const DITHERMETHOD_UNDEFINED = 0;
    const DITHERMETHOD_NO = 1;
    const DITHERMETHOD_RIEMERSMA = 2;
    const DITHERMETHOD_FLOYDSTEINBERG = 3;
    const FUNCTION_UNDEFINED = 0;
    const FUNCTION_POLYNOMIAL = 1;
    const FUNCTION_SINUSOID = 2;


    /**
     * @var Argument[][]
     */
    private $files;

    /**
     * @var
     */
    private $tmp_files = [];

    private $gravity;

    public static $convert_path;

    /**
     * Imagick constructor.
     * @param string|array $files
     */
    public function __construct($files = null)
    {

        if (!isset(self::$convert_path)) {
            //Very crude test - happy to make this better..
            if (DIRECTORY_SEPARATOR == '/') {
                self::$convert_path = self::locateLinuxConvertBinary();
            } else {
                self::$convert_path = 'convert.exe';
            }
        }

        if (is_array($files)) {
            $this->files = array_flip($files);
        } elseif ($files !== null) {
            $this->files = [$files => []];
        } else {
            $this->files = [];
        }
    }

    private static function locateLinuxConvertBinary()
    {
        //This could be better
        foreach ([
                     '/usr/local/bin/convert',
                     '/usr/bin/convert',
                     '/bin/convert'
                 ] as $path) {
            if (file_exists($path)) {
                return $path;
            }
        }

        //Hope!
        return '/usr/bin/env convert';
    }


    /**
     * Try to clean up
     */
    public function __destruct()
    {
        foreach ($this->tmp_files as $temp_file) {
            unlink($temp_file);
        }
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     * @return bool
     */
    public function adaptiveBlurImage($radius, $sigma, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @param bool $bestfit
     * @return bool
     */
    public function adaptiveResizeImage($columns, $rows, $bestfit = false)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     * @return bool
     */
    public function adaptiveSharpenImage($radius, $sigma, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $offset
     * @return bool
     */
    public function adaptiveThresholdImage($width, $height, $offset)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $source
     * @return bool
     */
    public function addImage($source)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $noise_type
     * @param int $channel
     * @return bool
     */
    public function addNoiseImage($noise_type, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickDraw $matrix
     * @return bool
     */
    public function affineTransformImage($matrix)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $x_server
     * @return bool
     */
    public function animateImages($x_server)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickDraw $draw_settings
     * @param float $x
     * @param float $y
     * @param float $angle
     * @param string $text
     * @return bool
     */
    public function annotateImage($draw_settings, $x, $y, $angle, $text)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $stack
     * @return Imagick
     */
    public function appendImages($stack = false)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int|string $CHANNEL
     */
    public function autoLevelImage($CHANNEL = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function averageImages()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $threshold
     * @return bool
     */
    public function blackThresholdImage($threshold)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $factor
     */
    public function blueShiftImage($factor = 1.5)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     * @return bool
     */
    public function blurImage($radius, $sigma, $channel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $bordercolor
     * @param int $width
     * @param int $height
     * @return bool
     */
    public function borderImage($bordercolor, $width, $height)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $brightness
     * @param string $contrast
     * @param int|string $CHANNEL
     */
    public function brightnessContrastImage($brightness, $contrast, $CHANNEL = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @return bool
     */
    public function charcoalImage($radius, $sigma)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function chopImage($width, $height, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int|string $CHANNEL
     */
    public function clampImage($CHANNEL = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function clear()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function clipImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pathname
     * @param string $inside
     */
    public function clipImagePath($pathname, $inside)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pathname
     * @param bool $inside
     * @return bool
     */
    public function clipPathImage($pathname, $inside)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function __clone()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $lookup_table
     * @param float|int $channel
     * @return bool
     */
    public function clutImage($lookup_table, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function coalesceImages()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function colorFloodfillImage($fill, $fuzz, $bordercolor, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $colorize
     * @param mixed $opacity
     * @return bool
     */
    public function colorizeImage($colorize, $opacity)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int|string $color_matrix
     */
    public function colorMatrixImage($color_matrix = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channelType
     * @return Imagick
     */
    public function combineImages($channelType)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $comment
     * @return bool
     */
    public function commentImage($comment)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $image
     * @param int $channelType
     * @param int $metricType
     * @return array
     */
    public function compareImageChannels($image, $channelType, $metricType)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $method
     * @return Imagick
     */
    public function compareImageLayers($method)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $compare
     * @param int $metric
     * @return array
     */
    public function compareImages($compare, $metric)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $composite_object
     * @param int $composite
     * @param int $x
     * @param int $y
     * @param int $channel
     * @return bool
     */
    public function compositeImage($composite_object, $composite, $x, $y, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $sharpen
     * @return bool
     */
    public function contrastImage($sharpen)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $black_point
     * @param float $white_point
     * @param int $channel
     * @return bool
     */
    public function contrastStretchImage($black_point, $white_point, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $kernel
     * @param int $channel
     * @return bool
     */
    public function convolveImage($kernel, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $mode
     */
    public function count($mode)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function cropImage($width, $height, $x, $y)
    {

        $geometry = new Geometry($width, $height, $x, $y);
        $argument = new Argument('crop', $geometry);

        $this->addConvertArgument($argument);

        //Somehow check that it's valid?
        return true;
    }

    /**
     * @param int $width
     * @param int $height
     * @return bool
     */
    public function cropThumbnailImage($width, $height)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function current()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $displace
     * @return bool
     */
    public function cycleColormapImage($displace)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $passphrase
     * @return bool
     */
    public function decipherImage($passphrase)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function deconstructImages()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $artifact
     * @return bool
     */
    public function deleteImageArtifact($artifact)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     */
    public function deleteImageProperty($name)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $threshold
     * @return bool
     */
    public function deskewImage($threshold)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function despeckleImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function destroy()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $servername
     * @return bool
     */
    public function displayImage($servername)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $servername
     * @return bool
     */
    public function displayImages($servername)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $method
     * @param array $arguments
     * @param bool $bestfit
     * @return bool
     */
    public function distortImage($method, $arguments, $bestfit)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickDraw $draw
     * @return bool
     */
    public function drawImage($draw)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @return bool
     */
    public function edgeImage($radius)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @return bool
     */
    public function embossImage($radius, $sigma)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $passphrase
     * @return bool
     */
    public function encipherImage($passphrase)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function enhanceImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function equalizeImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $op
     * @param float $constant
     * @param int $channel
     * @return bool
     */
    public function evaluateImage($op, $constant, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param string $map
     * @param int $STORAGE
     * @return bool
     */
    public function exportImagePixels($x, $y, $width, $height, $map, $STORAGE)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return array
     */
    public function extentImage($width, $height, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickKernel $ImagickKernel
     * @param int $CHANNEL
     */
    public function filter($ImagickKernel, $CHANNEL = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function flattenImages()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function flipImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $target
     * @param int $x
     * @param int $y
     * @param bool $invert
     * @param int $channel
     * @return bool
     */
    public function floodFillPaintImage($fill, $fuzz, $target, $x, $y, $invert, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function flopImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $magnitude
     */
    public function forwardFourierTransformimage($magnitude)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $matte_color
     * @param int $width
     * @param int $height
     * @param int $inner_bevel
     * @param int $outer_bevel
     * @return bool
     */
    public function frameImage($matte_color, $width, $height, $inner_bevel, $outer_bevel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $function
     * @param array $arguments
     * @param int $channel
     * @return bool
     */
    public function functionImage($function, $arguments, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $expression
     * @param int $channel
     * @return Imagick
     */
    public function fxImage($expression, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $gamma
     * @param int $channel
     * @return bool
     */
    public function gammaImage($gamma, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     * @return bool
     */
    public function gaussianBlurImage($radius, $sigma, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getColorspace()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getCompression()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getCompressionQuality()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getCopyright()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getFilename()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getFont()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getFormat()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getGravity()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getHomeURL()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function getImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageAlphaChannel()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $artifact
     * @return string
     */
    public function getImageArtifact($artifact)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $key
     * @return string
     */
    public function getImageAttribute($key)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixel */
    public function getImageBackgroundColor()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImageBlob()
    {
        $convert_command = $this->buildConvertCommand(key($this->files), current($this->files), '-');
        return shell_exec($convert_command);
    }

    /** @return array */
    public function getImageBluePrimary()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixel */
    public function getImageBorderColor()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return int
     */
    public function getImageChannelDepth($channel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $reference
     * @param int $channel
     * @param int $metric
     * @return float
     */
    public function getImageChannelDistortion($reference, $channel, $metric)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $reference
     * @param int $metric
     * @param int $channel
     * @return float
     */
    public function getImageChannelDistortions($reference, $metric, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return array
     */
    public function getImageChannelExtrema($channel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return array
     */
    public function getImageChannelKurtosis($channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return array
     */
    public function getImageChannelMean($channel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return array
     */
    public function getImageChannelRange($channel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageChannelStatistics()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function getImageClipMask()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $index
     * @return ImagickPixel
     */
    public function getImageColormapColor($index)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageColors()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageColorspace()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageCompose()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageCompression()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageCompressionQuality()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageDelay()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageDepth()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageDispose()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param MagickWand $reference
     * @param int $metric
     * @return float
     */
    public function getImageDistortion($reference, $metric)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageExtrema()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImageFilename()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImageFormat()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getImageGamma()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageGeometry()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageGravity()
    {
        return $this->gravity;
    }

    /** @return array */
    public function getImageGreenPrimary()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageHeight()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageHistogram()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageIndex()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageInterlaceScheme()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageInterpolateMethod()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageIterations()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageLength()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImageMagickLicense()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function getImageMatte()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixel */
    public function getImageMatteColor()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImageMimeType()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageOrientation()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImagePage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $x
     * @param int $y
     * @return ImagickPixel
     */
    public function getImagePixelColor($x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     * @return string
     */
    public function getImageProfile($name)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pattern
     * @param bool $only_names
     * @return array
     */
    public function getImageProfiles($pattern = "*", $only_names = true)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pattern
     * @param bool $only_names
     * @return array
     */
    public function getImageProperties($pattern = "*", $only_names = true)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     * @return string
     */
    public function getImageProperty($name)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageRedPrimary()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return Imagick
     */
    public function getImageRegion($width, $height, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageRenderingIntent()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageResolution()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImagesBlob()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageScene()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getImageSignature()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageSize()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageTicksPerSecond()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getImageTotalInkDensity()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageType()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageUnits()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageVirtualPixelMethod()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getImageWhitePoint()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getImageWidth()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getInterlaceScheme()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getIteratorIndex()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getNumberImages()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $key
     * @return string
     */
    public function getOption($key)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getPackageName()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getPage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return ImagickPixelIterator */
    public function getPixelIterator()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $x
     * @param int $y
     * @param int $columns
     * @param int $rows
     * @return ImagickPixelIterator
     */
    public function getPixelRegionIterator($x, $y, $columns, $rows)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return float */
    public function getPointSize()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public static function getQuantum()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getQuantumDepth()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getQuantumRange()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $key
     * @return string
     */
    public static function getRegistry($key)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function getReleaseDate()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $type
     * @return int
     */
    public function getResource($type)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $type
     * @return int
     */
    public function getResourceLimit($type)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getSamplingFactors()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getSize()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return int */
    public function getSizeOffset()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public function getVersion()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $clut
     * @param int $channel
     * @return bool
     */
    public function haldClutImage($clut, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function hasNextImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function hasPreviousImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $embedText
     * @return false|string
     */
    public function identifyFormat($embedText)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $appendRawOutput
     * @return array
     */
    public function identifyImage($appendRawOutput = false)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @return bool
     */
    public function implodeImage($radius)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param string $map
     * @param int $storage
     * @param array $pixels
     * @return bool
     */
    public function importImagePixels($x, $y, $width, $height, $map, $storage, $pixels)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $complement
     * @param string $magnitude
     */
    public function inverseFourierTransformImage($complement, $magnitude)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $label
     * @return bool
     */
    public function labelImage($label)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $blackPoint
     * @param float $gamma
     * @param float $whitePoint
     * @param int $channel
     * @return bool
     */
    public function levelImage($blackPoint, $gamma, $whitePoint, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $blackPoint
     * @param float $whitePoint
     * @return bool
     */
    public function linearStretchImage($blackPoint, $whitePoint)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param float $delta_x
     * @param float $rigidity
     * @return bool
     */
    public function liquidRescaleImage($width, $height, $delta_x, $rigidity)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return array */
    public static function listRegistry()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function magnifyImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $map
     * @param bool $dither
     * @return bool
     */
    public function mapImage($map, $dither)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $alpha
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function matteFloodfillImage($alpha, $fuzz, $bordercolor, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @return bool
     */
    public function medianFilterImage($radius)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $layer_method
     * @return Imagick
     */
    public function mergeImageLayers($layer_method)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function minifyImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $brightness
     * @param float $saturation
     * @param float $hue
     * @return bool
     */
    public function modulateImage($brightness, $saturation, $hue)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickDraw $draw
     * @param string $tile_geometry
     * @param string $thumbnail_geometry
     * @param int $mode
     * @param string $frame
     * @return Imagick
     */
    public function montageImage($draw, $tile_geometry, $thumbnail_geometry, $mode, $frame)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $number_frames
     * @return Imagick
     */
    public function morphImages($number_frames)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $morphologyMethod
     * @param int $iterations
     * @param ImagickKernel $ImagickKernel
     * @param string $CHANNEL
     */
    public function morphology($morphologyMethod, $iterations, $ImagickKernel, $CHANNEL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return Imagick */
    public function mosaicImages()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     * @param int $channel
     * @return bool
     */
    public function motionBlurImage($radius, $sigma, $angle, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $gray
     * @param int $channel
     * @return bool
     */
    public function negateImage($gray, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $cols
     * @param int $rows
     * @param mixed $background
     * @param string $format
     * @return bool
     */
    public function newImage($cols, $rows, $background, $format)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @param string $pseudoString
     * @return bool
     */
    public function newPseudoImage($columns, $rows, $pseudoString)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function nextImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return bool
     */
    public function normalizeImage($channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @return bool
     */
    public function oilPaintImage($radius)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $target
     * @param mixed $fill
     * @param float $fuzz
     * @param bool $invert
     * @param int $channel
     * @return bool
     */
    public function opaquePaintImage($target, $fill, $fuzz, $invert, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function optimizeImageLayers()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $threshold_map
     * @param int $channel
     * @return bool
     */
    public function orderedPosterizeImage($threshold_map, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int $x
     * @param int $y
     * @param int $channel
     * @return bool
     */
    public function paintFloodfillImage($fill, $fuzz, $bordercolor, $x, $y, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $target
     * @param mixed $fill
     * @param float $fuzz
     * @param int $channel
     * @return bool
     */
    public function paintOpaqueImage($target, $fill, $fuzz, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $target
     * @param float $alpha
     * @param float $fuzz
     * @return bool
     */
    public function paintTransparentImage($target, $alpha, $fuzz)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $filename
     * @return bool
     */
    public function pingImage($filename)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $image
     * @return bool
     */
    public function pingImageBlob($image)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param resource $filehandle
     * @param string $fileName
     * @return bool
     */
    public function pingImageFile($filehandle, $fileName)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickDraw $properties
     * @param float $angle
     * @return bool
     */
    public function polaroidImage($properties, $angle)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $levels
     * @param bool $dither
     * @return bool
     */
    public function posterizeImage($levels, $dither)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $preview
     * @return bool
     */
    public function previewImages($preview)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function previousImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     * @param string $profile
     * @return bool
     */
    public function profileImage($name, $profile)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $numberColors
     * @param int $colorspace
     * @param int $treedepth
     * @param bool $dither
     * @param bool $measureError
     * @return bool
     */
    public function quantizeImage($numberColors, $colorspace, $treedepth, $dither, $measureError)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $numberColors
     * @param int $colorspace
     * @param int $treedepth
     * @param bool $dither
     * @param bool $measureError
     * @return bool
     */
    public function quantizeImages($numberColors, $colorspace, $treedepth, $dither, $measureError)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param ImagickDraw $properties
     * @param string $text
     * @param bool $multiline
     * @return array
     */
    public function queryFontMetrics($properties, $text, $multiline)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pattern
     * @return array
     */
    public function queryFonts($pattern = "*")
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $pattern
     * @return array
     */
    public function queryFormats($pattern = "*")
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $angle
     * @param int $channel
     * @return bool
     */
    public function radialBlurImage($angle, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @param bool $raise
     * @return bool
     */
    public function raiseImage($width, $height, $x, $y, $raise)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $low
     * @param float $high
     * @param int $channel
     * @return bool
     */
    public function randomThresholdImage($low, $high, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $filename
     * @return bool
     */
    public function readImage($filename)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $image
     * @param string $filename
     * @return bool
     * @throws ImagickException
     */
    public function readImageBlob($image, $filename = null)
    {
        //Is this what this param is for?
        if ($filename === null) {
            $filename = tempnam(sys_get_temp_dir(), 'image');
        }

        if (file_put_contents($filename, $image)) {
            $this->files[$filename] = [];
            $this->tmp_files[] = $filename;
            return true;
        }

        throw new \ImagickException('Can\'t write temporary file');
    }

    /**
     * @param resource $filehandle
     * @param string $fileName
     * @return bool
     */
    public function readImageFile($filehandle, $fileName = null)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $filenames
     * @return Imagick
     */
    public function readImages($filenames)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $matrix
     * @return bool
     */
    public function recolorImage($matrix)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @return bool
     */
    public function reduceNoiseImage($radius)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $replacement
     * @param int $DITHER
     * @return bool
     */
    public function remapImage($replacement, $DITHER)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function removeImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     * @return string
     */
    public function removeImageProfile($name)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function render()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x_resolution
     * @param float $y_resolution
     * @param int $filter
     * @param float $blur
     * @return bool
     */
    public function resampleImage($x_resolution, $y_resolution, $filter, $blur)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $page
     * @return bool
     */
    public function resetImagePage($page)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @param int $filter
     * @param float $blur
     * @param bool $bestfit
     * @return bool
     */
    public function resizeImage($columns, $rows, $filter, $blur, $bestfit = false)
    {

        $geometry = new Geometry($columns, $rows);

        if ($bestfit) {
            $geometry->scale_mode = Geometry::SCALE_MAXIMUM;
        }

        $this->addConvertArgument(new Argument('resize', $geometry));
        $this->addConvertArgument(new \Imagick\Argument\Filter($filter));

        return true;
    }

    /**
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function rollImage($x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $background
     * @param float $degrees
     * @return bool
     */
    public function rotateImage($background, $degrees)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $angle
     * @param int|string $CHANNEL
     */
    public function rotationalBlurImage($angle, $CHANNEL = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x_rounding
     * @param float $y_rounding
     * @param float|int $stroke_width
     * @param float|int $displace
     * @param float|int $size_correction
     * @return bool
     */
    public function roundCorners($x_rounding, $y_rounding, $stroke_width = 10, $displace = 5, $size_correction = -6)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @return bool
     */
    public function sampleImage($columns, $rows)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $cols
     * @param int $rows
     * @param bool $bestfit
     * @return bool
     */
    public function scaleImage($cols, $rows, $bestfit = false)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $COLORSPACE
     * @param float $cluster_threshold
     * @param float $smooth_threshold
     * @param bool $verbose
     * @return bool
     */
    public function segmentImage($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = false)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param float $threshold
     * @param int $CHANNEL
     */
    public function selectiveBlurImage($radius, $sigma, $threshold, $CHANNEL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @return bool
     */
    public function separateImageChannel($channel)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $threshold
     * @return bool
     */
    public function sepiaToneImage($threshold)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $background
     * @return bool
     */
    public function setBackgroundColor($background)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $COLORSPACE
     * @return bool
     */
    public function setColorspace($COLORSPACE)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $compression
     * @return bool
     */
    public function setCompression($compression)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $quality
     * @return bool
     */
    public function setCompressionQuality($quality)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $filename
     * @return bool
     */
    public function setFilename($filename)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function setFirstIterator()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $font
     * @return bool
     */
    public function setFont($font)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $format
     * @return bool
     */
    public function setFormat($format)
    {
        return $this->setImageFormat($format);
    }

    /**
     * @param int $gravity
     * @return bool
     */
    public function setGravity($gravity)
    {
        $this->gravity = $gravity;
        $this->addConvertArgument(new \Imagick\Argument\Gravity($gravity));
        return true;
    }

    /**
     * @param Imagick $replace
     * @return bool
     */
    public function setImage($replace)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $mode
     * @return bool
     */
    public function setImageAlphaChannel($mode)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $artifact
     * @param string $value
     * @return bool
     */
    public function setImageArtifact($artifact, $value)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setImageAttribute($key, $value)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $background
     * @return bool
     */
    public function setImageBackgroundColor($background)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $bias
     * @return bool
     */
    public function setImageBias($bias)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $bias
     */
    public function setImageBiasQuantum($bias)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function setImageBluePrimary($x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $border
     * @return bool
     */
    public function setImageBorderColor($border)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $channel
     * @param int $depth
     * @return bool
     */
    public function setImageChannelDepth($channel, $depth)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $clip_mask
     * @return bool
     */
    public function setImageClipMask($clip_mask)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $index
     * @param ImagickPixel $color
     * @return bool
     */
    public function setImageColormapColor($index, $color)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $colorspace
     * @return bool
     */
    public function setImageColorspace($colorspace)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $compose
     * @return bool
     */
    public function setImageCompose($compose)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $compression
     * @return bool
     */
    public function setImageCompression($compression)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $quality
     * @return bool
     */
    public function setImageCompressionQuality($quality)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $delay
     * @return bool
     */
    public function setImageDelay($delay)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $depth
     * @return bool
     */
    public function setImageDepth($depth)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $dispose
     * @return bool
     */
    public function setImageDispose($dispose)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @return bool
     */
    public function setImageExtent($columns, $rows)
    {
        $this->addConvertArgument(new Argument('extent', new Geometry($columns, $rows)));
        return true;
    }

    /**
     * @param string $filename
     * @return bool
     */
    public function setImageFilename($filename)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $format
     * @return bool
     */
    public function setImageFormat($format)
    {
        $this->addConvertArgument(new Argument('format', $format));
        return true;
    }

    /**
     * @param float $gamma
     * @return bool
     */
    public function setImageGamma($gamma)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $gravity
     * @return bool
     */
    public function setImageGravity($gravity)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function setImageGreenPrimary($x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $index
     * @return bool
     */
    public function setImageIndex($index)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $interlace_scheme
     * @return bool
     */
    public function setImageInterlaceScheme($interlace_scheme)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $method
     * @return bool
     */
    public function setImageInterpolateMethod($method)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $iterations
     * @return bool
     */
    public function setImageIterations($iterations)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $matte
     * @return bool
     */
    public function setImageMatte($matte)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $matte
     * @return bool
     */
    public function setImageMatteColor($matte)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $opacity
     * @return bool
     */
    public function setImageOpacity($opacity)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $orientation
     * @return bool
     */
    public function setImageOrientation($orientation)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function setImagePage($width, $height, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     * @param string $profile
     * @return bool
     */
    public function setImageProfile($name, $profile)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $name
     * @param string $value
     * @return bool
     */
    public function setImageProperty($name, $value)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function setImageRedPrimary($x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $rendering_intent
     * @return bool
     */
    public function setImageRenderingIntent($rendering_intent)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x_resolution
     * @param float $y_resolution
     * @return bool
     */
    public function setImageResolution($x_resolution, $y_resolution)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $scene
     * @return bool
     */
    public function setImageScene($scene)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $ticks_per_second
     * @return bool
     */
    public function setImageTicksPerSecond($ticks_per_second)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $image_type
     * @return bool
     */
    public function setImageType($image_type)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $units
     * @return bool
     */
    public function setImageUnits($units)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $method
     * @return bool
     */
    public function setImageVirtualPixelMethod($method)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x
     * @param float $y
     * @return bool
     */
    public function setImageWhitePoint($x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $interlace_scheme
     * @return bool
     */
    public function setInterlaceScheme($interlace_scheme)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $index
     * @return bool
     */
    public function setIteratorIndex($index)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function setLastIterator()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $key
     * @param string $value
     * @return bool
     */
    public function setOption($key, $value)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function setPage($width, $height, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $point_size
     * @return bool
     */
    public function setPointSize($point_size)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param callable $callback
     */
    public function setProgressMonitor($callback)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $key
     * @param string $value
     */
    public static function setRegistry($key, $value)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $x_resolution
     * @param float $y_resolution
     * @return bool
     */
    public function setResolution($x_resolution, $y_resolution)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $type
     * @param int $limit
     * @return bool
     */
    public function setResourceLimit($type, $limit)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param array $factors
     * @return bool
     */
    public function setSamplingFactors($factors)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @return bool
     */
    public function setSize($columns, $rows)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @param int $offset
     * @return bool
     */
    public function setSizeOffset($columns, $rows, $offset)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $image_type
     * @return bool
     */
    public function setType($image_type)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $gray
     * @param float $azimuth
     * @param float $elevation
     * @return bool
     */
    public function shadeImage($gray, $azimuth, $elevation)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $opacity
     * @param float $sigma
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function shadowImage($opacity, $sigma, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     * @return bool
     */
    public function sharpenImage($radius, $sigma, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @return bool
     */
    public function shaveImage($columns, $rows)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $background
     * @param float $x_shear
     * @param float $y_shear
     * @return bool
     */
    public function shearImage($background, $x_shear, $y_shear)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param bool $sharpen
     * @param float $alpha
     * @param float $beta
     * @param int $channel
     * @return bool
     */
    public function sigmoidalContrastImage($sharpen, $alpha, $beta, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     * @return bool
     */
    public function sketchImage($radius, $sigma, $angle)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $stack
     * @param string $offset
     * @return Imagick
     */
    public function smushImages($stack, $offset)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $threshold
     * @return bool
     */
    public function solarizeImage($threshold)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $SPARSE_METHOD
     * @param array $arguments
     * @param int $channel
     * @return bool
     */
    public function sparseColorImage($SPARSE_METHOD, $arguments, $channel = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function spliceImage($width, $height, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @return bool
     */
    public function spreadImage($radius)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $type
     * @param int $width
     * @param int $height
     * @param int|string $CHANNEL
     */
    public function statisticImage($type, $width, $height, $CHANNEL = Imagick::CHANNEL_DEFAULT)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $watermark_wand
     * @param int $offset
     * @return Imagick
     */
    public function steganoImage($watermark_wand, $offset)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $offset_wand
     * @return bool
     */
    public function stereoImage($offset_wand)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function stripImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $Imagick
     * @param array $offset
     * @param float $similarity
     * @return Imagick
     */
    public function subImageMatch($Imagick, array &$offset, &$similarity)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $degrees
     * @return bool
     */
    public function swirlImage($degrees)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param Imagick $texture_wand
     * @return bool
     */
    public function textureImage($texture_wand)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $threshold
     * @param int $channel
     * @return bool
     */
    public function thresholdImage($threshold, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $columns
     * @param int $rows
     * @param bool $bestfit
     * @param bool $fill
     * @return bool
     */
    public function thumbnailImage($columns, $rows, $bestfit = false, $fill = false)
    {

        $geometry = new Geometry($columns, $rows);

        if ($bestfit) {
            $geometry->scale_mode = Geometry::SCALE_MAXIMUM;
        }

        if ($fill) {
            //What is this argument meant to do?
        }

        $this->addConvertArgument(new Argument('thumbnail', $geometry));

    }

    /**
     * @param mixed $tint
     * @param mixed $opacity
     * @return bool
     */
    public function tintImage($tint, $opacity)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return string */
    public function __toString()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $crop
     * @param string $geometry
     * @return Imagick
     */
    public function transformImage($crop, $geometry)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param int $colorspace
     * @return bool
     */
    public function transformImageColorspace($colorspace)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $target
     * @param float $alpha
     * @param float $fuzz
     * @param bool $invert
     * @return bool
     */
    public function transparentPaintImage($target, $alpha, $fuzz, $invert)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function transposeImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function transverseImage()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $fuzz
     * @return bool
     */
    public function trimImage($fuzz)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function uniqueImageColors()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $radius
     * @param float $sigma
     * @param float $amount
     * @param float $threshold
     * @param int $channel
     * @return bool
     */
    public function unsharpMaskImage($radius, $sigma, $amount, $threshold, $channel = Imagick::CHANNEL_ALL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /** @return bool */
    public function valid()
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $blackPoint
     * @param float $whitePoint
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function vignetteImage($blackPoint, $whitePoint, $x, $y)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param float $amplitude
     * @param float $length
     * @return bool
     */
    public function waveImage($amplitude, $length)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param mixed $threshold
     * @return bool
     */
    public function whiteThresholdImage($threshold)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $filename
     * @return bool
     */
    public function writeImage($filename = NULL)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param resource $filehandle
     * @return bool
     */
    public function writeImageFile($filehandle)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param string $filename
     * @param bool $adjoin
     * @return bool
     */
    public function writeImages($filename, $adjoin)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * @param resource $filehandle
     * @return bool
     */
    public function writeImagesFile($filehandle)
    {
        throw new Exception(sprintf('%s::%s not implemented', __CLASS__, __FUNCTION__));
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        // TODO: Implement next() method.
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        // TODO: Implement key() method.
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    /**
     * @param Argument $argument
     * @param bool $all_images
     */
    private function addConvertArgument(Argument $argument, $all_images = false)
    {
        if ($all_images) {
            foreach ($this->files as &$file) {
                $file[] = $argument;
            }
        } else {
            $current = key($this->files);
            $this->files[$current][] = $argument;
        }
    }


    /**
     * @param string $output_file
     * @return string
     */
    private static function buildConvertCommand($input_file, $convert_args, $output_file)
    {
        return sprintf('%s %s %s %s', self::$convert_path, implode(' ', $convert_args), $input_file, $output_file);
    }

}