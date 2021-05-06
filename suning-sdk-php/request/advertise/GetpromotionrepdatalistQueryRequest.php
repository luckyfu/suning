<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class GetpromotionrepdatalistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $dayType;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $orderBy;
	
	/**
	 * 
	 */
	private $pagerNumber;
	
	/**
	 * 
	 */
	private $pagerSize;
	
	/**
	 * 
	 */
	private $productType;
	
	/**
	 * 
	 */
	private $promotionName;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $throwType;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getDayType() {
		return $this->dayType;
	}
	
	public function setDayType($dayType) {
		$this->dayType = $dayType;
		$this->apiParams["dayType"] = $dayType;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getOrderBy() {
		return $this->orderBy;
	}
	
	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->apiParams["orderBy"] = $orderBy;
	}
	
	public function getPagerNumber() {
		return $this->pagerNumber;
	}
	
	public function setPagerNumber($pagerNumber) {
		$this->pagerNumber = $pagerNumber;
		$this->apiParams["pagerNumber"] = $pagerNumber;
	}
	
	public function getPagerSize() {
		return $this->pagerSize;
	}
	
	public function setPagerSize($pagerSize) {
		$this->pagerSize = $pagerSize;
		$this->apiParams["pagerSize"] = $pagerSize;
	}
	
	public function getProductType() {
		return $this->productType;
	}
	
	public function setProductType($productType) {
		$this->productType = $productType;
		$this->apiParams["productType"] = $productType;
	}
	
	public function getPromotionName() {
		return $this->promotionName;
	}
	
	public function setPromotionName($promotionName) {
		$this->promotionName = $promotionName;
		$this->apiParams["promotionName"] = $promotionName;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getThrowType() {
		return $this->throwType;
	}
	
	public function setThrowType($throwType) {
		$this->throwType = $throwType;
		$this->apiParams["throwType"] = $throwType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.getpromotionrepdatalist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->pagerNumber, 'pagerNumber');
		RequestCheckUtil::checkNotNull($this->pagerSize, 'pagerSize');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
	}
	
	public function getBizName(){
		return "queryGetpromotionrepdatalist";
	}
	
}

?>