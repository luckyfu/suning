<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-15
 */
class CreatestationCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accessChannels;
	
	/**
	 * 
	 */
	private $accessSource;
	
	/**
	 * 
	 */
	private $channelCoding;
	
	/**
	 * 
	 */
	private $distributor;
	
	/**
	 * 
	 */
	private $keyCustomerCode;
	
	/**
	 * 
	 */
	private $operationType;
	
	/**
	 * 
	 */
	private $platformId;
	
	/**
	 * 
	 */
	private $platformName;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $snAccount;
	
	/**
	 * 
	 */
	private $status;
	
	/**
	 * 
	 */
	private $yhShopId;
	
	/**
	 * 
	 */
	private $yhShopName;
	
	/**
	 * 
	 */
	private $yhxbAccount;
	
	public function getAccessChannels() {
		return $this->accessChannels;
	}
	
	public function setAccessChannels($accessChannels) {
		$this->accessChannels = $accessChannels;
		$this->apiParams["accessChannels"] = $accessChannels;
	}
	
	public function getAccessSource() {
		return $this->accessSource;
	}
	
	public function setAccessSource($accessSource) {
		$this->accessSource = $accessSource;
		$this->apiParams["accessSource"] = $accessSource;
	}
	
	public function getChannelCoding() {
		return $this->channelCoding;
	}
	
	public function setChannelCoding($channelCoding) {
		$this->channelCoding = $channelCoding;
		$this->apiParams["channelCoding"] = $channelCoding;
	}
	
	public function getDistributor() {
		return $this->distributor;
	}
	
	public function setDistributor($distributor) {
		$this->distributor = $distributor;
		$this->apiParams["distributor"] = $distributor;
	}
	
	public function getKeyCustomerCode() {
		return $this->keyCustomerCode;
	}
	
	public function setKeyCustomerCode($keyCustomerCode) {
		$this->keyCustomerCode = $keyCustomerCode;
		$this->apiParams["keyCustomerCode"] = $keyCustomerCode;
	}
	
	public function getOperationType() {
		return $this->operationType;
	}
	
	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->apiParams["operationType"] = $operationType;
	}
	
	public function getPlatformId() {
		return $this->platformId;
	}
	
	public function setPlatformId($platformId) {
		$this->platformId = $platformId;
		$this->apiParams["platformId"] = $platformId;
	}
	
	public function getPlatformName() {
		return $this->platformName;
	}
	
	public function setPlatformName($platformName) {
		$this->platformName = $platformName;
		$this->apiParams["platformName"] = $platformName;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getSnAccount() {
		return $this->snAccount;
	}
	
	public function setSnAccount($snAccount) {
		$this->snAccount = $snAccount;
		$this->apiParams["snAccount"] = $snAccount;
	}
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getYhShopId() {
		return $this->yhShopId;
	}
	
	public function setYhShopId($yhShopId) {
		$this->yhShopId = $yhShopId;
		$this->apiParams["yhShopId"] = $yhShopId;
	}
	
	public function getYhShopName() {
		return $this->yhShopName;
	}
	
	public function setYhShopName($yhShopName) {
		$this->yhShopName = $yhShopName;
		$this->apiParams["yhShopName"] = $yhShopName;
	}
	
	public function getYhxbAccount() {
		return $this->yhxbAccount;
	}
	
	public function setYhxbAccount($yhxbAccount) {
		$this->yhxbAccount = $yhxbAccount;
		$this->apiParams["yhxbAccount"] = $yhxbAccount;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.createstation.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operationType, 'operationType');
	}
	
	public function getBizName(){
		return "createCreatestation";
	}
	
}

?>