<?php

namespace Vtiful\Kernel;

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
    const SKIP_EMPTY_VALUE = 0X100;

    const GRIDLINES_HIDE_ALL = 0;
    const GRIDLINES_SHOW_SCREEN = 1;
    const GRIDLINES_SHOW_PRINT = 2;
    const GRIDLINES_SHOW_ALL = 3;

    /**
     * Excel constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        //
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
     * Const memory model
     *
     * @param string $fileName
     * @param string $sheetName
     *
     * @return Excel
     *
     * @author viest
     */
    public function constMemory(string $fileName, string $sheetName = 'Sheet1'): self
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
     * Insert data on the first line of the worksheet
     *
     * @param array $header
     *
     * @return Excel
     *
     * @author viest
     */
    public function header(array $header): self
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
     * @param resource|null $formatHandle
     *
     * @return Excel
     *
     * @author viest
     */
    public function insertUrl(int $row, int $column, string $url, $formatHandle = NULL): self
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
    public function putCSV(resource $handler, string $delimiter = ',', string $enclosure = '"', string $escape = '\\'): bool
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
    public function putCSVCallback(callable $callback, resource $handler, string $delimiter = ',', string $enclosure = '"', string $escape = '\\'): bool
    {
        return true;
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
     * @return array
     *
     * @author viest
     */
    public function nextRow(): array
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
     * Set the worksheet zoom factor in the range 10 <= zoom <= 400:
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
}