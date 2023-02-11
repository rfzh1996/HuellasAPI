<?php

namespace Huellas\Validation\Exceptions;

use \Respect\Validation\Exceptions\ValidationException;

class ExistsInTableException extends ValidationException
{

    public static $defaultTemplates = [
        self::MODE_DEFAULT  => [
            self::STANDARD => 'ya ha sido usado',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'no existe',
        ],
    ];
}
