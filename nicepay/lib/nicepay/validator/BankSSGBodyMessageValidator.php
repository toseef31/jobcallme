<?php
require_once dirname(__FILE__).'/BodyMessageValidator.php';
require_once dirname(__FILE__).'/../exception/ServiceException.php';
require_once dirname(__FILE__).'/../log/LogMode.php';
/**
 * 
 * @author kblee
 *
 */
class BankSSGBodyMessageValidator implements BodyMessageValidator{
	
	/**
	 * 
	 */
	public function BankSSGBodyMessageValidator(){
		
	}
	
	/**
	 * 
	 * @param $mdto
	 */
	public function validate($mdto){
	  
		if ($mdto->getParameter(TR_KEY) == null) {		
  		}
  		
  		/* 필수 파라미터 체크, 하단에 추가 */
	}
}
?>
