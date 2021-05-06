<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-17
 */
class FullAddressGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.govbus.fulladdress.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getFullAddress";
	}
	
}

?>