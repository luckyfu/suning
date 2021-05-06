<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UpdateocpcUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $ocpc;
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getOcpc() {
		return $this->ocpc;
	}
	
	public function setOcpc($ocpc) {
		$this->ocpc = $ocpc;
		$this->apiParams["ocpc"] = $ocpc;
	}
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.ocpc.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->ocpc, 'ocpc');
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
	}
	
	public function getBizName(){
		return "updateUpdateocpc";
	}
	
}

?>