<?php

class Word {
	private $word;
	
	/**
	 * @param string $word an english word.
	 */
	public function __construct($word){
		$this->word = $word;
	}
	
	/**
	 * Finds the number of instanes of a letter this
	 * word and returns the highest count.
	 * @return number
	 */
	function countHighestLetterRepeat(){
		return 0;
	}
}

?>