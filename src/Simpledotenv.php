<?php

namespace Mmqfilho\Simpledotenv;

Class Simpledotenv
{
	/**
	 * Constructor
	 * @param string $path - path to the .env file
	 */
	public function __construct($path = null){
		$this->clearEnvVars($path);
		$this->createEnvVars($path);
	}
	
	/**
	 * Insert data in ENV var
	 * @param string $path
	 */
	private function createEnvVars($path = null){
		$lines = parse_ini_file($path . '.env', false);
		
 		foreach ($lines as $name => $value){
 			$_ENV[$name] = $value;
		}
	}
	
	/**
	 * Remove data in ENV var
	 * @param string $path
	 */
	private function clearEnvVars($path = null){
		$lines = parse_ini_file($path . '.env', false);
		
		foreach ($lines as $name => $value){
			if (isset($_ENV[$name])){
				unset($_ENV[$name]);
			}
		}
	}

}