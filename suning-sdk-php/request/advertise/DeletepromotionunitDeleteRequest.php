<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class DeletepromotionunitDeleteRequest  extends SuningRequest{
	
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
	private $promotionUnitIds;
	
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
	
	public function getPromotionUnitIds() {
		return $this->promotionUnitIds;
	}
	
	public function setPromotionUnitIds($promotionUnitIds) {
		$this->promotionUnitIds = $promotionUnitIds;
		$this->apiParams["promotionUnitIds"] = $promotionUnitIds;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionunit.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionUnitIds, 'promotionUnitIds');
	}
	
	public function getBizName(){
		return "deleteDeletepromotionunit";
	}
	
}

?>