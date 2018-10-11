<?php


class NewClass
{
    public $myProperty = "This is a private property";

    public function set_myProperty($value)
    {
        $this->myProperty = $value;
    }

    public function get_myProperty()
    {
        return $this->myProperty;
    }
}