<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-8
 */
class BusinessnewbuyerQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $pageId;
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getPageId() {
		return $this->pageId;
	}
	
	public function setPageId($pageId) {
		$this->pageId = $pageId;
		$this->apiParams["pageId"] = $pageId;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.businessnewbuyer.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryBusinessnewbuyer";
	}
	
}

?>