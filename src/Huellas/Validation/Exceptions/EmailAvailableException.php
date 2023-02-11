<?php

namespace Huellas\Validation\Exceptions;

use \Respect\Validation\Exceptions\ValidationException;

class EmailAvailableException extends ValidationException
{
    
    public static $defaultTemplates = [
        self::MODE_DEFAULT  => [
            self::STANDARD => 'Email ya existe.',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'Email no existe',
        ],
    ];
}
