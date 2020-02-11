<?php

namespace Database;

class Config
{
    static public function connections()
    {
        return $connections = [
            'mysql' => [
                'host'      => 'localhost',
                'database'  => 'solidDB',
                'username'  => 'richard',
                'password'  => 123456,
                'port'      => 3306,
            ],
        ];
    }
}
