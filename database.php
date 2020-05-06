<?php

namespace SON;

use SON\NotFoundException;

class Database
{
    public function connect()
    {
        //throw new NotFoundException("Página não encontrada fklklfgklfdg!");
        //throw new \Exception("Página não encontrada fklklfgklfdg!", 20);
        return new \PDO();
    }

}
