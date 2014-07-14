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
		$list = new DirectoryIterator($this->builddir);

		foreach ($list as $key => $singlefile) {
			if($singlefile->isDot()) continue;
			$files[] = $singlefile->getPathname();
		}	

		return $files;
	}

	public function getFile()
	{
		$list = $this->fileList();
		foreach ($list as $key => $file) {
			$content[$key] = file_get_contents($file);
		}

		return $content;
	}

	public function removeSpaces()
	{
		return preg_replace('/\s+/', '', $this->getFile());
	}

	public function saveFile()
	{
		$options = stream_context_create(array('file' => array('overwrite' => true)));
		file_put_contents($this->publicdir . 'style.css', $this->removeSpaces(), 0, $options);
	}

}
