<?php namespace PhillipJackson\AssHatMan;

class File {

	public function __construct($file)
	{
		$this->file = $file;
	}	

	public function getFile($file)
	{
		return $this->file;
	}

}