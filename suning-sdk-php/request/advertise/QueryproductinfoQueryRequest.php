<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-19
 */
class QueryproductinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appliCode;
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $productNum;
	
	/**
	 * 
	 */
	private $promotionType;
	
	/**
	 * 
	 */
	private $supplierType;
	
	/**
	 * 
	 */
	private $userType;
	
	public function getAppliCode() {
		return $this->appliCode;
	}
	
	public function setAppliCode($appliCode) {
		$this->appliCode = $appliCode;
		$this->apiParams["appliCode"] = $appliCode;
	}
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getProductNum() {
		return $this->productNum;
	}
	
	public function setProductNum($productNum) {
		$this->productNum = $productNum;
		$this->apiParams["productNum"] = $productNum;
	}
	
	public function getPromotionType() {
		return $this->promotionType;
	}
	
	public function setPromotionType($promotionType) {
		$this->promotionType = $promotionType;
		$this->apiParams["promotionType"] = $promotionType;
	}
	
	public function getSupplierType() {
		return $this->supplierType;
	}
	
	public function setSupplierType($supplierType) {
		$this->supplierType = $supplierType;
		$this->apiParams["supplierType"] = $supplierType;
	}
	
	public function getUserType() {
		return $this->userType;
	}
	
	public function setUserType($userType) {
		$this->userType = $userType;
		$this->apiParams["userType"] = $userType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.queryproductinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appliCode, 'appliCode');
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->productNum, 'productNum');
		RequestCheckUtil::checkNotNull($this->userType, 'userType');
	}
	
	public function getBizName(){
		return "queryQueryproductinfo";
	}
	
}

?>