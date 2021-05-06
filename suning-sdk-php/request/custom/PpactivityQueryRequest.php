<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class PpactivityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityType;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $statusValueList;
	
	/**
	 * 
	 */
	private $pageSizeNum;
	
	public function getActivityType() {
		return $this->activityType;
	}
	
	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getStatusValueList() {
		return $this->statusValueList;
	}
	
	public function setStatusValueList($statusValueList) {
		$this->statusValueList = $statusValueList;
		$arr = array();
		foreach ($statusValueList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["statusValueList"] = $arr;
	}
	
	public function getPageSizeNum() {
		return $this->pageSizeNum;
	}
	
	public function setPageSizeNum($pageSizeNum) {
		$this->pageSizeNum = $pageSizeNum;
		$this->apiParams["pageSizeNum"] = $pageSizeNum;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ppactivity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityType, 'activityType');
		RequestCheckUtil::checkNotNull($this->pageSizeNum, 'pageSizeNum');
	}
	
	public function getBizName(){
		return "queryPpactivity";
	}
	
}

class StatusValueList {

	private $apiParams = array();
	
	private $statusValue;
	
	public function getStatusValue() {
		return $this->statusValue;
	}

	public function setStatusValue($statusValue) {
		$this->statusValue = $statusValue;
		$this->apiParams["statusValue"] = $statusValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>