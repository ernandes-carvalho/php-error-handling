<?php

function exception_handler($e) {
    if (is_a($e, "SON\\HttpException")) {
        $e->header();
        $title = $e->getCode().' Error';

    } else  {
        header('HTTP/1.0 500 Internal Server Error');
        $title = get_class($e);
    }

    echo "<h1>{$title}</h1>";
    echo "<p>{$e->getMessage()} : code {$e->getCode()}</p>";
    echo "<ul>";
    foreach ($e->getTrace() as $trace) {
        echo "<li>{$trace['file']}: {$trace['line']}</li>";
    }
    echo "</ul>";
}

set_exception_handler('exception_handler');

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/database.php';

$db = new SON\Database;

$db->connect();

/*try {
    $db->connect();

} catch (SON\NotFoundException $e) {
    $e->header();
    echo "<h1>NotFoundException</h1>";
    echo "<p>{$e->getMessage()} : code {$e->getCode()}</p>";
    echo "<ul>";
    foreach ($e->getTrace() as $trace) {
        echo "<li>{$trace['file']}: {$trace['line']}</li>";
    }
    echo "</ul>";

} catch (\Exception $e) {
    echo "<h1>Exception</h1>";
    echo "<p>{$e->getMessage()} : code {$e->getCode()}</p>";
    echo "<ul>";
    foreach ($e->getTrace() as $trace) {
        echo "<li>{$trace['file']}: {$trace['line']}</li>";
    }
    echo "</ul>";

} catch (\Error $e) {
    echo "<h1>Error</h1>";
    echo "<p>{$e->getMessage()} : code {$e->getCode()}</p>";
    echo "<ul>";
    foreach ($e->getTrace() as $trace) {
        echo "<li>{$trace['file']}: {$trace['line']}</li>";
    }
    echo "</ul>";

}*/
