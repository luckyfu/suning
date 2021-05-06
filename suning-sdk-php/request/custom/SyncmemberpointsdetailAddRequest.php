<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-8
 */
class SyncmemberpointsdetailAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $desc;
	
	/**
	 * 
	 */
	private $flag;
	
	/**
	 * 
	 */
	private $level;
	
	/**
	 * 
	 */
	private $memCode;
	
	/**
	 * 
	 */
	private $mixMobile;
	
	/**
	 * 
	 */
	private $nickName;
	
	/**
	 * 
	 */
	private $occurTime;
	
	/**
	 * 
	 */
	private $point;
	
	/**
	 * 
	 */
	private $serialNo;
	
	/**
	 * 
	 */
	private $shopCode;
	
	/**
	 * 
	 */
	private $totalIntegral;
	
	public function getDesc() {
		return $this->desc;
	}
	
	public function setDesc($desc) {
		$this->desc = $desc;
		$this->apiParams["desc"] = $desc;
	}
	
	public function getFlag() {
		return $this->flag;
	}
	
	public function setFlag($flag) {
		$this->flag = $flag;
		$this->apiParams["flag"] = $flag;
	}
	
	public function getLevel() {
		return $this->level;
	}
	
	public function setLevel($level) {
		$this->level = $level;
		$this->apiParams["level"] = $level;
	}
	
	public function getMemCode() {
		return $this->memCode;
	}
	
	public function setMemCode($memCode) {
		$this->memCode = $memCode;
		$this->apiParams["memCode"] = $memCode;
	}
	
	public function getMixMobile() {
		return $this->mixMobile;
	}
	
	public function setMixMobile($mixMobile) {
		$this->mixMobile = $mixMobile;
		$this->apiParams["mixMobile"] = $mixMobile;
	}
	
	public function getNickName() {
		return $this->nickName;
	}
	
	public function setNickName($nickName) {
		$this->nickName = $nickName;
		$this->apiParams["nickName"] = $nickName;
	}
	
	public function getOccurTime() {
		return $this->occurTime;
	}
	
	public function setOccurTime($occurTime) {
		$this->occurTime = $occurTime;
		$this->apiParams["occurTime"] = $occurTime;
	}
	
	public function getPoint() {
		return $this->point;
	}
	
	public function setPoint($point) {
		$this->point = $point;
		$this->apiParams["point"] = $point;
	}
	
	public function getSerialNo() {
		return $this->serialNo;
	}
	
	public function setSerialNo($serialNo) {
		$this->serialNo = $serialNo;
		$this->apiParams["serialNo"] = $serialNo;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getTotalIntegral() {
		return $this->totalIntegral;
	}
	
	public function setTotalIntegral($totalIntegral) {
		$this->totalIntegral = $totalIntegral;
		$this->apiParams["totalIntegral"] = $totalIntegral;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.syncmemberpointsdetail.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memCode, 'memCode');
		RequestCheckUtil::checkNotNull($this->mixMobile, 'mixMobile');
		RequestCheckUtil::checkNotNull($this->serialNo, 'serialNo');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
	}
	
	public function getBizName(){
		return "addSyncmemberpointsdetail";
	}
	
}

?>