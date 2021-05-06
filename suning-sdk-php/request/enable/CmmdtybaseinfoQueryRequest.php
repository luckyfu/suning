<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-15
 */
class CmmdtybaseinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commoditys;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getCommoditys() {
		return $this->commoditys;
	}
	
	public function setCommoditys($commoditys) {
		$this->commoditys = $commoditys;
		$arr = array();
		foreach ($commoditys as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commoditys"] = $arr;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.cmmdtybaseinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "queryCmmdtybaseinfo";
	}
	
}

class Commoditys {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $supplierCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>