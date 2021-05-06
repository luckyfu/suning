<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-23
 */
class LognumsubmitAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $expressid;
	
	/**
	 * 
	 */
	private $expressOrderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	public function getExpressid() {
		return $this->expressid;
	}
	
	public function setExpressid($expressid) {
		$this->expressid = $expressid;
		$this->apiParams["expressid"] = $expressid;
	}
	
	public function getExpressOrderId() {
		return $this->expressOrderId;
	}
	
	public function setExpressOrderId($expressOrderId) {
		$this->expressOrderId = $expressOrderId;
		$this->apiParams["expressOrderId"] = $expressOrderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.lognumsubmit.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressid, 'expressid');
		RequestCheckUtil::checkNotNull($this->expressOrderId, 'expressOrderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
	}
	
	public function getBizName(){
		return "addLognumsubmit";
	}
	
}

?>