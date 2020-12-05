<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	protected $names = array("NombrePrueba","NomTest","NomPruebaDos");

	public static function findByName($firstName): Contact
	{
		return in_array($firstName,$names)?true:false;
	}

	public static function validateNumber(string $number): bool
	{
		return (is_numeric($number) && $number > 0 && $number == round($number, 0)) ? true : false;		
	}
}