<?php
namespace App\Repository;

use App\DatabaseInterface;

class FileStorage implements DatabaseInterface
{
    public function store($data)
    {
        $file = fopen("registrations.txt", "a");
        $data = $data['name'].",".$data['email'].",".$data['password']."\n";
        fwrite($file, $data);
        fclose($file);
    }
}