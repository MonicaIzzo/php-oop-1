<?php
class Actor
{
    public $id;
    public $first_name;
    public $last_name;
    public $role;
    public function __costruct($id, $first_name, $last_name, $role)

    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->role = $role;
    }
    public function getFullName()
    {
        return $this->first_name - ' ' . $this->last_name;
    }
}
