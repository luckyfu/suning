<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-16
 */
class BangrecycleorderCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $assessedPrice;
	
	/**
	 * 
	 */
	private $assessedTime;
	
	/**
	 * 
	 */
	private $brandName;
	
	/**
	 * 
	 */
	private $buName;
	
	/**
	 * 
	 */
	private $channel;
	
	/**
	 * 
	 */
	private $color;
	
	/**
	 * 
	 */
	private $createTime;
	
	/**
	 * 
	 */
	private $custCode;
	
	/**
	 * 
	 */
	private $custName;
	
	/**
	 * 
	 */
	private $custNickName;
	
	/**
	 * 
	 */
	private $custNo;
	
	/**
	 * 
	 */
	private $custPhone;
	
	/**
	 * 
	 */
	private $dealPrice;
	
	/**
	 * 
	 */
	private $image;
	
	/**
	 * 
	 */
	private $imei;
	
	/**
	 * 
	 */
	private $memberCode;
	
	/**
	 * 
	 */
	private $modelName;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderForm;
	
	/**
	 * 
	 */
	private $ram;
	
	/**
	 * 
	 */
	private $recycleType;
	
	/**
	 * 
	 */
	private $status;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAssessedPrice() {
		return $this->assessedPrice;
	}
	
	public function setAssessedPrice($assessedPrice) {
		$this->assessedPrice = $assessedPrice;
		$this->apiParams["assessedPrice"] = $assessedPrice;
	}
	
	public function getAssessedTime() {
		return $this->assessedTime;
	}
	
	public function setAssessedTime($assessedTime) {
		$this->assessedTime = $assessedTime;
		$this->apiParams["assessedTime"] = $assessedTime;
	}
	
	public function getBrandName() {
		return $this->brandName;
	}
	
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}
	
	public function getBuName() {
		return $this->buName;
	}
	
	public function setBuName($buName) {
		$this->buName = $buName;
		$this->apiParams["buName"] = $buName;
	}
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getColor() {
		return $this->color;
	}
	
	public function setColor($color) {
		$this->color = $color;
		$this->apiParams["color"] = $color;
	}
	
	public function getCreateTime() {
		return $this->createTime;
	}
	
	public function setCreateTime($createTime) {
		$this->createTime = $createTime;
		$this->apiParams["createTime"] = $createTime;
	}
	
	public function getCustCode() {
		return $this->custCode;
	}
	
	public function setCustCode($custCode) {
		$this->custCode = $custCode;
		$this->apiParams["custCode"] = $custCode;
	}
	
	public function getCustName() {
		return $this->custName;
	}
	
	public function setCustName($custName) {
		$this->custName = $custName;
		$this->apiParams["custName"] = $custName;
	}
	
	public function getCustNickName() {
		return $this->custNickName;
	}
	
	public function setCustNickName($custNickName) {
		$this->custNickName = $custNickName;
		$this->apiParams["custNickName"] = $custNickName;
	}
	
	public function getCustNo() {
		return $this->custNo;
	}
	
	public function setCustNo($custNo) {
		$this->custNo = $custNo;
		$this->apiParams["custNo"] = $custNo;
	}
	
	public function getCustPhone() {
		return $this->custPhone;
	}
	
	public function setCustPhone($custPhone) {
		$this->custPhone = $custPhone;
		$this->apiParams["custPhone"] = $custPhone;
	}
	
	public function getDealPrice() {
		return $this->dealPrice;
	}
	
	public function setDealPrice($dealPrice) {
		$this->dealPrice = $dealPrice;
		$this->apiParams["dealPrice"] = $dealPrice;
	}
	
	public function getImage() {
		return $this->image;
	}
	
	public function setImage($image) {
		$this->image = $image;
		$this->apiParams["image"] = $image;
	}
	
	public function getImei() {
		return $this->imei;
	}
	
	public function setImei($imei) {
		$this->imei = $imei;
		$this->apiParams["imei"] = $imei;
	}
	
	public function getMemberCode() {
		return $this->memberCode;
	}
	
	public function setMemberCode($memberCode) {
		$this->memberCode = $memberCode;
		$this->apiParams["memberCode"] = $memberCode;
	}
	
	public function getModelName() {
		return $this->modelName;
	}
	
	public function setModelName($modelName) {
		$this->modelName = $modelName;
		$this->apiParams["modelName"] = $modelName;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderForm() {
		return $this->orderForm;
	}
	
	public function setOrderForm($orderForm) {
		$this->orderForm = $orderForm;
		$this->apiParams["orderForm"] = $orderForm;
	}
	
	public function getRam() {
		return $this->ram;
	}
	
	public function setRam($ram) {
		$this->ram = $ram;
		$this->apiParams["ram"] = $ram;
	}
	
	public function getRecycleType() {
		return $this->recycleType;
	}
	
	public function setRecycleType($recycleType) {
		$this->recycleType = $recycleType;
		$this->apiParams["recycleType"] = $recycleType;
	}
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.bangrecycleorder.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createBangrecycleorder";
	}
	
}

?>