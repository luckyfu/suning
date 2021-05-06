<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-16
 */
class BangrecyclesaleorderCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $brandName;
	
	/**
	 * 
	 */
	private $buName;
	
	/**
	 * 
	 */
	private $freight;
	
	/**
	 * 
	 */
	private $modelName;
	
	/**
	 * 
	 */
	private $orderTime;
	
	/**
	 * 
	 */
	private $payAmount;
	
	/**
	 * 
	 */
	private $payTime;
	
	/**
	 * 
	 */
	private $payType;
	
	/**
	 * 
	 */
	private $recycleOrderCode;
	
	/**
	 * 
	 */
	private $saleChannel;
	
	/**
	 * 
	 */
	private $saleDire;
	
	/**
	 * 
	 */
	private $saleOrderCode;
	
	/**
	 * 
	 */
	private $saleStatus;
	
	/**
	 * 
	 */
	private $serviceCharge;
	
	/**
	 * 
	 */
	private $startingPrice;
	
	public function getBrandName() {
		return $this->brandName;
	}
	
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}
	
	public function getBuName() {
		return $this->buName;
	}
	
	public function setBuName($buName) {
		$this->buName = $buName;
		$this->apiParams["buName"] = $buName;
	}
	
	public function getFreight() {
		return $this->freight;
	}
	
	public function setFreight($freight) {
		$this->freight = $freight;
		$this->apiParams["freight"] = $freight;
	}
	
	public function getModelName() {
		return $this->modelName;
	}
	
	public function setModelName($modelName) {
		$this->modelName = $modelName;
		$this->apiParams["modelName"] = $modelName;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}
	
	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getPayAmount() {
		return $this->payAmount;
	}
	
	public function setPayAmount($payAmount) {
		$this->payAmount = $payAmount;
		$this->apiParams["payAmount"] = $payAmount;
	}
	
	public function getPayTime() {
		return $this->payTime;
	}
	
	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getPayType() {
		return $this->payType;
	}
	
	public function setPayType($payType) {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}
	
	public function getRecycleOrderCode() {
		return $this->recycleOrderCode;
	}
	
	public function setRecycleOrderCode($recycleOrderCode) {
		$this->recycleOrderCode = $recycleOrderCode;
		$this->apiParams["recycleOrderCode"] = $recycleOrderCode;
	}
	
	public function getSaleChannel() {
		return $this->saleChannel;
	}
	
	public function setSaleChannel($saleChannel) {
		$this->saleChannel = $saleChannel;
		$this->apiParams["saleChannel"] = $saleChannel;
	}
	
	public function getSaleDire() {
		return $this->saleDire;
	}
	
	public function setSaleDire($saleDire) {
		$this->saleDire = $saleDire;
		$this->apiParams["saleDire"] = $saleDire;
	}
	
	public function getSaleOrderCode() {
		return $this->saleOrderCode;
	}
	
	public function setSaleOrderCode($saleOrderCode) {
		$this->saleOrderCode = $saleOrderCode;
		$this->apiParams["saleOrderCode"] = $saleOrderCode;
	}
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getServiceCharge() {
		return $this->serviceCharge;
	}
	
	public function setServiceCharge($serviceCharge) {
		$this->serviceCharge = $serviceCharge;
		$this->apiParams["serviceCharge"] = $serviceCharge;
	}
	
	public function getStartingPrice() {
		return $this->startingPrice;
	}
	
	public function setStartingPrice($startingPrice) {
		$this->startingPrice = $startingPrice;
		$this->apiParams["startingPrice"] = $startingPrice;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.bangrecyclesaleorder.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createBangrecyclesaleorder";
	}
	
}

?>