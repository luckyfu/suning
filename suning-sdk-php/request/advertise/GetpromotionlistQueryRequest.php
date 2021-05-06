<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-21
 */
class GetpromotionlistQueryRequest  extends SuningRequest{
	
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
	private $promotionType;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $status;
	
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
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.getpromotionlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->promotionType, 'promotionType');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->status, 'status');
	}
	
	public function getBizName(){
		return "queryGetpromotionlist";
	}
	
}

?>