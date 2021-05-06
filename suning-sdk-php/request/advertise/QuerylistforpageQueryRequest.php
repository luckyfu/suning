<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-16
 */
class QuerylistforpageQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $pagerSize;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $promotionStatus;
	
	/**
	 * 
	 */
	private $promotionType;
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $unitStatus;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getPagerSize() {
		return $this->pagerSize;
	}
	
	public function setPagerSize($pagerSize) {
		$this->pagerSize = $pagerSize;
		$this->apiParams["pagerSize"] = $pagerSize;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getPromotionStatus() {
		return $this->promotionStatus;
	}
	
	public function setPromotionStatus($promotionStatus) {
		$this->promotionStatus = $promotionStatus;
		$this->apiParams["promotionStatus"] = $promotionStatus;
	}
	
	public function getPromotionType() {
		return $this->promotionType;
	}
	
	public function setPromotionType($promotionType) {
		$this->promotionType = $promotionType;
		$this->apiParams["promotionType"] = $promotionType;
	}
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getUnitStatus() {
		return $this->unitStatus;
	}
	
	public function setUnitStatus($unitStatus) {
		$this->unitStatus = $unitStatus;
		$this->apiParams["unitStatus"] = $unitStatus;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.querylistforpage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->pageNum, 'pageNum');
		RequestCheckUtil::checkNotNull($this->pagerSize, 'pagerSize');
		RequestCheckUtil::checkNotNull($this->promotionType, 'promotionType');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
	}
	
	public function getBizName(){
		return "queryQuerylistforpage";
	}
	
}

?>