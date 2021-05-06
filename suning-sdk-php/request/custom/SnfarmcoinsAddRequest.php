<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-24
 */
class SnfarmcoinsAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $uuid;
	
	/**
	 * 
	 */
	private $sign;
	
	/**
	 * 
	 */
	private $rewardNum;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $serialNo;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getUuid() {
		return $this->uuid;
	}
	
	public function setUuid($uuid) {
		$this->uuid = $uuid;
		$this->apiParams["uuid"] = $uuid;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getRewardNum() {
		return $this->rewardNum;
	}
	
	public function setRewardNum($rewardNum) {
		$this->rewardNum = $rewardNum;
		$this->apiParams["rewardNum"] = $rewardNum;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getSerialNo() {
		return $this->serialNo;
	}
	
	public function setSerialNo($serialNo) {
		$this->serialNo = $serialNo;
		$this->apiParams["serialNo"] = $serialNo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.snfarmcoins.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->uuid, 'uuid');
		RequestCheckUtil::checkNotNull($this->sign, 'sign');
		RequestCheckUtil::checkNotNull($this->rewardNum, 'rewardNum');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->serialNo, 'serialNo');
	}
	
	public function getBizName(){
		return "addSnfarmcoins";
	}
	
}

?>