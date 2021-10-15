<?php
class Task {
protected $id;
protected $title;
protected $description;
protected $completed;

public function __construct($id = null, $title = null, $description = null, $completed = null)
{
$this->id = $id;
$this->title = $title;
$this->description = $description;
$this->completed = $completed;
}


}