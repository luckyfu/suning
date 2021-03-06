<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-13
 */
class CrowdcountbystrategyidQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $crowdScope;
	
	/**
	 * 
	 */
	private $strategyId;
	
	public function getCrowdScope() {
		return $this->crowdScope;
	}
	
	public function setCrowdScope($crowdScope) {
		$this->crowdScope = $crowdScope;
		$this->apiParams["crowdScope"] = $crowdScope;
	}
	
	public function getStrategyId() {
		return $this->strategyId;
	}
	
	public function setStrategyId($strategyId) {
		$this->strategyId = $strategyId;
		$this->apiParams["strategyId"] = $strategyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.crowdcountbystrategyid.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->strategyId, 'strategyId');
	}
	
	public function getBizName(){
		return "queryCrowdcountbystrategyid";
	}
	
}

?>