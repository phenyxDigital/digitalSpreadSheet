<?php

namespace phenyxDigitale\digitalSpreadSheet\Collection;

use phenyxDigitale\digitalSpreadSheet\Settings;
use phenyxDigitale\digitalSpreadSheet\Worksheet\Worksheet;

abstract class CellsFactory
{
    /**
     * Initialise the cache storage.
     *
     * @param Worksheet $worksheet Enable cell caching for this worksheet
     *
     * */
    public static function getInstance(Worksheet $worksheet): Cells
    {
        return new Cells($worksheet, Settings::getCache());
    }
}
