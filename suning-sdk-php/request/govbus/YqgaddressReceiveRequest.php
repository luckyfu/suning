<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-21
 */
class YqgaddressReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $addressMessage;
	
	/**
	 * 
	 */
	private $operatorNo;
	
	/**
	 * 
	 */
	private $sysCode;
	
	/**
	 * 
	 */
	private $type;
	
	/**
	 * 
	 */
	private $uid;
	
	public function getAddressMessage() {
		return $this->addressMessage;
	}
	
	public function setAddressMessage($addressMessage) {
		$this->addressMessage = $addressMessage;
		$arr = array();
		foreach ($addressMessage as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["addressMessage"] = $arr;
	}
	
	public function getOperatorNo() {
		return $this->operatorNo;
	}
	
	public function setOperatorNo($operatorNo) {
		$this->operatorNo = $operatorNo;
		$this->apiParams["operatorNo"] = $operatorNo;
	}
	
	public function getSysCode() {
		return $this->sysCode;
	}
	
	public function setSysCode($sysCode) {
		$this->sysCode = $sysCode;
		$this->apiParams["sysCode"] = $sysCode;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getUid() {
		return $this->uid;
	}
	
	public function setUid($uid) {
		$this->uid = $uid;
		$this->apiParams["uid"] = $uid;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.yqgaddress.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sysCode, 'sysCode');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "receiveYqgaddress";
	}
	
}

class AddressMessage {

	private $apiParams = array();
	
	private $address;
	
	private $addressId;
	
	private $cityId;
	
	private $cityName;
	
	private $countyId;
	
	private $countyName;
	
	private $mobile;
	
	private $provinceId;
	
	private $provinceName;
	
	private $receiver;
	
	private $telephone;
	
	private $townId;
	
	private $townName;
	
	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getAddressId() {
		return $this->addressId;
	}

	public function setAddressId($addressId) {
		$this->addressId = $addressId;
		$this->apiParams["addressId"] = $addressId;
	}
	
	public function getCityId() {
		return $this->cityId;
	}

	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getCityName() {
		return $this->cityName;
	}

	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getCountyId() {
		return $this->countyId;
	}

	public function setCountyId($countyId) {
		$this->countyId = $countyId;
		$this->apiParams["countyId"] = $countyId;
	}
	
	public function getCountyName() {
		return $this->countyName;
	}

	public function setCountyName($countyName) {
		$this->countyName = $countyName;
		$this->apiParams["countyName"] = $countyName;
	}
	
	public function getMobile() {
		return $this->mobile;
	}

	public function setMobile($mobile) {
		$this->mobile = $mobile;
		$this->apiParams["mobile"] = $mobile;
	}
	
	public function getProvinceId() {
		return $this->provinceId;
	}

	public function setProvinceId($provinceId) {
		$this->provinceId = $provinceId;
		$this->apiParams["provinceId"] = $provinceId;
	}
	
	public function getProvinceName() {
		return $this->provinceName;
	}

	public function setProvinceName($provinceName) {
		$this->provinceName = $provinceName;
		$this->apiParams["provinceName"] = $provinceName;
	}
	
	public function getReceiver() {
		return $this->receiver;
	}

	public function setReceiver($receiver) {
		$this->receiver = $receiver;
		$this->apiParams["receiver"] = $receiver;
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
	
	public function getTownName() {
		return $this->townName;
	}

	public function setTownName($townName) {
		$this->townName = $townName;
		$this->apiParams["townName"] = $townName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>