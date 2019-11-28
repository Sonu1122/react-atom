<?php
namespace Farmbase;
class Tasks
{
    protected $tasks = [];

    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }

}