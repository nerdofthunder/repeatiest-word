<?php

class Passage{
	
	private $passage;

	/**
	 * 
	 * @param string $passage
	 */
	public function __construct( $passage ){
		
		$this->passage = $passage;
		cleanPassage();
	}
	
	/**
	 * removes punctuation and non letter characters
	 */
	private function cleanPasage(){
		
		//magic words to clean up passage.
		$this->passage = preg_replace('/[^a-z]+/i', ' ', $this->passage);
		
	}
}