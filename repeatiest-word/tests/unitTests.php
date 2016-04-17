<?php
require __DIR__ . '/../src/Word.php';
require __DIR__ . '/../src/Passage.php';

class repeatiestWordTests extends PHPUnit_Framework_TestCase
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
	
	public function testPassageCleaning(){
		$passage1 = new Passage("The stars 3 night in _mexico");
		$this->assertEquals($passage1->getCleanedPassage(), "The stars night in mexico");
		
	}
	
	public function testGetRepeatiestWord(){
		
		//Test cases provided in problem examples. 
		//(If I don't at least get these, I did something wrong)
		$passage1 = new Passage("O Romeo, Romeo, wherefore art thou Romeo?");
		$this->assertEquals($passage1->getRepeatiestWord(), "wherefore");
		
		$passage2 = new Passage("Some people feel the rain, while others just get wet.");
		$this->assertEquals($passage2->getRepeatiestWord(), "people");
		
		//Ensure newlines don't trip us up.
		$passage3 = new Passage("O Romeo, Romeo, wherefore art \n thou Romeo?");
		$this->assertEquals($passage3->getRepeatiestWord(), "wherefore");
	}
	
	
}
