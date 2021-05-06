<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-11
 */
class YzmqdcoinAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $inSerialNo;
	
	/**
	 * 
	 */
	private $outSerialNo;
	
	/**
	 * 
	 */
	private $respCode;
	
	/**
	 * 
	 */
	private $respMsg;
	
	public function getInSerialNo() {
		return $this->inSerialNo;
	}
	
	public function setInSerialNo($inSerialNo) {
		$this->inSerialNo = $inSerialNo;
		$this->apiParams["inSerialNo"] = $inSerialNo;
	}
	
	public function getOutSerialNo() {
		return $this->outSerialNo;
	}
	
	public function setOutSerialNo($outSerialNo) {
		$this->outSerialNo = $outSerialNo;
		$this->apiParams["outSerialNo"] = $outSerialNo;
	}
	
	public function getRespCode() {
		return $this->respCode;
	}
	
	public function setRespCode($respCode) {
		$this->respCode = $respCode;
		$this->apiParams["respCode"] = $respCode;
	}
	
	public function getRespMsg() {
		return $this->respMsg;
	}
	
	public function setRespMsg($respMsg) {
		$this->respMsg = $respMsg;
		$this->apiParams["respMsg"] = $respMsg;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.yzmqdcoin.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->inSerialNo, 'inSerialNo');
		RequestCheckUtil::checkNotNull($this->outSerialNo, 'outSerialNo');
		RequestCheckUtil::checkNotNull($this->respCode, 'respCode');
		RequestCheckUtil::checkNotNull($this->respMsg, 'respMsg');
	}
	
	public function getBizName(){
		return "addYzmqdcoin";
	}
	
}

?>