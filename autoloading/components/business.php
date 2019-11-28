<?php

namespace Farmbase;

class Business
{
    protected $staff;
    protected $tasks = [];

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function assignTask(Tasks $tasks)
    {
        $this->tasks = $tasks;
    }
}
