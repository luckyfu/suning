<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-4
 */
class ShopInfoGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.shopinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getShopInfo";
	}
	
}

?>