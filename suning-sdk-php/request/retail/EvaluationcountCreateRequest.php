<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-16
 */
class EvaluationcountCreateRequest  extends SuningRequest{
	
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
	private $channel;
	
	/**
	 * 
	 */
	private $evaluationDate;
	
	/**
	 * 
	 */
	private $finalPrice;
	
	/**
	 * 
	 */
	private $modelName;
	
	/**
	 * 
	 */
	private $storeCode;
	
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
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getEvaluationDate() {
		return $this->evaluationDate;
	}
	
	public function setEvaluationDate($evaluationDate) {
		$this->evaluationDate = $evaluationDate;
		$this->apiParams["evaluationDate"] = $evaluationDate;
	}
	
	public function getFinalPrice() {
		return $this->finalPrice;
	}
	
	public function setFinalPrice($finalPrice) {
		$this->finalPrice = $finalPrice;
		$this->apiParams["finalPrice"] = $finalPrice;
	}
	
	public function getModelName() {
		return $this->modelName;
	}
	
	public function setModelName($modelName) {
		$this->modelName = $modelName;
		$this->apiParams["modelName"] = $modelName;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retail.evaluationcount.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createEvaluationcount";
	}
	
}

?>