<?php namespace PhillipJackson\AssHatMan\File;

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