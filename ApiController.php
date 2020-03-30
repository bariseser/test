<?php

ApiController {
	
	public function index(ApiService $apiService){
		$this->apiService = $apiService;
	}
}