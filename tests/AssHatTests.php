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
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css';
		
		$file = new AssHat($dirtocheck,$dirtosave);
		$listing = $file->fileList();
		$this->assertArrayHasKey('1', $listing);
	}

	public function testRetrieveingAListOfFiles()
	{		
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css';

		$files = new AssHat($dirtocheck,$dirtosave);
		$ex = $files->getFile();
		$this->assertContains('test.css', $ex);
	}

	public function testOpeningFile()
	{		
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css';
		$file = new AssHat($dirtocheck,$dirtosave);
		$ex = $file->openFile();
		$this->assertNotFalse($ex);
	}

	public function testRemovelyOfSpacesFromFile()
	{
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css/';
		$file = new AssHat($dirtocheck,$dirtosave);
		$ex = $file->removeSpaces();
		$this->assertNotFalse('$ex');
	}

	public function testAlteringAFileAndReturningThatFile()
	{
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css/';
		$file = new AssHat($dirtocheck,$dirtosave);
		$ex = $file->modifyFile();
		$this->assertNotFalse($ex);
	}

	public function testThatNewFileIsSavedInPublicDirectory()
	{
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css/';
		$file = new AssHat($dirtocheck,$dirtosave);
		$ex = $file->saveFile();
		$this->assertNotFalse($ex);
	}
}