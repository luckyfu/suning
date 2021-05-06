<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-23
 */
class StrategyinstanceCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $crowdScope;
	
	/**
	 * 
	 */
	private $splitList;
	
	/**
	 * 
	 */
	private $splitType;
	
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
	
	public function getSplitList() {
		return $this->splitList;
	}
	
	public function setSplitList($splitList) {
		$this->splitList = $splitList;
		$arr = array();
		foreach ($splitList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["splitList"] = $arr;
	}
	
	public function getSplitType() {
		return $this->splitType;
	}
	
	public function setSplitType($splitType) {
		$this->splitType = $splitType;
		$this->apiParams["splitType"] = $splitType;
	}
	
	public function getStrategyId() {
		return $this->strategyId;
	}
	
	public function setStrategyId($strategyId) {
		$this->strategyId = $strategyId;
		$this->apiParams["strategyId"] = $strategyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.strategyinstance.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->strategyId, 'strategyId');
	}
	
	public function getBizName(){
		return "createStrategyinstance";
	}
	
}

class SplitList {

	private $apiParams = array();
	
	private $numberLimit;
	
	private $splitNum;
	
	private $splitOrder;
	
	public function getNumberLimit() {
		return $this->numberLimit;
	}

	public function setNumberLimit($numberLimit) {
		$this->numberLimit = $numberLimit;
		$this->apiParams["numberLimit"] = $numberLimit;
	}
	
	public function getSplitNum() {
		return $this->splitNum;
	}

	public function setSplitNum($splitNum) {
		$this->splitNum = $splitNum;
		$this->apiParams["splitNum"] = $splitNum;
	}
	
	public function getSplitOrder() {
		return $this->splitOrder;
	}

	public function setSplitOrder($splitOrder) {
		$this->splitOrder = $splitOrder;
		$this->apiParams["splitOrder"] = $splitOrder;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>