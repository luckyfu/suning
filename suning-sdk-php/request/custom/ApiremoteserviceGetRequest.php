<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-9
 */
class ApiremoteserviceGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $brandName;
	
	/**
	 * 
	 */
	private $catId;
	
	/**
	 * 
	 */
	private $catName;
	
	/**
	 * 
	 */
	private $commerceId;
	
	/**
	 * 
	 */
	private $productId;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $type;
	
	public function getBrandName() {
		return $this->brandName;
	}
	
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}
	
	public function getCatId() {
		return $this->catId;
	}
	
	public function setCatId($catId) {
		$this->catId = $catId;
		$this->apiParams["catId"] = $catId;
	}
	
	public function getCatName() {
		return $this->catName;
	}
	
	public function setCatName($catName) {
		$this->catName = $catName;
		$this->apiParams["catName"] = $catName;
	}
	
	public function getCommerceId() {
		return $this->commerceId;
	}
	
	public function setCommerceId($commerceId) {
		$this->commerceId = $commerceId;
		$this->apiParams["commerceId"] = $commerceId;
	}
	
	public function getProductId() {
		return $this->productId;
	}
	
	public function setProductId($productId) {
		$this->productId = $productId;
		$this->apiParams["productId"] = $productId;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.apiremoteservice.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandName, 'brandName');
		RequestCheckUtil::checkNotNull($this->catId, 'catId');
		RequestCheckUtil::checkNotNull($this->commerceId, 'commerceId');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "getApiremoteservice";
	}
	
}

?>