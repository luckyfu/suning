<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UnitlistQueryRequest  extends SuningRequest{
	
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
	private $goodsCode;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $orderBy;
	
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
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}
	
	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getOrderBy() {
		return $this->orderBy;
	}
	
	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->apiParams["orderBy"] = $orderBy;
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
		return 'suning.advertise.unitlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->promotionStatus, 'promotionStatus');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->unitStatus, 'unitStatus');
	}
	
	public function getBizName(){
		return "queryUnitlist";
	}
	
}

?>