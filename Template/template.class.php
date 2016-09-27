<?php

	class Template{

		var $assignedValues= array();
		var $tpl;
		var $tpt1= "Hello<br/>";

		function __construct($_part = ''){

			if (!empty($_part)){

				if(file_exists($_part)){
			
					$this->tpl = file_get_contents($_part);
				}else{
					echo "<b>File<b/>" . "Error File";
				}
				echo $this->tpl;
				
			}


			} 

		function assgin($_searchString,$_relayceString){

			if(!empty($_searchString)){

				$this->assignedValues[strtoupper($_searchString)] = $_relayceString;

			}
		//	var_dump($this->assignedValues);
			
		}

		function show(){
			if(count($this->assignedValues) > 0){

				foreach ($this->assignedValues as $key => $value) {
					
					$this->tpl = str_replace('{'.$key.'}', $value, $this->tpl);
					# code...
				}
			}
			echo $this->tpl;
		
		}
	}

	

?>