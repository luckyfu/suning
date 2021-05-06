<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-26
 */
class SmspreviewQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $signature;
	
	/**
	 * 
	 */
	private $smsAppCode;
	
	/**
	 * 
	 */
	private $templateCode;
	
	/**
	 * 
	 */
	private $templateParams;
	
	public function getSignature() {
		return $this->signature;
	}
	
	public function setSignature($signature) {
		$this->signature = $signature;
		$this->apiParams["signature"] = $signature;
	}
	
	public function getSmsAppCode() {
		return $this->smsAppCode;
	}
	
	public function setSmsAppCode($smsAppCode) {
		$this->smsAppCode = $smsAppCode;
		$this->apiParams["smsAppCode"] = $smsAppCode;
	}
	
	public function getTemplateCode() {
		return $this->templateCode;
	}
	
	public function setTemplateCode($templateCode) {
		$this->templateCode = $templateCode;
		$this->apiParams["templateCode"] = $templateCode;
	}
	
	public function getTemplateParams() {
		return $this->templateParams;
	}
	
	public function setTemplateParams($templateParams) {
		$this->templateParams = $templateParams;
		$this->apiParams["templateParams"] = $templateParams;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.smspreview.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->signature, 'signature');
		RequestCheckUtil::checkNotNull($this->smsAppCode, 'smsAppCode');
		RequestCheckUtil::checkNotNull($this->templateCode, 'templateCode');
	}
	
	public function getBizName(){
		return "querySmspreview";
	}
	
}

?>