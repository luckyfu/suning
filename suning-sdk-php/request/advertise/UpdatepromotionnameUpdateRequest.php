<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UpdatepromotionnameUpdateRequest  extends SuningRequest{
	
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
	private $promotionName;
	
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
	
	public function getPromotionName() {
		return $this->promotionName;
	}
	
	public function setPromotionName($promotionName) {
		$this->promotionName = $promotionName;
		$this->apiParams["promotionName"] = $promotionName;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionname.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
		RequestCheckUtil::checkNotNull($this->promotionName, 'promotionName');
	}
	
	public function getBizName(){
		return "updateUpdatepromotionname";
	}
	
}

?>