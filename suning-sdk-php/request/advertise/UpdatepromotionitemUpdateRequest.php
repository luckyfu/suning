<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UpdatepromotionitemUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $itemValue;
	
	/**
	 * 
	 */
	private $promotionId;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getItemValue() {
		return $this->itemValue;
	}
	
	public function setItemValue($itemValue) {
		$this->itemValue = $itemValue;
		$this->apiParams["itemValue"] = $itemValue;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionitem.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->itemCode, 'itemCode');
		RequestCheckUtil::checkNotNull($this->itemValue, 'itemValue');
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
	}
	
	public function getBizName(){
		return "updateUpdatepromotionitem";
	}
	
}

?>