<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-24
 */
class SnfarmtotalcoinsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $uuid;
	
	/**
	 * 
	 */
	private $sign;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
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
	
	public function getApiMethodName(){
		return 'suning.custom.snfarmtotalcoins.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->uuid, 'uuid');
		RequestCheckUtil::checkNotNull($this->sign, 'sign');
	}
	
	public function getBizName(){
		return "querySnfarmtotalcoins";
	}
	
}

?>