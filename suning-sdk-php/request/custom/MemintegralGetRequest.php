<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class MemintegralGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.memintegral.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "getMemintegral";
	}
	
}

?>