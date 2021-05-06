<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-20
 */
class ShopQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.shop.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryShop";
	}
	
}

?>