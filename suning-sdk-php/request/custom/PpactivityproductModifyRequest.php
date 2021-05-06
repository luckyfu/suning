<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class PpactivityproductModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityNum;
	
	/**
	 * 
	 */
	private $childProductList;
	
	/**
	 * 
	 */
	private $promotionPrice;
	
	/**
	 * 
	 */
	private $sopActivityId;
	
	public function getActivityNum() {
		return $this->activityNum;
	}
	
	public function setActivityNum($activityNum) {
		$this->activityNum = $activityNum;
		$this->apiParams["activityNum"] = $activityNum;
	}
	
	public function getChildProductList() {
		return $this->childProductList;
	}
	
	public function setChildProductList($childProductList) {
		$this->childProductList = $childProductList;
		$arr = array();
		foreach ($childProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childProductList"] = $arr;
	}
	
	public function getPromotionPrice() {
		return $this->promotionPrice;
	}
	
	public function setPromotionPrice($promotionPrice) {
		$this->promotionPrice = $promotionPrice;
		$this->apiParams["promotionPrice"] = $promotionPrice;
	}
	
	public function getSopActivityId() {
		return $this->sopActivityId;
	}
	
	public function setSopActivityId($sopActivityId) {
		$this->sopActivityId = $sopActivityId;
		$this->apiParams["sopActivityId"] = $sopActivityId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ppactivityproduct.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sopActivityId, 'sopActivityId');
	}
	
	public function getBizName(){
		return "modifyPpactivityproduct";
	}
	
}

class ChildProductList {

	private $apiParams = array();
	
	private $subProductCode;
	
	private $subPromotionPrice;
	
	public function getSubProductCode() {
		return $this->subProductCode;
	}

	public function setSubProductCode($subProductCode) {
		$this->subProductCode = $subProductCode;
		$this->apiParams["subProductCode"] = $subProductCode;
	}
	
	public function getSubPromotionPrice() {
		return $this->subPromotionPrice;
	}

	public function setSubPromotionPrice($subPromotionPrice) {
		$this->subPromotionPrice = $subPromotionPrice;
		$this->apiParams["subPromotionPrice"] = $subPromotionPrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>