<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-6
 */
class GetinvoicesurfaceinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invoiceCode;
	
	/**
	 * 
	 */
	private $invoiceId;
	
	public function getInvoiceCode() {
		return $this->invoiceCode;
	}
	
	public function setInvoiceCode($invoiceCode) {
		$this->invoiceCode = $invoiceCode;
		$this->apiParams["invoiceCode"] = $invoiceCode;
	}
	
	public function getInvoiceId() {
		return $this->invoiceId;
	}
	
	public function setInvoiceId($invoiceId) {
		$this->invoiceId = $invoiceId;
		$this->apiParams["invoiceId"] = $invoiceId;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getinvoicesurfaceinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invoiceCode, 'invoiceCode');
		RequestCheckUtil::checkNotNull($this->invoiceId, 'invoiceId');
	}
	
	public function getBizName(){
		return "queryGetinvoicesurfaceinfo";
	}
	
}

?>