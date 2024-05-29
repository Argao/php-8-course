<?php

namespace App;

class CurrentWeek implements \Iterator
{

    private \DateTime $date;
    private int $daysFrom = 0;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    #[\Override] public function current(): mixed
    {
        return $this->date->format('F j Y');
    }

    #[\Override] public function next(): void
    {
        $this->date->modify("tomorrow");
        $this->daysFrom++;
    }

    #[\Override] public function key(): mixed
    {
        return $this->daysFrom;
    }

    #[\Override] public function valid(): bool
    {
        return $this->daysFrom < 7;
    }

    #[\Override] public function rewind(): void
    {
        $this->date->modify('today');
        $this->daysFrom = 0;
    }
}