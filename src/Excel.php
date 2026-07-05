<?php

namespace Vtiful\Kernel;

use Exception;

/**
 * Class Excel
 *
 * @author  viest
 *
 * @package Vtiful\Kernel
 */
class Excel
{
    const TYPE_STRING = 0x01;
    const TYPE_INT = 0x02;
    const TYPE_DOUBLE = 0x04;
    const TYPE_TIMESTAMP = 0x08;

    const SKIP_NONE = 0x00;
    const SKIP_EMPTY_ROW = 0x01;
    const SKIP_EMPTY_CELLS = 0x02;
    const SKIP_HIDDEN_ROW = 0x04;
    const SKIP_EMPTY_VALUE = 0x100;
    const SKIP_MERGED_FOLLOW = 0x200;
    const FORMULA_VERBOSE = 0x400;

    const GRIDLINES_HIDE_ALL = 0;
    const GRIDLINES_SHOW_SCREEN = 1;
    const GRIDLINES_SHOW_PRINT = 2;
    const GRIDLINES_SHOW_ALL = 3;

    const PAPER_DEFAULT = 0;
    const PAPER_LETTER = 1;
    const PAPER_LETTER_SMALL = 2;
    const PAPER_TABLOID = 3;
    const PAPER_LEDGER = 4;
    const PAPER_LEGAL = 5;
    const PAPER_STATEMENT = 6;
    const PAPER_EXECUTIVE = 7;
    const PAPER_A3 = 8;
    const PAPER_A4 = 9;
    const PAPER_A4_SMALL = 10;
    const PAPER_A5 = 11;
    const PAPER_B4 = 12;
    const PAPER_B5 = 13;
    const PAPER_FOLIO = 14;
    const PAPER_QUARTO = 15;
    const PAPER_NOTE = 18;
    const PAPER_ENVELOPE_9 = 19;
    const PAPER_ENVELOPE_10 = 20;
    const PAPER_ENVELOPE_11 = 21;
    const PAPER_ENVELOPE_12 = 22;
    const PAPER_ENVELOPE_14 = 23;
    const PAPER_C_SIZE_SHEET = 24;
    const PAPER_D_SIZE_SHEET = 25;
    const PAPER_E_SIZE_SHEET = 26;
    const PAPER_ENVELOPE_DL = 27;
    const PAPER_ENVELOPE_C3 = 28;
    const PAPER_ENVELOPE_C4 = 29;
    const PAPER_ENVELOPE_C5 = 30;
    const PAPER_ENVELOPE_C6 = 31;
    const PAPER_ENVELOPE_C65 = 32;
    const PAPER_ENVELOPE_B4 = 33;
    const PAPER_ENVELOPE_B5 = 34;
    const PAPER_ENVELOPE_B6 = 35;
    const PAPER_ENVELOPE_1 = 36;
    const PAPER_MONARCH = 37;
    const PAPER_ENVELOPE_2 = 38;
    const PAPER_FANFOLD = 39;
    const PAPER_GERMAN_STD_FANFOLD = 40;
    const PAPER_GERMAN_LEGAL_FANFOLD = 41;

    const COMMENT_DISPLAY_DEFAULT = 0;
    const COMMENT_DISPLAY_HIDDEN = 1;
    const COMMENT_DISPLAY_VISIBLE = 2;

    const OBJECT_POSITION_DEFAULT = 0;
    const OBJECT_MOVE_AND_SIZE = 1;
    const OBJECT_MOVE_DONT_SIZE = 2;
    const OBJECT_DONT_MOVE_DONT_SIZE = 3;
    const OBJECT_MOVE_AND_SIZE_AFTER = 4;

    /**
     * Excel constructor.
     *
     * @param array $config
     *
     * @throws Exception
     */
    public function __construct(array $config)
    {
        if (!extension_loaded('xlswriter')) {
            throw new Exception('xlswriter extension is not installed, please install extension');
        }
    }

    /**
     * Close
     *
     * @return $this
     */
    public function close(): self
    {
        return $this;
    }

    /**
     * File Name
     *
     * @param string $fileName
     * @param string $sheetName
     *
     * @return Excel
     *
     * @author viest
     */
    public function fileName(string $fileName, string $sheetName = 'Sheet1'): self
    {
        return $this;
    }

    /**
     * Add a new worksheet to a workbook.
     *
     * The worksheet name must be a valid Excel worksheet name, i.e. it must be
     * less than 32 character and it cannot contain any of the characters:
     *
     *     / \ [ ] : * ?
     *
     * In addition, you cannot use the same, case insensitive, `$sheetName` for more
     * than one worksheet.
     *
     * @param string|NULL $sheetName
     *
     * @return Excel
     *
     * @author viest
     */
    public function addSheet(string $sheetName): self
    {
        return $this;
    }

    /**
     * Exist Sheet
     *
     * @param string $sheetName
     *
     * @return bool
     */
    public function existSheet(string $sheetName): bool
    {
        return true;
    }

    /**
     * Checkout worksheet
     *
     * @param string $sheetName
     *
     * @return Excel
     *
     * @author viest
     */
    public function checkoutSheet(string $sheetName): self
    {
        return $this;
    }

    /**
     * Set activate sheet
     *
     * @param string $sheetName
     *
     * @return bool
     *
     * @author viest
     */
    public function activateSheet(string $sheetName): bool
    {
        return true;
    }

    /**
     * Const's memory model
     *
     * @param string $fileName
     * @param string $sheetName
     * @param bool   $useZip64
     *
     * @return Excel
     *
     * @author viest
     */
    public function constMemory(string $fileName, string $sheetName = 'Sheet1', bool $useZip64 = true): self
    {
        return $this;
    }

    /**
     * Set Current Line
     *
     * @param int $lineNumber
     *
     * @return $this
     */
    public function setCurrentLine(int $lineNumber): self
    {
        return $this;
    }

    /**
     * Get Current Line
     *
     * @return int
     */
    public function getCurrentLine(): int
    {
        return 0;
    }

    /**
     * Insert data on the first line of the worksheet
     *
     * @param array         $header
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function header(array $header, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert data on the worksheet
     *
     * @param array $data
     *
     * @return Excel
     *
     * @author viest
     */
    public function data(array $data): self
    {
        return $this;
    }

    /**
     * Generate file
     *
     * @return string
     *
     * @author viest
     */
    public function output(): string
    {
        return 'FilePath';
    }

    /**
     * Get file resource
     *
     * @return resource
     *
     * @author viest
     */
    public function getHandle()
    {
        //
    }

    /**
     * Insert data on the cell
     *
     * Boolean values are written as native xlsx booleans (type="b").
     *
     * @param int                       $row
     * @param int                       $column
     * @param int|string|double|bool    $data
     * @param string|null               $format
     * @param resource|null             $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertText(int $row, int $column, $data, string $format = NULL, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert Rich Text
     *
     * @param int           $row
     * @param int           $column
     * @param RichString[]  $richStrings
     * @param resource|null $formatHandle
     *
     * @return $this
     */
    public function insertRichText(int $row, int $column, array $richStrings, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert date on the cell
     *
     * @param int           $row
     * @param int           $column
     * @param int           $timestamp
     * @param string|NULL   $format
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertDate(int $row, int $column, int $timestamp, string $format = NULL, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert chart on the cell
     *
     * @param int      $row
     * @param int      $column
     * @param resource $chartResource
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertChart(int $row, int $column, $chartResource): self
    {
        return $this;
    }

    /**
     * Insert url on the cell
     *
     * @param int           $row
     * @param int           $column
     * @param string        $url
     * @param string        $text
     * @param string        $toolTip
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertUrl(int $row, int $column, string $url, string $text = NULL, string $toolTip = NULL, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert image on the cell
     *
     * @param int    $row
     * @param int    $column
     * @param string $imagePath
     * @param float  $width
     * @param float  $height
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertImage(int $row, int $column, string $imagePath, float $width = 1, float $height = 1): self
    {
        return $this;
    }

    /**
     * Insert image from a binary buffer
     *
     * Options keys: x_offset, y_offset, x_scale, y_scale,
     *               description, url, tip, decorative,
     *               object_position, image_name (used as the embedded filename).
     *
     * @param int    $row
     * @param int    $column
     * @param string $bytes
     * @param array  $options
     *
     * @return $this
     */
    public function insertImageBuffer(int $row, int $column, string $bytes, array $options = []): self
    {
        return $this;
    }

    /**
     * Insert image on the cell with advanced anchoring / styling options.
     *
     * Supported option keys (all optional):
     *   x_offset / y_offset  (int,    pixels from the top-left of the anchor cell)
     *   x_scale  / y_scale   (float,  scale factor; 1.0 = original size)
     *   description          (string, alt text; "" suppresses it)
     *   decorative           (bool,   mark as decorative for screen readers)
     *   url / tip            (string, hyperlink target + mouseover tip)
     *   object_position      (int,    Excel::OBJECT_POSITION_* / OBJECT_MOVE_* constant)
     *
     * @param int    $row
     * @param int    $column
     * @param string $imagePath
     * @param array  $options
     *
     * @return $this
     */
    public function insertImageOpt(int $row, int $column, string $imagePath, array $options = []): self
    {
        return $this;
    }

    /**
     * Insert Formula on the cell
     *
     * @param int           $row
     * @param int           $column
     * @param string        $formula
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertFormula(int $row, int $column, string $formula, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert a dynamic array formula on the cell.
     *
     * Dynamic array functions (UNIQUE, FILTER, SORT, SEQUENCE, XLOOKUP, ...)
     * require special XML output that insertFormula() does not produce.
     *
     * @param int           $row
     * @param int           $column
     * @param string        $formula
     * @param resource|null $formatHandle
     *
     * @return $this
     */
    public function insertDynamicFormula(int $row, int $column, string $formula, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert a dynamic array formula spanning a range.
     *
     * Emits the formula with t="array" and the given ref range so that Excel
     * 365 evaluates it as a spill range.
     *
     * @param int           $firstRow
     * @param int           $firstColumn
     * @param int           $lastRow
     * @param int           $lastColumn
     * @param string        $formula
     * @param resource|null $formatHandle
     *
     * @return $this
     */
    public function insertDynamicArrayFormula(int $firstRow, int $firstColumn, int $lastRow, int $lastColumn, string $formula, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Insert comment on the cell
     *
     * @param int    $row
     * @param int    $column
     * @param string $comment
     *
     * @return $this
     *
     * @author viest
     */
    public function insertComment(int $row, int $column, string $comment): self
    {
        return $this;
    }

    /**
     * Insert comment with options on the cell
     *
     * Supported option keys:
     *   author, visible (Excel::COMMENT_DISPLAY_*),
     *   color, font_name, font_size, font_family,
     *   width, height, x_scale, y_scale,
     *   x_offset, y_offset, start_row, start_col.
     *
     * @param int    $row
     * @param int    $column
     * @param string $text
     * @param array  $options
     *
     * @return $this
     */
    public function insertCommentOpt(int $row, int $column, string $text, array $options = []): self
    {
        return $this;
    }

    /**
     * Show comment on the sheet
     *
     * @return $this
     *
     * @author viest
     */
    public function showComment(): self
    {
        return $this;
    }

    /**
     * Auto filter on the worksheet
     *
     * @param string $range
     *
     * @return Excel
     *
     * @author viest
     */
    public function autoFilter(string $range): self
    {
        return $this;
    }

    /**
     * Merge cells
     *
     * @param string        $range
     * @param string        $data
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function mergeCells(string $range, string $data, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Set column cells width or format
     *
     * @param string        $range
     * @param float         $width
     * @param resource|null $formatHandle
     * @param int           $level
     * @param bool          $collapsed
     * @param bool          $hidden
     *
     * @return Excel
     *
     * @author viest
     */
    public function setColumn(string $range, float $width, $formatHandle = NULL, int $level = 0, bool $collapsed = false, bool $hidden = false): self
    {
        return $this;
    }

    /**
     * Enable automatic column-width sizing for the active worksheet.
     *
     * Every written cell contributes its estimated display width to a
     * per-column maximum; the tracked widths are applied at output() time
     * (and flushed when switching sheets). Call autoSize() BEFORE writing the
     * data it should size, otherwise the writes are not tracked. Widths are
     * estimates from character counts (wide / CJK code points count as 2) and
     * cannot exactly match Excel's own auto-fit.
     *
     * Pass an A1 range such as "A:Z" or "A1:J100" to restrict sizing to a
     * subset of columns; omit it to size every column.
     *
     * @param string|null $range
     *
     * @return $this
     */
    public function autoSize(string $range = NULL): self
    {
        return $this;
    }

    /**
     * Set row cells height or format
     *
     * @param string        $range
     * @param float         $height
     * @param resource|null $formatHandle
     * @param int           $level
     * @param bool          $collapsed
     * @param bool          $hidden
     *
     * @return Excel
     *
     * @author viest
     */
    public function setRow(string $range, float $height, $formatHandle = NULL, int $level = 0, bool $collapsed = false, bool $hidden = false): self
    {
        return $this;
    }

    /**
     * Set Paper
     *
     * @param int $type
     *
     * @return $this
     */
    public function setPaper(int $type): self
    {
        return $this;
    }

    /**
     * Set Margins
     *
     * @param float|null $left
     * @param float|null $right
     * @param float|null $top
     * @param float|null $bottom
     *
     * @return $this
     */
    public function setMargins(float $left = NULL, float $right = NULL, float $top = NULL, float $bottom = NULL): self
    {
        return $this;
    }

    /**
     * Default format
     *
     * @param resource $formatHandle
     *
     * @return $this
     *
     * @author viest
     */
    public function defaultFormat($formatHandle): self
    {
        return $this;
    }

    /**
     * Default row outline level, collapsed/hidden options,
     * used when writing data with Excel::data() method.
     *
     * @param int  $level
     * @param bool $collapsed
     * @param bool $hidden
     *
     * @return $this
     */
    public function defaultRowOptions(int $level = 0, bool $collapsed = false, bool $hidden = false): self
    {
        return $this;
    }

    /**
     * Configure the worksheet outline / grouping display settings.
     *
     * @param bool $visible   show the outline symbols
     * @param bool $below     place summary rows below the detail rows
     * @param bool $right     place summary columns to the right of the detail
     * @param bool $autoStyle use automatic outline styles
     *
     * @return $this
     */
    public function outlineSettings(bool $visible = true, bool $below = true, bool $right = true, bool $autoStyle = false): self
    {
        return $this;
    }

    /**
     * Freeze panes
     *
     * freezePanes(1, 0); // Freeze the first row.
     * freezePanes(0, 1); // Freeze the first column.
     * freezePanes(1, 1); // Freeze first row/column.
     *
     * @param int $row
     * @param int $column
     *
     * @return $this
     *
     * @author viest
     */
    public function freezePanes(int $row, int $column): self
    {
        return $this;
    }

    /**
     * Gridline
     *
     * Display or hide screen and print gridlines using one of the values of
     *
     * \Vtiful\Kernel\Excel::GRIDLINES_HIDE_ALL
     * \Vtiful\Kernel\Excel::GRIDLINES_SHOW_ALL
     * \Vtiful\Kernel\Excel::GRIDLINES_SHOW_PRINT
     * \Vtiful\Kernel\Excel::GRIDLINES_SHOW_SCREEN
     *
     * Excel default is that the screen gridlines are on and the printed worksheet is off.
     *
     * @param int $option
     *
     * @return $this
     *
     * @author viest
     */
    public function gridline(int $option = Excel::GRIDLINES_HIDE_ALL): self
    {
        return $this;
    }

    /**
     * Worksheet zoom
     *
     * Set the worksheet zoom factor in the range 10 <= zoom <= 400
     *
     * @param int $scale
     *
     * @return $this
     *
     * @author viest
     */
    public function zoom(int $scale = 100): self
    {
        return $this;
    }

    /**
     * Protection
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function protection(string $password = NULL): self
    {
        return $this;
    }

    /**
     * Set Portrait
     *
     * @return $this
     */
    public function setPortrait(): self
    {
        return $this;
    }

    /**
     * Set Landscape
     *
     * @return $this
     */
    public function setLandscape(): self
    {
        return $this;
    }

    /**
     * Set Print Scale
     *
     * Set the print scale factor in the range 10 <= scale <= 400
     *
     * @param int $scale
     *
     * @return $this
     */
    public function setPrintScale(int $scale): self
    {
        return $this;
    }

    /**
     * Set current worksheet hide
     *
     * @return $this
     *
     * @author viest
     */
    public function setCurrentSheetHide(): self
    {
        return $this;
    }

    /**
     * Set current worksheet first
     *
     * @return $this
     *
     * @author viest
     */
    public function setCurrentSheetIsFirst(): self
    {
        return $this;
    }

    /**
     * Validation
     *
     * @param string   $range
     * @param resource $validationHandle
     *
     * @return $this
     */
    public function validation(string $range, $validationHandle): self
    {
        return $this;
    }

    /**
     * Set the worksheet header text.
     *
     * Supported option keys: margin, image_left, image_center, image_right.
     *
     * @param string $value
     * @param array  $options
     *
     * @return $this
     */
    public function setHeader(string $value, array $options = []): self
    {
        return $this;
    }

    /**
     * Set the worksheet footer text.
     *
     * Supported option keys: margin, image_left, image_center, image_right.
     *
     * @param string $value
     * @param array  $options
     *
     * @return $this
     */
    public function setFooter(string $value, array $options = []): self
    {
        return $this;
    }

    /**
     * Set rows to repeat at the top of each printed page.
     *
     * @param string $range e.g. "A1:A1" or "1:1"
     *
     * @return $this
     */
    public function repeatRows(string $range): self
    {
        return $this;
    }

    /**
     * Set columns to repeat at the left of each printed page.
     *
     * @param string $range e.g. "A:A"
     *
     * @return $this
     */
    public function repeatColumns(string $range): self
    {
        return $this;
    }

    /**
     * Set the worksheet print area.
     *
     * @param string $range e.g. "A1:D20"
     *
     * @return $this
     */
    public function printArea(string $range): self
    {
        return $this;
    }

    /**
     * Insert horizontal page breaks.
     *
     * @param int[] $breaks list of row indices where a break should occur
     *
     * @return $this
     */
    public function horizontalPageBreaks(array $breaks): self
    {
        return $this;
    }

    /**
     * Insert vertical page breaks.
     *
     * @param int[] $breaks list of column indices where a break should occur
     *
     * @return $this
     */
    public function verticalPageBreaks(array $breaks): self
    {
        return $this;
    }

    /**
     * Fit the printed output to a fixed number of pages.
     *
     * @param int $width  number of pages wide
     * @param int $height number of pages tall
     *
     * @return $this
     */
    public function fitToPages(int $width, int $height): self
    {
        return $this;
    }

    /**
     * Set the worksheet tab color.
     *
     * @param int $rgb e.g. 0xFF0000 or one of Format::COLOR_*
     *
     * @return $this
     */
    public function setTabColor(int $rgb): self
    {
        return $this;
    }

    /**
     * Set document properties.
     *
     * Supported keys: title, subject, author, manager, company,
     *                 category, keywords, comments, status, hyperlink_base.
     *
     * @param array $props
     *
     * @return $this
     */
    public function setProperties(array $props): self
    {
        return $this;
    }

    /**
     * Set a single custom document property.
     *
     * @param string                  $name
     * @param string|int|float|bool   $value
     * @param string|null             $type one of: "string", "number", "int", "bool", "date"
     *
     * @return $this
     */
    public function setCustomProperty(string $name, $value, string $type = NULL): self
    {
        return $this;
    }

    /**
     * Define a workbook- or worksheet-scoped name.
     *
     * @param string      $name
     * @param string      $formula
     * @param string|null $scopeSheet null for workbook scope
     *
     * @return $this
     */
    public function defineName(string $name, string $formula, string $scopeSheet = NULL): self
    {
        return $this;
    }

    /**
     * Set the worksheet background image from a file path.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setBackgroundImage(string $path): self
    {
        return $this;
    }

    /**
     * Set the worksheet background image from a binary buffer.
     *
     * @param string $bytes
     *
     * @return $this
     */
    public function setBackgroundImageBuffer(string $bytes): self
    {
        return $this;
    }

    /**
     * Apply a conditional format to a single cell.
     *
     * @param string                $range              e.g. "A1"
     * @param ConditionalFormat|resource $conditionalFormat
     *
     * @return $this
     */
    public function conditionalFormatCell(string $range, $conditionalFormat): self
    {
        return $this;
    }

    /**
     * Apply a conditional format to a range of cells.
     *
     * @param string                $range              e.g. "A1:B10"
     * @param ConditionalFormat|resource $conditionalFormat
     *
     * @return $this
     */
    public function conditionalFormatRange(string $range, $conditionalFormat): self
    {
        return $this;
    }

    /**
     * Add an Excel table to the worksheet.
     *
     * @param string     $range   e.g. "A1:D5"
     * @param Table|null $options
     *
     * @return $this
     */
    public function addTable(string $range, $options = NULL): self
    {
        return $this;
    }

    /**
     * Open xlsx file
     *
     * @param string $fileName
     *
     * @return Excel
     *
     * @author viest
     */
    public function openFile(string $fileName): self
    {
        return $this;
    }

    /**
     * Open sheet
     *
     * default open first sheet
     *
     * @param string|NULL $sheetName
     * @param int         skipFlag
     *
     * @return Excel
     *
     * @author viest
     */
    public function openSheet(string $sheetName = NULL, int $skipFlag = 0x00): self
    {
        return $this;
    }

    /**
     * Sheet list
     *
     * @return array
     *
     * @author viest
     */
    public function sheetList(): array
    {
        return [];
    }

    /**
     * Sheet list with meta information (visibility, dimensions, etc.)
     *
     * @return array
     */
    public function sheetListWithMeta(): array
    {
        return [];
    }

    /**
     * Set row cell data type
     *
     * @param array $types
     *
     * @return Excel
     *
     * @author viest
     */
    public function setType(array $types): self
    {
        return $this;
    }

    /**
     * Set Global Type
     *
     * @return $this
     */
    public function setGlobalType(int $type): self
    {
        return $this;
    }

    /**
     * Set skip rows
     *
     * @param int $rows
     *
     * @return $this
     *
     * @author viest
     */
    public function setSkipRows(int $rows): self
    {
        return $this;
    }

    /**
     * File to csv
     *
     * @param resource $handler
     * @param string   $delimiter
     * @param string   $enclosure
     * @param string   $escape
     *
     * Example:
     *
     * $fp = fopen('path', 'w');
     * putCSV($fp)
     *
     * $fp = fopen('php://memory', 'w');
     * putCSV($fp)
     *
     * @return bool
     *
     * @author viest
     */
    public function putCSV($handler, string $delimiter = ',', string $enclosure = '"', string $escape = '\\'): bool
    {
        return true;
    }

    /**
     * File to csv
     *
     * @param callable $callback
     * @param resource $handler
     * @param string   $delimiter
     * @param string   $enclosure
     * @param string   $escape
     *
     * @return bool
     *
     * @author viest
     */
    public function putCSVCallback(callable $callback, $handler, string $delimiter = ',', string $enclosure = '"', string $escape = '\\'): bool
    {
        return true;
    }

    /**
     * Read values from the sheet
     *
     * @return array
     *
     * @author viest
     */
    public function getSheetData(): array
    {
        return [];
    }

    /**
     * Read values from the sheet
     *
     * @param array|null $types
     *
     * @return array
     *
     * @author viest
     */
    public function nextRow(array $types = NULL): array
    {
        return [];
    }

    /**
     * Read the next row, returning formulas instead of cached values.
     *
     * @return array
     */
    public function nextRowWithFormula(): array
    {
        return [];
    }

    /**
     * Read the next row as rich-text segments.
     *
     * @return array
     */
    public function nextRowRich(): array
    {
        return [];
    }

    /**
     * Get the merged cell ranges of the active sheet.
     *
     * @return array
     */
    public function getMergedCells(): array
    {
        return [];
    }

    /**
     * Get hyperlinks defined on the active sheet.
     *
     * @return array
     */
    public function getHyperlinks(): array
    {
        return [];
    }

    /**
     * Get sheet protection settings for the active sheet.
     *
     * @return array
     */
    public function getSheetProtection(): array
    {
        return [];
    }

    /**
     * Get row options (height, hidden, outline level, ...) for a row.
     *
     * @param int $row 1-based row index
     *
     * @return array
     */
    public function getRowOptions(int $row): array
    {
        return [];
    }

    /**
     * Get column options (width, hidden, outline level, ...) for a column.
     *
     * @param string $colA1 column letter, e.g. "A"
     *
     * @return array
     */
    public function getColumnOptions(string $colA1): array
    {
        return [];
    }

    /**
     * Get the default row height of the active sheet.
     *
     * @return float
     */
    public function getDefaultRowHeight(): float
    {
        return 0.0;
    }

    /**
     * Get the default column width of the active sheet.
     *
     * @return float
     */
    public function getDefaultColumnWidth(): float
    {
        return 0.0;
    }

    /**
     * Get workbook- and sheet-scoped defined names.
     *
     * @return array
     */
    public function getDefinedNames(): array
    {
        return [];
    }

    /**
     * Get data validations applied on the active sheet.
     *
     * @return array
     */
    public function getDataValidations(): array
    {
        return [];
    }

    /**
     * Get the active auto-filter on the active sheet, if any.
     *
     * @return array
     */
    public function getAutoFilter(): array
    {
        return [];
    }

    /**
     * Get the page setup metadata of the active sheet
     * (paper, margins, scaling, orientation, ...).
     *
     * @return array
     */
    public function getPageSetup(): array
    {
        return [];
    }

    /**
     * Get conditional formats defined on the active sheet.
     *
     * @return array
     */
    public function getConditionalFormats(): array
    {
        return [];
    }

    /**
     * Iterate over the comments on a sheet.
     *
     * The callback receives (int $row, int $col, string $text, array $meta).
     *
     * @param callable    $callable
     * @param string|null $sheet sheet name, null for the active sheet
     *
     * @return void
     */
    public function iterateComments(callable $callable, string $sheet = NULL)
    {
        //
    }

    /**
     * Iterate over the embedded charts on a sheet.
     *
     * @param callable    $callable
     * @param string|null $sheet sheet name, null for the active sheet
     *
     * @return void
     */
    public function iterateCharts(callable $callable, string $sheet = NULL)
    {
        //
    }

    /**
     * Iterate over the embedded images on a sheet.
     *
     * @param callable    $callback
     * @param string|null $sheetName sheet name, null for the active sheet
     *
     * @return void
     */
    public function iterateImages(callable $callback, string $sheetName = NULL)
    {
        //
    }

    /**
     * Get the format definition for a given style id.
     *
     * @param int $styleId
     *
     * @return array
     */
    public function getStyleFormat(int $styleId): array
    {
        return [];
    }

    /**
     * Parse a formula string into an abstract syntax tree.
     *
     * @param string $formula
     *
     * @return array
     */
    public static function getFormulaAst(string $formula): array
    {
        return [];
    }

    /**
     * Evaluate a formula and return its computed value.
     *
     * The formula is evaluated with the current worksheet as context (so cell
     * references such as A1 are resolved against the open sheet when there is
     * one). Returns int/float for numbers, bool for logicals, string for text
     * or an error code (e.g. "#DIV/0!"), and null for a blank result.
     *
     * @param string $formula
     *
     * @return int|float|bool|string|null
     *
     * @throws Exception
     */
    public function evaluateFormula(string $formula)
    {
        return null;
    }

    /**
     * Toggle formula computation for the workbook on output().
     *
     * When enabled, cached formula results are computed and written alongside
     * the formulas so readers that do not recalculate still see values.
     *
     * @param bool $enable
     *
     * @return $this
     */
    public function computeFormula(bool $enable = true): self
    {
        return $this;
    }

    /**
     * Next Cell In Callback
     *
     * @param callable    $callback  function(int $row, int $cell, string $data)
     * @param string|NULL $sheetName sheet name
     *
     * @return void
     *
     * @author viest
     */
    public function nextCellCallback(callable $callback, string $sheetName = NULL)
    {
        //
    }

    /**
     * Column index from string
     *
     * @param string $cellCoordinates
     *
     * Example:
     *
     * columnIndexFromString('A')
     * columnIndexFromString('G')
     * columnIndexFromString('AC')
     *
     * @return int
     *
     * @author viest
     */
    public static function columnIndexFromString(string $cellCoordinates): int
    {
        return 0;
    }

    /**
     * String from column index
     *
     * @param int $cellCoordinates
     *
     * Example:
     *
     * stringFromColumnIndex(0)
     * stringFromColumnIndex(28)
     * stringFromColumnIndex(61)
     *
     * @return string
     *
     * @author viest
     */
    public static function stringFromColumnIndex(int $cellCoordinates): string
    {
        return '';
    }

    /**
     * Timestamp from double date
     *
     * @param float $date
     *
     * @return int
     *
     * @author viest
     */
    public static function timestampFromDateDouble(float $date): int
    {
        return 0;
    }
}
