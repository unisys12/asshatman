<?php namespace PhillipJackson\AssHatMan;

class File {

	public function __construct($file)
	{
		$this->file = $file;
	}

	public function directoryList()
	{
		return array_diff(scandir($this->file), array('..', '.'));
	}

	public function getFile()
	{
		return $this->file;
	}

	public function getFileNames()
	{
		$list = $this->directoryList();

		foreach ($list as $key => $filename) {
			return $filename;
		}
	}

}