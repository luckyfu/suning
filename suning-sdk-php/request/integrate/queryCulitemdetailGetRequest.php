<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-15
 */
class queryCulitemdetailGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.integrate.culitemdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCulitemdetail";
	}
	
}

?>