<?php

namespace Vtiful\Kernel;

/**
 * Class Validation
 *
 * @author  viest
 *
 * @package Vtiful\Kernel
 */
class Validation
{
    const TYPE_INTEGER = 0x0;
    const TYPE_INTEGER_FORMULA = 0x0;
    const TYPE_DECIMAL = 0x0;
    const TYPE_DECIMAL_FORMULA = 0x0;
    const TYPE_LIST = 0x0;
    const TYPE_LIST_FORMULA = 0x0;
    const TYPE_DATE = 0x0;
    const TYPE_DATE_FORMULA = 0x0;
    const TYPE_TIME = 0x0;
    const TYPE_TIME_FORMULA = 0x0;
    const TYPE_LENGTH = 0x0;
    const TYPE_LENGTH_FORMULA = 0x0;
    const TYPE_CUSTOM_FORMULA = 0x0;
    const TYPE_ANY = 0x0;

    const CRITERIA_BETWEEN = 0x0;
    const CRITERIA_NOT_BETWEEN = 0x0;
    const CRITERIA_EQUAL_TO = 0x0;
    const CRITERIA_NOT_EQUAL_TO = 0x0;
    const CRITERIA_GREATER_THAN = 0x0;
    const CRITERIA_LESS_THAN = 0x0;
    const CRITERIA_GREATER_THAN_OR_EQUAL_TO = 0x0;
    const CRITERIA_LESS_THAN_OR_EQUAL_TO = 0x0;

    const ERROR_TYPE_STOP = 0x0;
    const ERROR_TYPE_WARNING = 0x0;
    const ERROR_TYPE_INFORMATION = 0x0;

    /**
     * Validation constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Validation type
     *
     * @param int $validationType
     *
     * Examples: \Vtiful\Kernel\Validation::TYPE_INTEGER
     *
     * @return $this
     *
     * @author viest
     */
    public function validationType(int $validationType): self
    {
        return $this;
    }

    /**
     * Criteria type
     *
     * @param int $criteriaType
     *
     * Examples: \Vtiful\Kernel\Validation::CRITERIA_BETWEEN
     *
     * @return $this
     *
     * @author viest
     */
    public function criteriaType(int $criteriaType): self
    {
        return $this;
    }

    /**
     * Ignore blank
     *
     * @param bool $ignoreBlank
     *
     * @return $this
     *
     * @author viest
     */
    public function ignoreBlank(bool $ignoreBlank = True): self
    {
        return $this;
    }

    /**
     * Show input
     *
     * @param bool $showInput
     *
     * @return $this
     *
     * @author viest
     */
    public function showInput(bool $showInput = True): self
    {
        return $this;
    }

    /**
     * Show error
     *
     * @param bool $showError
     *
     * @return $this
     *
     * @author viest
     */
    public function showError(bool $showError = True): self
    {
        return $this;
    }

    /**
     * Error type
     *
     * @param int $type
     *
     * Examples: \Vtiful\Kernel\Validation::ERROR_TYPE_STOP
     *
     * @return $this
     *
     * @author viest
     */
    public function errorType(int $type): self
    {
        return $this;
    }

    /**
     * Dropdown
     *
     * @param bool $dropdown
     *
     * @return $this
     *
     * @author viest
     */
    public function dropdown(bool $dropdown = True): self
    {
        return $this;
    }

    /**
     * Number
     *
     * @param int $number
     *
     * @return $this
     *
     * @author viest
     */
    public function valueNumber(int $number): self
    {
        return $this;
    }

    /**
     * Value Formula
     *
     * @param string $formula
     *
     * @return $this
     *
     * @author viest
     */
    public function valueFormula(string $formula): self
    {
        return $this;
    }

    /**
     * Value List
     *
     * @param array $list
     *
     * @return $this
     *
     * @author viest
     */
    public function valueList(array $list): self
    {
        return $this;
    }

    /**
     * Value Datetime
     *
     * @param int $timestamp
     *
     * @return $this
     */
    public function valueDatetime(int $timestamp): self
    {
        return $this;
    }

    /**
     * Minimum number
     *
     * @param float $minimumNumber
     *
     * @return $this
     *
     * @author viest
     */
    public function minimumNumber(float $minimumNumber): self
    {
        return $this;
    }

    /**
     * Minimum formula
     *
     * @param string $formula
     *
     * @return $this
     *
     * @author viest
     */
    public function minimumFormula(string $formula): self
    {
        return $this;
    }

    /**
     * Minimum Datetime
     *
     * @param int $timestamp
     *
     * @return $this
     */
    public function minimumDatetime(int $timestamp): self
    {
        return $this;
    }

    /**
     * Maximum number
     *
     * @param float $maximumNumber
     *
     * @return $this
     *
     * @author viest
     */
    public function maximumNumber(float $maximumNumber): self
    {
        return $this;
    }

    /**
     * Maximum formula
     *
     * @param string $formula
     *
     * @return $this
     *
     * @author viest
     */
    public function maximumFormula(string $formula): self
    {
        return $this;
    }

    /**
     * Maximum Datetime
     *
     * @param int $timestamp
     *
     * @return $this
     */
    public function maximumDatetime(int $timestamp): self
    {
        return $this;
    }

    /**
     * Input title
     *
     * @param string $title
     *
     * @return $this
     *
     * @author viest
     */
    public function inputTitle(string $title): self
    {
        return $this;
    }

    /**
     * Input Message
     *
     * @param string $message
     *
     * @return $this
     *
     * @author viest
     */
    public function inputMessage(string $message): self
    {
        return $this;
    }

    /**
     * Error title
     *
     * @param string $title
     *
     * @return $this
     *
     * @author viest
     */
    public function errorTitle(string $title): self
    {
        return $this;
    }

    /**
     * Error message
     *
     * @param string $message
     *
     * @return $this
     *
     * @author viest
     */
    public function errorMessage(string $message): self
    {
        return $this;
    }

    /**
     * Get validation resource
     *
     * @return resource
     *
     * @author viest
     */
    public function toResource()
    {
        // return resource;
    }
}