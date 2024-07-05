<?php

namespace App\Exceptions;

use Exception;

class ErrorConnection extends Exception
{
    function test()
    {
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        return 'catch';
    } finally {
        return 'finally';
    }
}

}
