<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-8
 */
class SyncmemberorderQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $etime;
	
	/**
	 * 
	 */
	private $orderPageNum;
	
	/**
	 * 
	 */
	private $orderPageSize;
	
	/**
	 * 
	 */
	private $shopCode;
	
	/**
	 * 
	 */
	private $stime;
	
	public function getEtime() {
		return $this->etime;
	}
	
	public function setEtime($etime) {
		$this->etime = $etime;
		$this->apiParams["etime"] = $etime;
	}
	
	public function getOrderPageNum() {
		return $this->orderPageNum;
	}
	
	public function setOrderPageNum($orderPageNum) {
		$this->orderPageNum = $orderPageNum;
		$this->apiParams["orderPageNum"] = $orderPageNum;
	}
	
	public function getOrderPageSize() {
		return $this->orderPageSize;
	}
	
	public function setOrderPageSize($orderPageSize) {
		$this->orderPageSize = $orderPageSize;
		$this->apiParams["orderPageSize"] = $orderPageSize;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getStime() {
		return $this->stime;
	}
	
	public function setStime($stime) {
		$this->stime = $stime;
		$this->apiParams["stime"] = $stime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.syncmemberorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderPageNum, 'orderPageNum');
		RequestCheckUtil::checkNotNull($this->orderPageSize, 'orderPageSize');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
	}
	
	public function getBizName(){
		return "querySyncmemberorder";
	}
	
}

?>