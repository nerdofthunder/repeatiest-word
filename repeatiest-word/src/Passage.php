<?php

class Passage{
	
	private $passage;

	/**
	 * 
	 * @param string $passage
	 */
	public function __construct( $passage ){
		
		$this->passage = $passage;
		$this->cleanPassage();
	}
	
	/**
	 * removes punctuation and non letter characters
	 */
	private function cleanPassage(){
		
		//magic words to clean up passage.
		$this->passage = preg_replace('/[^a-z]+/i', ' ', $this->passage);
		
	}
	
	/**
	 * Takes the passage, splits it into Word objects.
	 */
	private function splitPassageIntoWords(){
		$explodedPassage = explode ( " " , $this->passage );
		$words = array();
		foreach ($explodedPassage as $word){
			$word = trim($word);
			if(!empty($word)){
				array_push($words, new Word($word));
			}
		}
		return $words;
	}

	/**
	 * @return the cleaned passage.
	 */
	public function getCleanedPassage(){
		return $this->passage;
	}
	
	public function getRepeatiestWord(){
		$words = $this->splitPassageIntoWords();
		
		$winningWord = "";
		$highestCount = 0;
		foreach ($words as $word){
			
			$wordcount = $word->countHighestLetterRepeat();
			
			if ( $wordcount > $highestCount){
				$highestCount = $wordcount;
				$winningWord = $word->getWordAsString();
			}
		}
		return $winningWord;
	}
	
}