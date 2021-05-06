<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-19
 */
class SmscheckQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $smsContent;
	
	public function getSmsContent() {
		return $this->smsContent;
	}
	
	public function setSmsContent($smsContent) {
		$this->smsContent = $smsContent;
		$this->apiParams["smsContent"] = $smsContent;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.smscheck.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->smsContent, 'smsContent');
	}
	
	public function getBizName(){
		return "querySmscheck";
	}
	
}

?>