<?php
use Farmbase\Person;
use Farmbase\Business;
use Farmbase\Staff;
use Farmbase\Task;

$sandeep = new Person('sandeep');
$sonveer = new Person('sonveer');
$staff = new Staff();
$shopkart = new Business($staff);

$shopkart->hire($sonveer);
$shopkart->hire($sandeep);

$tasks = new Tasks('make daily reoport');


var_dump($staff);