<?php namespace PhillipJackson\AssHatMan;

use DirectoryIterator;

class AssHat{

	public function __construct($dir)
	{
		$this->dir = $dir;
	}

	public function fileList()
	{
		$files = [];
		$list = new DirectoryIterator($this->dir);

		foreach ($list as $singlefile) {
			if($singlefile->isDot()) continue;
			$files[] =  $singlefile->getFilename();
		}	

		return $files;
	}

	public function getFile()
	{
		foreach ($this->fileList() as $files) {
			$file = $this->dir . '/' . $files;
			return $file;
		}		
	}

	public function openFile()
	{		
		return fopen($this->getFile(), 'w+');
	}

	public function modifyFile()
	{
		$content = file_get_contents($this->getFile());
		$modfile = rtrim($content);
		file_put_contents($this->getFile(), $modfile);
	}

}