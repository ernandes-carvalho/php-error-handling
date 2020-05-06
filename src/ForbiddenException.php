<?php

namespace SON;

class ForbiddenException extends HttpException
{
    protected $code = 403;

    public function header()
    {
        header('HTTP/1.0 403 Forbidden');
    } 
}
