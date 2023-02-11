<?php

namespace Huellas\Validation\Exceptions;

use \Respect\Validation\Exceptions\ValidationException;

class ExistsWhenUpdateException extends ValidationException
{

    public static $defaultTemplates = [
        self::MODE_DEFAULT  => [
            self::STANDARD => 'ya se ha usado',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'no existe',
        ],
    ];
}
