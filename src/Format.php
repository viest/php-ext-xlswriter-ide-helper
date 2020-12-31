<?php

namespace Vtiful\Kernel;

/**
 * Class Format
 *
 * @author  viest
 *
 * @package Vtiful\Kernel
 */
class Format
{
    const UNDERLINE_SINGLE = 0x00;
    const UNDERLINE_DOUBLE = 0x00;
    const UNDERLINE_SINGLE_ACCOUNTING = 0x00;
    const UNDERLINE_DOUBLE_ACCOUNTING = 0x00;

    const FORMAT_ALIGN_LEFT = 0x00;
    const FORMAT_ALIGN_CENTER = 0x00;
    const FORMAT_ALIGN_RIGHT = 0x00;
    const FORMAT_ALIGN_FILL = 0x00;
    const FORMAT_ALIGN_JUSTIFY = 0x00;
    const FORMAT_ALIGN_CENTER_ACROSS = 0x00;
    const FORMAT_ALIGN_DISTRIBUTED = 0x00;
    const FORMAT_ALIGN_VERTICAL_TOP = 0x00;
    const FORMAT_ALIGN_VERTICAL_BOTTOM = 0x00;
    const FORMAT_ALIGN_VERTICAL_CENTER = 0x00;
    const FORMAT_ALIGN_VERTICAL_JUSTIFY = 0x00;
    const FORMAT_ALIGN_VERTICAL_DISTRIBUTED = 0x00;

    const COLOR_BLACK = 0x00;
    const COLOR_BLUE = 0x00;
    const COLOR_BROWN = 0x00;
    const COLOR_CYAN = 0x00;
    const COLOR_GRAY = 0x00;
    const COLOR_GREEN = 0x00;
    const COLOR_LIME = 0x00;
    const COLOR_MAGENTA = 0x00;
    const COLOR_NAVY = 0x00;
    const COLOR_ORANGE = 0x00;
    const COLOR_PINK = 0x00;
    const COLOR_PURPLE = 0x00;
    const COLOR_RED = 0x00;
    const COLOR_SILVER = 0x00;
    const COLOR_WHITE = 0x00;
    const COLOR_YELLOW = 0x00;

    const PATTERN_NONE = 0x00;
    const PATTERN_SOLID = 0x00;
    const PATTERN_MEDIUM_GRAY = 0x00;
    const PATTERN_DARK_GRAY = 0x00;
    const PATTERN_LIGHT_GRAY = 0x00;
    const PATTERN_DARK_HORIZONTAL = 0x00;
    const PATTERN_DARK_VERTICAL = 0x00;
    const PATTERN_DARK_DOWN = 0x00;
    const PATTERN_DARK_UP = 0x00;
    const PATTERN_DARK_GRID = 0x00;
    const PATTERN_DARK_TRELLIS = 0x00;
    const PATTERN_LIGHT_HORIZONTAL = 0x00;
    const PATTERN_LIGHT_VERTICAL = 0x00;
    const PATTERN_LIGHT_DOWN = 0x00;
    const PATTERN_LIGHT_UP = 0x00;
    const PATTERN_LIGHT_GRID = 0x00;
    const PATTERN_LIGHT_TRELLIS = 0x00;
    const PATTERN_GRAY_125 = 0x00;
    const PATTERN_GRAY_0625 = 0x00;

    const BORDER_THIN = 0x00;
    const BORDER_MEDIUM = 0x00;
    const BORDER_DASHED = 0x00;
    const BORDER_DOTTED = 0x00;
    const BORDER_THICK = 0x00;
    const BORDER_DOUBLE = 0x00;
    const BORDER_HAIR = 0x00;
    const BORDER_MEDIUM_DASHED = 0x00;
    const BORDER_DASH_DOT = 0x00;
    const BORDER_MEDIUM_DASH_DOT = 0x00;
    const BORDER_DASH_DOT_DOT = 0x00;
    const BORDER_MEDIUM_DASH_DOT_DOT = 0x00;
    const BORDER_SLANT_DASH_DOT = 0x00;

    /**
     * Format constructor.
     *
     * @param resource $fileHandle
     */
    public function __construct($fileHandle)
    {
        //
    }

    /**
     * Wrap
     *
     * @return Format
     *
     * @author viest
     */
    public function wrap(): self
    {
        return $this;
    }

    /**
     * Bold
     *
     * @return Format
     *
     * @author viest
     */
    public function bold(): self
    {
        return $this;
    }

    /**
     * Italic
     *
     * @return Format
     *
     * @author viest
     */
    public function italic(): self
    {
        return $this;
    }

    /**
     * Cells border
     *
     * @param int $style const BORDER_***
     *
     * @return Format
     *
     * @author viest
     */
    public function border(int $style): self
    {
        return $this;
    }

    /**
     * Align
     *
     * @param int ...$style const FORMAT_ALIGN_****
     *
     * @return Format
     *
     * @author viest
     */
    public function align(...$style): self
    {
        return $this;
    }

    /**
     * Number format
     *
     * @param string $format
     *
     * #,##0
     *
     * @return Format
     *
     * @author viest
     */
    public function number(string $format): self
    {
        return $this;
    }

    /**
     * Font color
     *
     * @param int $color const COLOR_****
     *
     * @return Format
     *
     * @author viest
     */
    public function fontColor(int $color): self
    {
        return $this;
    }

    /**
     * Font
     *
     * @param string $fontName
     *
     * @return Format
     *
     * @author viest
     */
    public function font(string $fontName): self
    {
        return $this;
    }

    /**
     * Font size
     *
     * @param float $size
     *
     * @return Format
     *
     * @author viest
     */
    public function fontSize(float $size): self
    {
        return $this;
    }

    /**
     * String strikeout
     *
     * @return Format
     *
     * @author viest
     */
    public function strikeout(): self
    {
        return $this;
    }

    /**
     * Underline
     *
     * @param int $style const UNDERLINE_****
     *
     * @return Format
     *
     * @author viest
     */
    public function underline(int $style): self
    {
        return $this;
    }

    /**
     * Unlocked
     *
     * @return $this
     *
     * @author viest
     */
    public function unlocked(): self
    {
        return $this;
    }

    /**
     * Cell background
     *
     * @param int $color   const COLOR_****
     * @param int $pattern const PATTERN_****
     *
     * @return Format
     *
     * @author viest
     */
    public function background(int $color, int $pattern = self::PATTERN_SOLID): self
    {
        return $this;
    }

    /**
     * Format to resource
     *
     * @return resource
     *
     * @author viest
     */
    public function toResource()
    {
        //
    }
}