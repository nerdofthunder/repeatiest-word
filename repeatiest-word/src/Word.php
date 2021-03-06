<?php

class Word {
	private $word;
	
	/**
	 * @param string $word an english word.
	 */
	public function __construct($word){
		if (!ctype_alpha ($word)){
			throw new Exception("Words may only have letters word: ".$word);
		}
		$this->word = $word;
	}
	
	/**
	 * Finds the number of instanes of a letter this
	 * word and returns the highest count.
	 * @return number
	 */
	public function countHighestLetterRepeat(){
		$characters = str_split ( strtolower($this->word) , 1  );
		
		//hashmap or characters and their count
		$characterCount = array();
		
		foreach( $characters as $character){
			if (array_key_exists ( $character , $characterCount )){
				$characterCount[$character]++;
			}
			else{
				$characterCount[$character] = 1;
			}
		}
		
		
		return max($characterCount);
	}
	public function getWordAsString(){
		return $this->word;
	}
}

?>