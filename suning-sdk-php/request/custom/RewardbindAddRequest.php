<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-25
 */
class RewardbindAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $memCode;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $sourceNo;
	
	public function getMemCode() {
		return $this->memCode;
	}
	
	public function setMemCode($memCode) {
		$this->memCode = $memCode;
		$this->apiParams["memCode"] = $memCode;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getSourceNo() {
		return $this->sourceNo;
	}
	
	public function setSourceNo($sourceNo) {
		$this->sourceNo = $sourceNo;
		$this->apiParams["sourceNo"] = $sourceNo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.rewardbind.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sourceNo, 'sourceNo');
	}
	
	public function getBizName(){
		return "addRewardbind";
	}
	
}

?>