<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-27
 */
class HoistinglinkQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $adBookId;
	
	/**
	 * 
	 */
	private $backurl;
	
	/**
	 * 
	 */
	private $goodsCode;
	
	/**
	 * 
	 */
	private $mertCode;
	
	/**
	 * 
	 */
	private $subUser;
	
	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	public function getBackurl() {
		return $this->backurl;
	}
	
	public function setBackurl($backurl) {
		$this->backurl = $backurl;
		$this->apiParams["backurl"] = $backurl;
	}
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}
	
	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getMertCode() {
		return $this->mertCode;
	}
	
	public function setMertCode($mertCode) {
		$this->mertCode = $mertCode;
		$this->apiParams["mertCode"] = $mertCode;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.hoistinglink.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
		RequestCheckUtil::checkNotNull($this->goodsCode, 'goodsCode');
		RequestCheckUtil::checkNotNull($this->mertCode, 'mertCode');
	}
	
	public function getBizName(){
		return "queryHoistinglink";
	}
	
}

?>