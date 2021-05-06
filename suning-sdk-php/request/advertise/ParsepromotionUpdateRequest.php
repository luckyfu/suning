<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-19
 */
class ParsepromotionUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $promotionIds;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getPromotionIds() {
		return $this->promotionIds;
	}
	
	public function setPromotionIds($promotionIds) {
		$this->promotionIds = $promotionIds;
		$this->apiParams["promotionIds"] = $promotionIds;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.pausepromotion.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionIds, 'promotionIds');
	}
	
	public function getBizName(){
		return "updateParsepromotion";
	}
	
}

?>