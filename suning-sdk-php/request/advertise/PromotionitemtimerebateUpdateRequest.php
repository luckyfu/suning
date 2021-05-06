<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class PromotionitemtimerebateUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $throwRebateCode;
	
	/**
	 * 
	 */
	private $throwRebateValue;
	
	/**
	 * 
	 */
	private $throwTimeCode;
	
	/**
	 * 
	 */
	private $throwTimeValue;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getThrowRebateCode() {
		return $this->throwRebateCode;
	}
	
	public function setThrowRebateCode($throwRebateCode) {
		$this->throwRebateCode = $throwRebateCode;
		$this->apiParams["throwRebateCode"] = $throwRebateCode;
	}
	
	public function getThrowRebateValue() {
		return $this->throwRebateValue;
	}
	
	public function setThrowRebateValue($throwRebateValue) {
		$this->throwRebateValue = $throwRebateValue;
		$this->apiParams["throwRebateValue"] = $throwRebateValue;
	}
	
	public function getThrowTimeCode() {
		return $this->throwTimeCode;
	}
	
	public function setThrowTimeCode($throwTimeCode) {
		$this->throwTimeCode = $throwTimeCode;
		$this->apiParams["throwTimeCode"] = $throwTimeCode;
	}
	
	public function getThrowTimeValue() {
		return $this->throwTimeValue;
	}
	
	public function setThrowTimeValue($throwTimeValue) {
		$this->throwTimeValue = $throwTimeValue;
		$this->apiParams["throwTimeValue"] = $throwTimeValue;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionitemtimerebate.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
		RequestCheckUtil::checkNotNull($this->throwRebateCode, 'throwRebateCode');
		RequestCheckUtil::checkNotNull($this->throwRebateValue, 'throwRebateValue');
		RequestCheckUtil::checkNotNull($this->throwTimeCode, 'throwTimeCode');
		RequestCheckUtil::checkNotNull($this->throwTimeValue, 'throwTimeValue');
	}
	
	public function getBizName(){
		return "updatePromotionitemtimerebate";
	}
	
}

?>