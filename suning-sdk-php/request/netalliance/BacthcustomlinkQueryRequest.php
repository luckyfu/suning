<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-21
 */
class BacthcustomlinkQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $extend;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $pid;
	
	public function getExtend() {
		return $this->extend;
	}
	
	public function setExtend($extend) {
		$this->extend = $extend;
		$this->apiParams["extend"] = $extend;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
		$this->apiParams["pid"] = $pid;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.bacthcustomlink.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->extend, 'extend');
	}
	
	public function getBizName(){
		return "queryBacthcustomlink";
	}
	
}

?>