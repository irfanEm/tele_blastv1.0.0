<?php

namespace App\Domain;

use DateTime;

class BroadcastMessage
{
    public int $id;
    public int $id_pesan;
    public array $id_group;
    public DateTime $time;
}
