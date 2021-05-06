<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-23
 */
class StrategyinstanceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $mainStrategyInstanceId;
	
	/**
	 * 
	 */
	private $strategyInstanceId;
	
	public function getMainStrategyInstanceId() {
		return $this->mainStrategyInstanceId;
	}
	
	public function setMainStrategyInstanceId($mainStrategyInstanceId) {
		$this->mainStrategyInstanceId = $mainStrategyInstanceId;
		$this->apiParams["mainStrategyInstanceId"] = $mainStrategyInstanceId;
	}
	
	public function getStrategyInstanceId() {
		return $this->strategyInstanceId;
	}
	
	public function setStrategyInstanceId($strategyInstanceId) {
		$this->strategyInstanceId = $strategyInstanceId;
		$this->apiParams["strategyInstanceId"] = $strategyInstanceId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.strategyinstance.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryStrategyinstance";
	}
	
}

?>