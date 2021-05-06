<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-20
 */
class OrdershareamountGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderList;
	
	public function getOrderList() {
		return $this->orderList;
	}
	
	public function setOrderList($orderList) {
		$this->orderList = $orderList;
		$arr = array();
		foreach ($orderList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.ordershareamount.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getOrdershareamount";
	}
	
}

class OrderList {

	private $apiParams = array();
	
	private $orderId;
	
	private $tradeNo;
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getTradeNo() {
		return $this->tradeNo;
	}

	public function setTradeNo($tradeNo) {
		$this->tradeNo = $tradeNo;
		$this->apiParams["tradeNo"] = $tradeNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>