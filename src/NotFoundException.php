<?php

namespace SON;

class NotFoundException extends HttpException
{
    protected $code = 404;
    public function header()
    {
        header('HTTP/1.0 404 Not Found');
    }

}
