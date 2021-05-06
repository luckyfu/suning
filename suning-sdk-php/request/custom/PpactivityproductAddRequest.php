<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-20
 */
class PpactivityproductAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
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
	private $limitNum;
	
	/**
	 * 
	 */
	private $limitType;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $promotionPrice;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
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
	
	public function getLimitNum() {
		return $this->limitNum;
	}
	
	public function setLimitNum($limitNum) {
		$this->limitNum = $limitNum;
		$this->apiParams["limitNum"] = $limitNum;
	}
	
	public function getLimitType() {
		return $this->limitType;
	}
	
	public function setLimitType($limitType) {
		$this->limitType = $limitType;
		$this->apiParams["limitType"] = $limitType;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getPromotionPrice() {
		return $this->promotionPrice;
	}
	
	public function setPromotionPrice($promotionPrice) {
		$this->promotionPrice = $promotionPrice;
		$this->apiParams["promotionPrice"] = $promotionPrice;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ppactivityproduct.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "addPpactivityproduct";
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