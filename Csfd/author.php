<?php

namespace Mikulas\Csfd;


class Author
{
	
	/** @var int */
	protected $id;

	/** @var string */
	protected $name;



	public function __construct($id)
	{
		$this->id = $id;
	}



	public function setName($name)
	{
		$this->name = $name;
	}

}