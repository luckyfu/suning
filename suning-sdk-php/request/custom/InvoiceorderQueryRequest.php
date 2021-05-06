<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-4
 */
class InvoiceorderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $isSnService;
	
	/**
	 * 
	 */
	private $orderId;
	
	
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getIsSnService() {
		return $this->isSnService;
	}
	
	public function setIsSnService($isSnService) {
		$this->isSnService = $isSnService;
		$this->apiParams["isSnService"] = $isSnService;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.invoiceorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryInvoiceorder";
	}
	
}

?>