<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-27
 */
class LevelModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNo;
	
	/**
	 * 
	 */
	private $growthValue;
	
	/**
	 * 
	 */
	private $level;
	
	public function getCustNo() {
		return $this->custNo;
	}
	
	public function setCustNo($custNo) {
		$this->custNo = $custNo;
		$this->apiParams["custNo"] = $custNo;
	}
	
	public function getGrowthValue() {
		return $this->growthValue;
	}
	
	public function setGrowthValue($growthValue) {
		$this->growthValue = $growthValue;
		$this->apiParams["growthValue"] = $growthValue;
	}
	
	public function getLevel() {
		return $this->level;
	}
	
	public function setLevel($level) {
		$this->level = $level;
		$this->apiParams["level"] = $level;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.level.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNo, 'custNo');
		RequestCheckUtil::checkNotNull($this->growthValue, 'growthValue');
		RequestCheckUtil::checkNotNull($this->level, 'level');
	}
	
	public function getBizName(){
		return "modifyLevel";
	}
	
}

?>