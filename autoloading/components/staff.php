<?php
namespace Farmbase;
class Staff
{
    protected $member = [];

    public function __construct($member = [])
    {
        $this->member = $member;
    }
    
    public function add($member)
    {
        $this->member[] = $member;
    }
}