<?php 

require_once __DIR__."/Model.php";

class Task extends Model
{
	public $id;

	public $title;

	public $resolved;

	// public $createdAt;

	public function humanResolved()
	{
		if ($this->resolved) {
			return "Да";
		} else {
			return "Нет";
		}
	}
}