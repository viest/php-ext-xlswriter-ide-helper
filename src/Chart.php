<?php

namespace Vtiful\Kernel;

/**
 * Class Chart
 *
 * @author  viest
 *
 * @package Vtiful\Kernel
 */
class Chart
{
    const CHART_BAR = 0;
    const CHART_BAR_STACKED = 0;
    const CHART_BAR_STACKED_PERCENT = 0;

    const CHART_AREA = 0;
    const CHART_AREA_STACKED = 0;
    const CHART_AREA_STACKED_PERCENT = 0;

    const CHART_LINE = 0;

    const CHART_COLUMN = 0;
    const CHART_COLUMN_STACKED = 0;
    const CHART_COLUMN_STACKED_PERCENT = 0;

    const CHART_DOUGHNUT = 0;

    const CHART_PIE = 0;

    const CHART_SCATTER = 0;
    const CHART_SCATTER_STRAIGHT = 0;
    const CHART_SCATTER_STRAIGHT_WITH_MARKERS = 0;
    const CHART_SCATTER_SMOOTH = 0;
    const CHART_SCATTER_SMOOTH_WITH_MARKERS = 0;

    const CHART_RADAR = 0;
    const CHART_RADAR_WITH_MARKERS = 0;
    const CHART_RADAR_FILLED = 0;

    const CHART_LEGEND_NONE = 0;
    const CHART_LEGEND_RIGHT = 0;
    const CHART_LEGEND_LEFT = 0;
    const CHART_LEGEND_TOP = 0;
    const CHART_LEGEND_BOTTOM = 0;
    const CHART_LEGEND_OVERLAY_RIGHT = 0;
    const CHART_LEGEND_OVERLAY_LEFT = 0;

    const CHART_LINE_STACKED = 0;
    const CHART_LINE_STACKED_PERCENT = 0;

    /**
     * Chart constructor.
     *
     * @param resource $handle
     * @param int      $type
     */
    public function __construct($handle, int $type)
    {
        //
    }

    /**
     * Add a data series to a chart.
     *
     * @param string $value
     * @param string $categories
     *
     * @return $this
     *
     * @author viest
     */
    public function series(string $value, string $categories): self
    {
        return $this;
    }

    /**
     * Set the name of a chart series range.
     *
     * @param string $value
     *
     * @return $this
     *
     * @author viest
     */
    public function seriesName(string $value): self
    {
        return $this;
    }

    /**
     * Set the chart style type.
     *
     * @param int $style
     *
     * @return $this
     *
     * @author viest
     */
    public function style(int $style): self
    {
        return $this;
    }

    /**
     * Set the name caption of the an axis.
     *
     * @param string $name
     *
     * @return $this
     *
     * @author viest
     */
    public function axisNameX(string $name): self
    {
        return $this;
    }

    /**
     * Set the name caption of the an axis.
     *
     * @param string $name
     *
     * @return $this
     *
     * @author viest
     */
    public function axisNameY(string $name): self
    {
        return $this;
    }

    /**
     * Set the title of the chart.
     *
     * @param string $title
     *
     * @return $this
     *
     * @author viest
     */
    public function title(string $title): self
    {
        return $this;
    }

    /**
     * Set the position of the chart legend
     *
     * @param int $type
     *
     * @return $this
     *
     * @author viest
     */
    public function legendSetPosition(int $type): self
    {
        return $this;
    }

    /**
     * Chart resource
     *
     * @return resource
     *
     * @author viest
     */
    public function toResource()
    {
        // return resource
    }
}