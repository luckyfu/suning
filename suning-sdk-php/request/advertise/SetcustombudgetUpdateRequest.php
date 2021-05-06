<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class SetcustombudgetUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $promotionCustomBudgetDto;
	
	/**
	 * 
	 */
	private $promotionId;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getPromotionCustomBudgetDto() {
		return $this->promotionCustomBudgetDto;
	}
	
	public function setPromotionCustomBudgetDto($promotionCustomBudgetDto) {
		$this->promotionCustomBudgetDto = $promotionCustomBudgetDto;
		$this->apiParams["promotionCustomBudgetDto"] = $promotionCustomBudgetDto->getApiParams();
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.custombudget.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
	}
	
	public function getBizName(){
		return "updateSetcustombudget";
	}
	
}

class PromotionCustomBudgetDto {

	private $apiParams = array();
	
	private $customData;
	
	private $defaultUserLimitAmount;
	
	public function getCustomData() {
		return $this->customData;
	}

	public function setCustomData($customData) {
		$this->customData = $customData;
		$arr = array();
		foreach ($customData as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["customData"] = $arr;
	}
	
	public function getDefaultUserLimitAmount() {
		return $this->defaultUserLimitAmount;
	}

	public function setDefaultUserLimitAmount($defaultUserLimitAmount) {
		$this->defaultUserLimitAmount = $defaultUserLimitAmount;
		$this->apiParams["defaultUserLimitAmount"] = $defaultUserLimitAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CustomData {

	private $apiParams = array();
	
	private $date;
	
	private $userLimitAmount;
	
	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date = $date;
		$this->apiParams["date"] = $date;
	}
	
	public function getUserLimitAmount() {
		return $this->userLimitAmount;
	}

	public function setUserLimitAmount($userLimitAmount) {
		$this->userLimitAmount = $userLimitAmount;
		$this->apiParams["userLimitAmount"] = $userLimitAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>