<?php
require __DIR__ . '/../src/Word.php';

class letterCounterTest extends PHPUnit_Framework_TestCase
{
	public function testLetterCounter(){
		$word1 = new Word("butter");
		$word2 = new Word("ttttt");
		$word3 = new Word("Romeo");
		$word4 = new Word("chicken");
		$word5 = new Word("LLll");
	
		$this->assertEquals($word1->countHighestLetterRepeat(), 2);
		$this->assertEquals($word2->countHighestLetterRepeat(), 5);
		$this->assertEquals($word3->countHighestLetterRepeat(), 2);
		$this->assertEquals($word4->countHighestLetterRepeat(), 2);
		
		//test that upper and lower case letters are treated the same
		$this->assertEquals($word5->countHighestLetterRepeat(), 4);
	}
	
	
}
