<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-22
 */
class EdaostageQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $gdsCd;
	
	
	
	/**
	 * 
	 */
	private $statisDate;
	
	/**
	 * 
	 */
	private $vendorCd;
	
	/**
	 * 
	 */
	private $vendorGds;
	
	public function getGdsCd() {
		return $this->gdsCd;
	}
	
	public function setGdsCd($gdsCd) {
		$this->gdsCd = $gdsCd;
		$this->apiParams["gdsCd"] = $gdsCd;
	}
	
	
	
	public function getStatisDate() {
		return $this->statisDate;
	}
	
	public function setStatisDate($statisDate) {
		$this->statisDate = $statisDate;
		$this->apiParams["statisDate"] = $statisDate;
	}
	
	public function getVendorCd() {
		return $this->vendorCd;
	}
	
	public function setVendorCd($vendorCd) {
		$this->vendorCd = $vendorCd;
		$this->apiParams["vendorCd"] = $vendorCd;
	}
	
	public function getVendorGds() {
		return $this->vendorGds;
	}
	
	public function setVendorGds($vendorGds) {
		$this->vendorGds = $vendorGds;
		$this->apiParams["vendorGds"] = $vendorGds;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.edaostage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->statisDate, 'statisDate');
		RequestCheckUtil::checkNotNull($this->vendorCd, 'vendorCd');
	}
	
	public function getBizName(){
		return "queryEdaostage";
	}
	
}

?>