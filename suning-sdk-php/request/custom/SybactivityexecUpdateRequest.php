<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-5
 */
class SybactivityexecUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $giveAmount;
	
	/**
	 * 
	 */
	private $mixCustNum;
	
	/**
	 * 
	 */
	private $rewardLevel;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getGiveAmount() {
		return $this->giveAmount;
	}
	
	public function setGiveAmount($giveAmount) {
		$this->giveAmount = $giveAmount;
		$this->apiParams["giveAmount"] = $giveAmount;
	}
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getRewardLevel() {
		return $this->rewardLevel;
	}
	
	public function setRewardLevel($rewardLevel) {
		$this->rewardLevel = $rewardLevel;
		$this->apiParams["rewardLevel"] = $rewardLevel;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.sybactivityexec.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
	}
	
	public function getBizName(){
		return "updateSybactivityexec";
	}
	
}

?>