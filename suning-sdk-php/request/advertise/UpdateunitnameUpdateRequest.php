<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UpdateunitnameUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	/**
	 * 
	 */
	private $promotionUnitName;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getPromotionUnitName() {
		return $this->promotionUnitName;
	}
	
	public function setPromotionUnitName($promotionUnitName) {
		$this->promotionUnitName = $promotionUnitName;
		$this->apiParams["promotionUnitName"] = $promotionUnitName;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.unitname.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
		RequestCheckUtil::checkNotNull($this->promotionUnitName, 'promotionUnitName');
	}
	
	public function getBizName(){
		return "updateUpdateunitname";
	}
	
}

?>