<?php

use PhillipJackson\AssHatMan\File;

class FileTests extends PHPUnit_Framework_TestCase{

	public function setUp()
	{

	}

	public function testThatWeCanScanAGivenDirectory()
	{
		$dirtocheck = __DIR__ . '/../public/css/';
		
		$file = new File($dirtocheck);
		$listing = $file->directoryList();
		$this->assertNotEmpty($listing);
	}

	public function testRetrieveingAFile()
	{		
		$filetocheck = file(__DIR__ . '/../public/css/testcss.css');

		$file = new File($filetocheck);
		$checkfile = $file->getFile($filetocheck);
		$this->assertNotEmpty($checkfile);
	}

	public function testThatWeCanRetrieveAFileName()
	{
		$filetocheck = __DIR__ . '/../public/css/';

		$dir = new File($filetocheck);
		$checkforname = $dir->getFileNames();
		$this->assertContains('testcss.css', $checkforname);
	}

}