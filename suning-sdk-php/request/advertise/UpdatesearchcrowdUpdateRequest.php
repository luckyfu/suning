<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UpdatesearchcrowdUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	/**
	 * 
	 */
	private $searchCrowd;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getSearchCrowd() {
		return $this->searchCrowd;
	}
	
	public function setSearchCrowd($searchCrowd) {
		$this->searchCrowd = $searchCrowd;
		$this->apiParams["searchCrowd"] = $searchCrowd;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.searchcrowd.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
		RequestCheckUtil::checkNotNull($this->searchCrowd, 'searchCrowd');
	}
	
	public function getBizName(){
		return "updateUpdatesearchcrowd";
	}
	
}

?>