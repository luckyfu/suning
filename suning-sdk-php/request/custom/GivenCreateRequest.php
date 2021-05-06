<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-23
 */
class GivenCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $addAmt;
	
	/**
	 * 
	 */
	private $orderType;
	
	/**
	 * 
	 */
	private $orderTypeDesc;
	
	/**
	 * 
	 */
	private $sceneCode;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getAddAmt() {
		return $this->addAmt;
	}
	
	public function setAddAmt($addAmt) {
		$this->addAmt = $addAmt;
		$this->apiParams["addAmt"] = $addAmt;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getOrderTypeDesc() {
		return $this->orderTypeDesc;
	}
	
	public function setOrderTypeDesc($orderTypeDesc) {
		$this->orderTypeDesc = $orderTypeDesc;
		$this->apiParams["orderTypeDesc"] = $orderTypeDesc;
	}
	
	public function getSceneCode() {
		return $this->sceneCode;
	}
	
	public function setSceneCode($sceneCode) {
		$this->sceneCode = $sceneCode;
		$this->apiParams["sceneCode"] = $sceneCode;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.given.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->addAmt, 'addAmt');
		RequestCheckUtil::checkNotNull($this->orderType, 'orderType');
		RequestCheckUtil::checkNotNull($this->orderTypeDesc, 'orderTypeDesc');
		RequestCheckUtil::checkNotNull($this->sceneCode, 'sceneCode');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "createGiven";
	}
	
}

?>