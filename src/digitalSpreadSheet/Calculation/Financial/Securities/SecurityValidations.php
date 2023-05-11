<?php

namespace phenyxDigitale\digitalSpreadSheet\Calculation\Financial\Securities;

use phenyxDigitale\digitalSpreadSheet\Calculation\Exception;
use phenyxDigitale\digitalSpreadSheet\Calculation\Financial\FinancialValidations;
use phenyxDigitale\digitalSpreadSheet\Calculation\Information\ExcelError;

class SecurityValidations extends FinancialValidations {

    /**
     * @param mixed $issue
     */
    public static function validateIssueDate($issue): float {

        return self::validateDate($issue);
    }

    /**
     * @param mixed $settlement
     * @param mixed $maturity
     */
    public static function validateSecurityPeriod($settlement, $maturity): void {

        if ($settlement >= $maturity) {
            throw new Exception(ExcelError::NAN());
        }

    }

    /**
     * @param mixed $redemption
     */
    public static function validateRedemption($redemption): float{

        $redemption = self::validateFloat($redemption);

        if ($redemption <= 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $redemption;
    }

}
