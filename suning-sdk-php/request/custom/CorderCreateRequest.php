<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-2
 */
class CorderCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyBand;
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $cmmdtyCtgry;
	
	/**
	 * 
	 */
	private $cmmdtyKind;
	
	/**
	 * 
	 */
	private $cmmdtyName;
	
	/**
	 * 
	 */
	private $dealType;
	
	/**
	 * 
	 */
	private $dealTypeFlag;
	
	/**
	 * 
	 */
	private $estimateOutTime;
	
	/**
	 * 
	 */
	private $hopeArrivalTime;
	
	/**
	 * 
	 */
	private $outOrderNo;
	
	/**
	 * 
	 */
	private $realPayAmt;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getCmmdtyBand() {
		return $this->cmmdtyBand;
	}
	
	public function setCmmdtyBand($cmmdtyBand) {
		$this->cmmdtyBand = $cmmdtyBand;
		$this->apiParams["cmmdtyBand"] = $cmmdtyBand;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCmmdtyCtgry() {
		return $this->cmmdtyCtgry;
	}
	
	public function setCmmdtyCtgry($cmmdtyCtgry) {
		$this->cmmdtyCtgry = $cmmdtyCtgry;
		$this->apiParams["cmmdtyCtgry"] = $cmmdtyCtgry;
	}
	
	public function getCmmdtyKind() {
		return $this->cmmdtyKind;
	}
	
	public function setCmmdtyKind($cmmdtyKind) {
		$this->cmmdtyKind = $cmmdtyKind;
		$this->apiParams["cmmdtyKind"] = $cmmdtyKind;
	}
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}
	
	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
	}
	
	public function getDealType() {
		return $this->dealType;
	}
	
	public function setDealType($dealType) {
		$this->dealType = $dealType;
		$this->apiParams["dealType"] = $dealType;
	}
	
	public function getDealTypeFlag() {
		return $this->dealTypeFlag;
	}
	
	public function setDealTypeFlag($dealTypeFlag) {
		$this->dealTypeFlag = $dealTypeFlag;
		$this->apiParams["dealTypeFlag"] = $dealTypeFlag;
	}
	
	public function getEstimateOutTime() {
		return $this->estimateOutTime;
	}
	
	public function setEstimateOutTime($estimateOutTime) {
		$this->estimateOutTime = $estimateOutTime;
		$this->apiParams["estimateOutTime"] = $estimateOutTime;
	}
	
	public function getHopeArrivalTime() {
		return $this->hopeArrivalTime;
	}
	
	public function setHopeArrivalTime($hopeArrivalTime) {
		$this->hopeArrivalTime = $hopeArrivalTime;
		$this->apiParams["hopeArrivalTime"] = $hopeArrivalTime;
	}
	
	public function getOutOrderNo() {
		return $this->outOrderNo;
	}
	
	public function setOutOrderNo($outOrderNo) {
		$this->outOrderNo = $outOrderNo;
		$this->apiParams["outOrderNo"] = $outOrderNo;
	}
	
	public function getRealPayAmt() {
		return $this->realPayAmt;
	}
	
	public function setRealPayAmt($realPayAmt) {
		$this->realPayAmt = $realPayAmt;
		$this->apiParams["realPayAmt"] = $realPayAmt;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.corder.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyBand, 'cmmdtyBand');
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->cmmdtyCtgry, 'cmmdtyCtgry');
		RequestCheckUtil::checkNotNull($this->cmmdtyKind, 'cmmdtyKind');
		RequestCheckUtil::checkNotNull($this->cmmdtyName, 'cmmdtyName');
		RequestCheckUtil::checkNotNull($this->dealType, 'dealType');
		RequestCheckUtil::checkNotNull($this->dealTypeFlag, 'dealTypeFlag');
		RequestCheckUtil::checkNotNull($this->estimateOutTime, 'estimateOutTime');
		RequestCheckUtil::checkNotNull($this->hopeArrivalTime, 'hopeArrivalTime');
		RequestCheckUtil::checkNotNull($this->outOrderNo, 'outOrderNo');
		RequestCheckUtil::checkNotNull($this->realPayAmt, 'realPayAmt');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "createCorder";
	}
	
}

?>