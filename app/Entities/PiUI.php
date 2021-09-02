<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PiUI extends Entity
{

    public function get()
    {
        $this->cApi = file_get_contents("http://localhost:8080/mc-batola/public/ui-mode/text.json");
        $obj  = json_decode($this->cApi, true);

        return $obj;
    }
}
