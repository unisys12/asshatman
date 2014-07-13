<?php

use PhillipJackson\AssHatMan\AssHat;

class AssHatTests extends PHPUnit_Framework_TestCase{

	public function setUp()
	{
		$dirtosave = __DIR__ . '/../public/css';
		$dirtocheck = __DIR__ . '/../build/css';
		
		$this->file = new AssHat($dirtocheck,$dirtosave);
	}

	public function testRetrieveingConfigOptions()
	{
		$dir = __DIR__ . '/../public/config.php';
		$con = file($dir);
		$this->arrayHasKey('css', $con);
	}

	public function testThatWeCanScanAGivenDirectory()
	{
		$listing = $this->file->fileList();
		$this->assertArrayHasKey('1', $listing);
	}

	public function testRemovelyOfSpacesFromFile()
	{
		$ex = $this->file->removeSpaces();
		$this->assertNotFalse('$ex');
	}

	public function testAlteringAFileAndReturningThatFile()
	{
		$ex = $this->file->modifyFile();
		$this->assertNotFalse($ex);
	}

	public function testThatNewFileIsSavedInPublicDirectory()
	{
		$ex = $this->file->saveFile();
		$this->assertNotFalse($ex);
	}
}