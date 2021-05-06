<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-11
 */
class NanjingcustomsresultReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $copMsgId;
	
	/**
	 * 
	 */
	private $decltype;
	
	/**
	 * 
	 */
	private $extrainfo;
	
	/**
	 * 
	 */
	private $msg;
	
	/**
	 * 
	 */
	private $msgtype;
	
	/**
	 * 
	 */
	private $sign;
	
	/**
	 * 
	 */
	private $timestamp;
	
	/**
	 * 
	 */
	private $userid;
	
	public function getCopMsgId() {
		return $this->copMsgId;
	}
	
	public function setCopMsgId($copMsgId) {
		$this->copMsgId = $copMsgId;
		$this->apiParams["copMsgId"] = $copMsgId;
	}
	
	public function getDecltype() {
		return $this->decltype;
	}
	
	public function setDecltype($decltype) {
		$this->decltype = $decltype;
		$this->apiParams["decltype"] = $decltype;
	}
	
	public function getExtrainfo() {
		return $this->extrainfo;
	}
	
	public function setExtrainfo($extrainfo) {
		$this->extrainfo = $extrainfo;
		$this->apiParams["extrainfo"] = $extrainfo;
	}
	
	public function getMsg() {
		return $this->msg;
	}
	
	public function setMsg($msg) {
		$this->msg = $msg;
		$this->apiParams["msg"] = $msg;
	}
	
	public function getMsgtype() {
		return $this->msgtype;
	}
	
	public function setMsgtype($msgtype) {
		$this->msgtype = $msgtype;
		$this->apiParams["msgtype"] = $msgtype;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getTimestamp() {
		return $this->timestamp;
	}
	
	public function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
		$this->apiParams["timestamp"] = $timestamp;
	}
	
	public function getUserid() {
		return $this->userid;
	}
	
	public function setUserid($userid) {
		$this->userid = $userid;
		$this->apiParams["userid"] = $userid;
	}
	
	public function getApiMethodName(){
		return 'suning.hgyw.nanjingcustomsresult.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->copMsgId, 'copMsgId');
		RequestCheckUtil::checkNotNull($this->msgtype, 'msgtype');
		RequestCheckUtil::checkNotNull($this->sign, 'sign');
		RequestCheckUtil::checkNotNull($this->timestamp, 'timestamp');
		RequestCheckUtil::checkNotNull($this->userid, 'userid');
	}
	
	public function getBizName(){
		return "receiveNanjingcustomsresult";
	}
	
}

?>