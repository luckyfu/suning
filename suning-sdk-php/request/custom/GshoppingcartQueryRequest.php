<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-22
 */
class GshoppingcartQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $customerNo;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getCustomerNo() {
		return $this->customerNo;
	}
	
	public function setCustomerNo($customerNo) {
		$this->customerNo = $customerNo;
		$this->apiParams["customerNo"] = $customerNo;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.gshoppingcart.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "queryGshoppingcart";
	}
	
}

?>