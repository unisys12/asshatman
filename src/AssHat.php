<?php namespace PhillipJackson\AssHatMan;

use DirectoryIterator;

class AssHat{

	public function __construct($builddir, $publicdir)
	{
		$this->builddir = $builddir;
		$this->publicdir = $publicdir;
	}

	public function fileList()
	{
		$files = [];
		$list = new DirectoryIterator($this->builddir);

		foreach ($list as $singlefile) {
			if($singlefile->isDot()) continue;
			$files[] =  $singlefile->getFilename();
		}	

		return $files;
	}

	public function getFile()
	{
		foreach ($this->fileList() as $files) {
			$file = $this->builddir . '/' . $files;
			return $file;
		}		
	}

	public function openFile()
	{		
		return fopen($this->getFile(), 'w+');
	}

	public function modifyFile()
	{
		return file_get_contents($this->getFile());
	}

	public function removeSpaces()
	{
		return preg_replace('/\s+/', '', $this->modifyFile());
	}

	public function saveFile()
	{
		$options = stream_context_create(array('file' => array('overwrite' => true)));
		file_put_contents($this->publicdir . 'style.css', $this->removeSpaces(), 0, $options);
	}

}
