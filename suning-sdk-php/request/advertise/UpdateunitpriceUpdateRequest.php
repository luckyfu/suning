<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-16
 */
class UpdateunitpriceUpdateRequest  extends SuningRequest{
	
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
	private $recommondPrice;
	
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
	
	public function getRecommondPrice() {
		return $this->recommondPrice;
	}
	
	public function setRecommondPrice($recommondPrice) {
		$this->recommondPrice = $recommondPrice;
		$this->apiParams["recommondPrice"] = $recommondPrice;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.unitprice.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
		RequestCheckUtil::checkNotNull($this->recommondPrice, 'recommondPrice');
	}
	
	public function getBizName(){
		return "updateUpdateunitprice";
	}
	
}

?>