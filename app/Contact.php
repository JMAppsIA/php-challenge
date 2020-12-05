<?php

namespace App;


class Contact
{
	public $contactName;
	public $nameArray = array("NombrePrueba","NomTest","NomPruebaDos");


	public function contactExists()
    {		
		
        return in_array($this->contactName,$this->nameArray);
    }
}