<?php

namespace phenyxDigitale\digitalSpreadSheet\Calculation\Engine\Operands;

interface Operand
{
    public static function fromParser(string $formula, int $index, array $matches): self;

    public function value(): string;
}
