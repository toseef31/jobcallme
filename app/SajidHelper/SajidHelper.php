<?php
namespace App\SajidHelper;

Class SajidHelper {
	private $client_id;
	private $client_secret;
	private $redirect_url;

	public function __construct($Facebook){
		$this->client_id = $Facebook['client_id'];
		$this->client_secret = $Facebook['client_secret'];
		$this->redirect_url = $Facebook['redirect'];
	}

	public function getClientId(){
		return $this->client_id;
	}
	public function getClientSecret(){
		return $this->client_secret;
	}
	public function redirect(){
		return $this->redirect_url;
	}
	public function IpBaseLang(){
		if(!\Session::has('loadOne')){
			$ip = \Request::ip();
			$position = \Location::get($ip);
			if($position->countryCode != 'KR'){
				\App::setLocale('en');
				\Session::put('locale', 'en');
				\Session::put('loadOne', 'yes');
			}
		}	
	}
}