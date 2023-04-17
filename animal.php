<?php
	class Animal{
		public $id;
		public $nome;
		public $tutor;
	
		
		public function __construct($nome, $tutor){
			$this->nome = $nome;
			$this->tutor = $tutor;
		}
	}
?>