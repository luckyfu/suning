<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-15
 */
class LogisticscompanycodeQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.enable.logisticscompanycode.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryLogisticscompanycode";
	}
	
}

?>