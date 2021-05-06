<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-19
 */
class EnterpriseyfgprourlGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actCode;
	
	/**
	 * 
	 */
	private $proType;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $actType;
	
	public function getActCode() {
		return $this->actCode;
	}
	
	public function setActCode($actCode) {
		$this->actCode = $actCode;
		$this->apiParams["actCode"] = $actCode;
	}
	
	public function getProType() {
		return $this->proType;
	}
	
	public function setProType($proType) {
		$this->proType = $proType;
		$this->apiParams["proType"] = $proType;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getActType() {
		return $this->actType;
	}
	
	public function setActType($actType) {
		$this->actType = $actType;
		$this->apiParams["actType"] = $actType;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.enterpriseyfgprourl.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actCode, 'actCode');
		RequestCheckUtil::checkNotNull($this->proType, 'proType');
	}
	
	public function getBizName(){
		return "getEnterpriseyfgprourl";
	}
	
}

?>