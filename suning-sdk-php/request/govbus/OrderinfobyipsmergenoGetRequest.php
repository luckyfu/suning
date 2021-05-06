<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-2
 */
class OrderinfobyipsmergenoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invoiceCode;
	
	/**
	 * 
	 */
	private $invoiceId;
	
	/**
	 * 
	 */
	private $ipsMergeNos;
	
	/**
	 * 
	 */
	private $pageLong;
	
	/**
	 * 
	 */
	private $pageNum;
	
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
	
	public function getIpsMergeNos() {
		return $this->ipsMergeNos;
	}
	
	public function setIpsMergeNos($ipsMergeNos) {
		$this->ipsMergeNos = $ipsMergeNos;
		$arr = array();
		foreach ($ipsMergeNos as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["ipsMergeNos"] = $arr;
	}
	
	public function getPageLong() {
		return $this->pageLong;
	}
	
	public function setPageLong($pageLong) {
		$this->pageLong = $pageLong;
		$this->apiParams["pageLong"] = $pageLong;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.orderinfobyipsmergeno.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getOrderinfobyipsmergeno";
	}
	
}

class IpsMergeNos {

	private $apiParams = array();
	
	private $ipsMergeNo;
	
	public function getIpsMergeNo() {
		return $this->ipsMergeNo;
	}

	public function setIpsMergeNo($ipsMergeNo) {
		$this->ipsMergeNo = $ipsMergeNo;
		$this->apiParams["ipsMergeNo"] = $ipsMergeNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>