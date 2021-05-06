<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-25
 */
class SpotcheckReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $contacts;
	
	/**
	 * 
	 */
	private $gdsUrl;
	
	/**
	 * 
	 */
	private $nonconformingItems;
	
	/**
	 * 
	 */
	private $omsOrderId;
	
	/**
	 * 
	 */
	private $operatingType;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $qualifiedFlag;
	
	/**
	 * 
	 */
	private $reportUrl;
	
	/**
	 * 
	 */
	private $samplingType;
	
	/**
	 * 
	 */
	private $sponsor;
	
	/**
	 * 
	 */
	private $testingInstitution;
	
	/**
	 * 
	 */
	private $updateTime;
	
	public function getContacts() {
		return $this->contacts;
	}
	
	public function setContacts($contacts) {
		$this->contacts = $contacts;
		$this->apiParams["contacts"] = $contacts;
	}
	
	public function getGdsUrl() {
		return $this->gdsUrl;
	}
	
	public function setGdsUrl($gdsUrl) {
		$this->gdsUrl = $gdsUrl;
		$this->apiParams["gdsUrl"] = $gdsUrl;
	}
	
	public function getNonconformingItems() {
		return $this->nonconformingItems;
	}
	
	public function setNonconformingItems($nonconformingItems) {
		$this->nonconformingItems = $nonconformingItems;
		$this->apiParams["nonconformingItems"] = $nonconformingItems;
	}
	
	public function getOmsOrderId() {
		return $this->omsOrderId;
	}
	
	public function setOmsOrderId($omsOrderId) {
		$this->omsOrderId = $omsOrderId;
		$this->apiParams["omsOrderId"] = $omsOrderId;
	}
	
	public function getOperatingType() {
		return $this->operatingType;
	}
	
	public function setOperatingType($operatingType) {
		$this->operatingType = $operatingType;
		$this->apiParams["operatingType"] = $operatingType;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getQualifiedFlag() {
		return $this->qualifiedFlag;
	}
	
	public function setQualifiedFlag($qualifiedFlag) {
		$this->qualifiedFlag = $qualifiedFlag;
		$this->apiParams["qualifiedFlag"] = $qualifiedFlag;
	}
	
	public function getReportUrl() {
		return $this->reportUrl;
	}
	
	public function setReportUrl($reportUrl) {
		$this->reportUrl = $reportUrl;
		$this->apiParams["reportUrl"] = $reportUrl;
	}
	
	public function getSamplingType() {
		return $this->samplingType;
	}
	
	public function setSamplingType($samplingType) {
		$this->samplingType = $samplingType;
		$this->apiParams["samplingType"] = $samplingType;
	}
	
	public function getSponsor() {
		return $this->sponsor;
	}
	
	public function setSponsor($sponsor) {
		$this->sponsor = $sponsor;
		$this->apiParams["sponsor"] = $sponsor;
	}
	
	public function getTestingInstitution() {
		return $this->testingInstitution;
	}
	
	public function setTestingInstitution($testingInstitution) {
		$this->testingInstitution = $testingInstitution;
		$this->apiParams["testingInstitution"] = $testingInstitution;
	}
	
	public function getUpdateTime() {
		return $this->updateTime;
	}
	
	public function setUpdateTime($updateTime) {
		$this->updateTime = $updateTime;
		$this->apiParams["updateTime"] = $updateTime;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.spotcheck.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->contacts, 'contacts');
		RequestCheckUtil::checkNotNull($this->gdsUrl, 'gdsUrl');
		RequestCheckUtil::checkNotNull($this->omsOrderId, 'omsOrderId');
		RequestCheckUtil::checkNotNull($this->operatingType, 'operatingType');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->samplingType, 'samplingType');
		RequestCheckUtil::checkNotNull($this->sponsor, 'sponsor');
		RequestCheckUtil::checkNotNull($this->testingInstitution, 'testingInstitution');
	}
	
	public function getBizName(){
		return "receiveSpotcheck";
	}
	
}

?>