<?php

class PlayerController {
	
	public function index(ApiService $apiService){
		$this->apiService = $apiService;
	}
}