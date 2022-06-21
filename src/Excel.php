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
    const SKIP_HIDDEN_ROW = 0x08;
    const SKIP_EMPTY_VALUE = 0X100;

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
     * @param int               $row
     * @param int               $column
     * @param int|string|double $data
     * @param string|null       $format
     * @param resource|null     $formatHandle
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
     * @param float         $cellWidth
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function setColumn(string $range, float $cellWidth, $formatHandle = NULL): self
    {
        return $this;
    }

    /**
     * Set row cells height or format
     *
     * @param string        $range
     * @param float         $cellHeight
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function setRow(string $range, float $cellHeight, $formatHandle = NULL): self
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