<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-21
 */
class SalepriceConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $serialList;
	
	public function getSerialList() {
		return $this->serialList;
	}
	
	public function setSerialList($serialList) {
		$this->serialList = $serialList;
		$arr = array();
		foreach ($serialList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["serialList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.saleprice.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmSaleprice";
	}
	
}

class SerialList {

	private $apiParams = array();
	
	private $itemNo;
	
	private $serialNum;
	
	private $payAmount;
	
	private $salesNum;
	
	private $channel;
	
	public function getItemNo() {
		return $this->itemNo;
	}

	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getSerialNum() {
		return $this->serialNum;
	}

	public function setSerialNum($serialNum) {
		$this->serialNum = $serialNum;
		$this->apiParams["serialNum"] = $serialNum;
	}
	
	public function getPayAmount() {
		return $this->payAmount;
	}

	public function setPayAmount($payAmount) {
		$this->payAmount = $payAmount;
		$this->apiParams["payAmount"] = $payAmount;
	}
	
	public function getSalesNum() {
		return $this->salesNum;
	}

	public function setSalesNum($salesNum) {
		$this->salesNum = $salesNum;
		$this->apiParams["salesNum"] = $salesNum;
	}
	
	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>