<?php

use PhillipJackson\AssHatMan\AssHat;

class AssHatTests extends PHPUnit_Framework_TestCase{

	public function testRetrieveingConfigOptions()
	{
		$dir = __DIR__ . '/../public/config.php';
		$con = file($dir);
		$this->arrayHasKey('css', $con);
	}

	public function testThatWeCanScanAGivenDirectory()
	{
		$dirtocheck = __DIR__ . '/../public/css';
		
		$file = new AssHat($dirtocheck);
		$listing = $file->fileList();
		$this->assertArrayHasKey('1', $listing);
	}

	public function testRetrieveingAListOfFiles()
	{		
		$dirtocheck = __DIR__ . '/../public/css';

		$files = new AssHat($dirtocheck);
		$ex = $files->getFile();
		$this->assertContains('test.css', $ex);
	}

	public function testOpeningFile()
	{		
		$dir = __DIR__ . '/../public/css';
		$file = new AssHat($dir);
		$ex = $file->openFile();
		$this->assertNotFalse($ex);
	}

	public function testAlteringAFileAndReturningThatFile()
	{
		$dir = __DIR__ . '/../public/css/';
		$file = new AssHat($dir);
		$ex = $file->modifyFile();
		$this->assertNotFalse($ex);
	}

}