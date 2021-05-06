<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-29
 */
class OrderCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $flag;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getFlag() {
		return $this->flag;
	}
	
	public function setFlag($flag) {
		$this->flag = $flag;
		$this->apiParams["flag"] = $flag;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.order.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->flag, 'flag');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "cancelOrder";
	}
	
}

?>