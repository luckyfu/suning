<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-27
 */
class RecordpriceapplyGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyCode;
	
	public function getApplyCode() {
		return $this->applyCode;
	}
	
	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.recordpriceapply.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->applyCode, 'applyCode');
	}
	
	public function getBizName(){
		return "getRecordpriceapply";
	}
	
}

?>