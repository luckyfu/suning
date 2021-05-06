<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-19
 */
class QueryminpriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $unitId;
	
	public function getUnitId() {
		return $this->unitId;
	}
	
	public function setUnitId($unitId) {
		$this->unitId = $unitId;
		$this->apiParams["unitId"] = $unitId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.queryminprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->unitId, 'unitId');
	}
	
	public function getBizName(){
		return "queryQueryminprice";
	}
	
}

?>