<?php

namespace SON;

abstract class HttpException extends \Exception
{
    abstract public function header();
}
