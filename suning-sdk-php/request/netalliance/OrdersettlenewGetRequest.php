<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-1
 */
class OrdersettlenewGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderLineNumber;
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}
	
	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.ordersettlenew.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderLineNumber, 'orderLineNumber');
	}
	
	public function getBizName(){
		return "getOrdersettlenew";
	}
	
}

?>