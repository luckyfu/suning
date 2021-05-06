<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class GetpromotionrephourbypageQueryRequest  extends SuningRequest{
	
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
	private $promotionDate;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $promotionName;
	
	/**
	 * 
	 */
	private $reportType;
	
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
	
	public function getPromotionDate() {
		return $this->promotionDate;
	}
	
	public function setPromotionDate($promotionDate) {
		$this->promotionDate = $promotionDate;
		$this->apiParams["promotionDate"] = $promotionDate;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getPromotionName() {
		return $this->promotionName;
	}
	
	public function setPromotionName($promotionName) {
		$this->promotionName = $promotionName;
		$this->apiParams["promotionName"] = $promotionName;
	}
	
	public function getReportType() {
		return $this->reportType;
	}
	
	public function setReportType($reportType) {
		$this->reportType = $reportType;
		$this->apiParams["reportType"] = $reportType;
	}
	
	public function getThrowType() {
		return $this->throwType;
	}
	
	public function setThrowType($throwType) {
		$this->throwType = $throwType;
		$this->apiParams["throwType"] = $throwType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.getpromotionrephourbypage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->dayType, 'dayType');
		RequestCheckUtil::checkNotNull($this->pagerNumber, 'pagerNumber');
		RequestCheckUtil::checkNotNull($this->pagerSize, 'pagerSize');
		RequestCheckUtil::checkNotNull($this->promotionDate, 'promotionDate');
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
		RequestCheckUtil::checkNotNull($this->reportType, 'reportType');
	}
	
	public function getBizName(){
		return "queryGetpromotionrephourbypage";
	}
	
}

?>