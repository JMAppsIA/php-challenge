<?php

namespace App;


class Call
{
	
	public string $call;

	
	function __construct()
	{
		return trim("$this->call");
	}
}