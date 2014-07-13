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

		foreach ($list as $key => $singlefile) {
			if($singlefile->isDot()) continue;
			$files[] = $singlefile->getPathname();
		}	

		return $files;
	}

	public function modifyFile()
	{
		foreach ($this->fileList() as $file) {
			return file_get_contents($file);
		}
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
