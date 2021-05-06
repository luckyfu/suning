<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class PointaccountbalanceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $branch;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $ecoType;
	
	/**
	 * 
	 */
	private $store;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getBranch() {
		return $this->branch;
	}
	
	public function setBranch($branch) {
		$this->branch = $branch;
		$this->apiParams["branch"] = $branch;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getEcoType() {
		return $this->ecoType;
	}
	
	public function setEcoType($ecoType) {
		$this->ecoType = $ecoType;
		$this->apiParams["ecoType"] = $ecoType;
	}
	
	public function getStore() {
		return $this->store;
	}
	
	public function setStore($store) {
		$this->store = $store;
		$this->apiParams["store"] = $store;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.pointaccountbalance.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->branch, 'branch');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->ecoType, 'ecoType');
	}
	
	public function getBizName(){
		return "queryPointaccountbalance";
	}
	
}

?>