<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-27
 */
class RecordpriceAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $productList;
	
	public function getProductList() {
		return $this->productList;
	}
	
	public function setProductList($productList) {
		$this->productList = $productList;
		$arr = array();
		foreach ($productList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["productList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.recordprice.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addRecordprice";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $productCode;
	
	private $channel;
	
	private $stockCode;
	
	private $recordPrice;
	
	private $effectStartDate;
	
	private $effectEndDate;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getStockCode() {
		return $this->stockCode;
	}

	public function setStockCode($stockCode) {
		$this->stockCode = $stockCode;
		$this->apiParams["stockCode"] = $stockCode;
	}
	
	public function getRecordPrice() {
		return $this->recordPrice;
	}

	public function setRecordPrice($recordPrice) {
		$this->recordPrice = $recordPrice;
		$this->apiParams["recordPrice"] = $recordPrice;
	}
	
	public function getEffectStartDate() {
		return $this->effectStartDate;
	}

	public function setEffectStartDate($effectStartDate) {
		$this->effectStartDate = $effectStartDate;
		$this->apiParams["effectStartDate"] = $effectStartDate;
	}
	
	public function getEffectEndDate() {
		return $this->effectEndDate;
	}

	public function setEffectEndDate($effectEndDate) {
		$this->effectEndDate = $effectEndDate;
		$this->apiParams["effectEndDate"] = $effectEndDate;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>