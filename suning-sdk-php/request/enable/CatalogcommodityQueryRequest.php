<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-29
 */
class CatalogcommodityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $catalogId;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getCatalogId() {
		return $this->catalogId;
	}
	
	public function setCatalogId($catalogId) {
		$this->catalogId = $catalogId;
		$this->apiParams["catalogId"] = $catalogId;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.catalogcommodity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->catalogId, 'catalogId');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "queryCatalogcommodity";
	}
	
}

?>