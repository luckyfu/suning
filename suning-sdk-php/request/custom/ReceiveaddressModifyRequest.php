<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-12
 */
class ReceiveaddressModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityName;
	
	/**
	 * 
	 */
	private $customerName;
	
	/**
	 * 
	 */
	private $detailAddress;
	
	/**
	 * 
	 */
	private $districtName;
	
	/**
	 * 
	 */
	private $mobphoneNum;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $phoneNum;
	
	/**
	 * 
	 */
	private $provinceName;
	
	/**
	 * 
	 */
	private $townName;
	
	public function getCityName() {
		return $this->cityName;
	}
	
	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getCustomerName() {
		return $this->customerName;
	}
	
	public function setCustomerName($customerName) {
		$this->customerName = $customerName;
		$this->apiParams["customerName"] = $customerName;
	}
	
	public function getDetailAddress() {
		return $this->detailAddress;
	}
	
	public function setDetailAddress($detailAddress) {
		$this->detailAddress = $detailAddress;
		$this->apiParams["detailAddress"] = $detailAddress;
	}
	
	public function getDistrictName() {
		return $this->districtName;
	}
	
	public function setDistrictName($districtName) {
		$this->districtName = $districtName;
		$this->apiParams["districtName"] = $districtName;
	}
	
	public function getMobphoneNum() {
		return $this->mobphoneNum;
	}
	
	public function setMobphoneNum($mobphoneNum) {
		$this->mobphoneNum = $mobphoneNum;
		$this->apiParams["mobphoneNum"] = $mobphoneNum;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getProvinceName() {
		return $this->provinceName;
	}
	
	public function setProvinceName($provinceName) {
		$this->provinceName = $provinceName;
		$this->apiParams["provinceName"] = $provinceName;
	}
	
	public function getTownName() {
		return $this->townName;
	}
	
	public function setTownName($townName) {
		$this->townName = $townName;
		$this->apiParams["townName"] = $townName;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.receiveaddress.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityName, 'cityName');
		RequestCheckUtil::checkNotNull($this->customerName, 'customerName');
		RequestCheckUtil::checkNotNull($this->detailAddress, 'detailAddress');
		RequestCheckUtil::checkNotNull($this->districtName, 'districtName');
		RequestCheckUtil::checkNotNull($this->mobphoneNum, 'mobphoneNum');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->provinceName, 'provinceName');
		RequestCheckUtil::checkNotNull($this->townName, 'townName');
	}
	
	public function getBizName(){
		return "modifyReceiveaddress";
	}
	
}

?>