<?php

namespace ManagerIO;

use GuzzleHttp\Client as GuzzleClient;

class Business {	
	//ManagerIO generates this keys, it doesn't change
	private $defaultKeys = [
		'Customer' => 'ec37c11e-2b67-49c6-8a58-6eccb7dd75ee'
	];
	
	public function __construct($host,$username,$password,$businessKey) {
		$this->client = new GuzzleClient([
			'base_uri' => $host.$businessKey.'/',
			'auth' => [$username,$password]
		]);
	}
	
	public function add($object = []) {
		/*
		$this->client->request('POST',$this->defaultKeys[get_class($object)],[
			'json' => ['Name' => 'Sample Man']
		]);
		*/
		$this->client->request('POST',$this->defaultKeys['Customer'],[
			'json' => ['Name' => 'Sample Man']
		]);
		
		return $this->client;
	}
	
	public function edit() {
		
	}
	
	public function delete() {
		
	}
	
}