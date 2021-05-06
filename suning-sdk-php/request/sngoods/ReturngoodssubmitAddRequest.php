<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-23
 */
class ReturngoodssubmitAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $detailAddress;
	
	/**
	 * 
	 */
	private $districtId;
	
	/**
	 * 
	 */
	private $logisticsCode;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $quantity;
	
	/**
	 * 
	 */
	private $reasonCode;
	
	/**
	 * 
	 */
	private $returnAmount;
	
	/**
	 * 
	 */
	private $srvStatus;
	
	/**
	 * 
	 */
	private $telephone;
	
	/**
	 * 
	 */
	private $townId;
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getDetailAddress() {
		return $this->detailAddress;
	}
	
	public function setDetailAddress($detailAddress) {
		$this->detailAddress = $detailAddress;
		$this->apiParams["detailAddress"] = $detailAddress;
	}
	
	public function getDistrictId() {
		return $this->districtId;
	}
	
	public function setDistrictId($districtId) {
		$this->districtId = $districtId;
		$this->apiParams["districtId"] = $districtId;
	}
	
	public function getLogisticsCode() {
		return $this->logisticsCode;
	}
	
	public function setLogisticsCode($logisticsCode) {
		$this->logisticsCode = $logisticsCode;
		$this->apiParams["logisticsCode"] = $logisticsCode;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}
	
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParams["quantity"] = $quantity;
	}
	
	public function getReasonCode() {
		return $this->reasonCode;
	}
	
	public function setReasonCode($reasonCode) {
		$this->reasonCode = $reasonCode;
		$this->apiParams["reasonCode"] = $reasonCode;
	}
	
	public function getReturnAmount() {
		return $this->returnAmount;
	}
	
	public function setReturnAmount($returnAmount) {
		$this->returnAmount = $returnAmount;
		$this->apiParams["returnAmount"] = $returnAmount;
	}
	
	public function getSrvStatus() {
		return $this->srvStatus;
	}
	
	public function setSrvStatus($srvStatus) {
		$this->srvStatus = $srvStatus;
		$this->apiParams["srvStatus"] = $srvStatus;
	}
	
	public function getTelephone() {
		return $this->telephone;
	}
	
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		$this->apiParams["telephone"] = $telephone;
	}
	
	public function getTownId() {
		return $this->townId;
	}
	
	public function setTownId($townId) {
		$this->townId = $townId;
		$this->apiParams["townId"] = $townId;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.returngoodssubmit.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->detailAddress, 'detailAddress');
		RequestCheckUtil::checkNotNull($this->districtId, 'districtId');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->reasonCode, 'reasonCode');
		RequestCheckUtil::checkNotNull($this->srvStatus, 'srvStatus');
		RequestCheckUtil::checkNotNull($this->telephone, 'telephone');
		RequestCheckUtil::checkNotNull($this->townId, 'townId');
	}
	
	public function getBizName(){
		return "addReturngoodssubmit";
	}
	
}

?>