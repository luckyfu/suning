<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class QueryrelatekeywordQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $unitId;
	
	/**
	 * 
	 */
	private $word;
	
	public function getUnitId() {
		return $this->unitId;
	}
	
	public function setUnitId($unitId) {
		$this->unitId = $unitId;
		$this->apiParams["unitId"] = $unitId;
	}
	
	public function getWord() {
		return $this->word;
	}
	
	public function setWord($word) {
		$this->word = $word;
		$this->apiParams["word"] = $word;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.queryrelatekeyword.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->unitId, 'unitId');
		RequestCheckUtil::checkNotNull($this->word, 'word');
	}
	
	public function getBizName(){
		return "queryQueryrelatekeyword";
	}
	
}

?>