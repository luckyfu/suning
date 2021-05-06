<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class MemserverQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $joinTime;
	
	/**
	 * 
	 */
	private $levelCode;
	
	/**
	 * 
	 */
	private $rowkey;
	
	public function getJoinTime() {
		return $this->joinTime;
	}
	
	public function setJoinTime($joinTime) {
		$this->joinTime = $joinTime;
		$this->apiParams["joinTime"] = $joinTime;
	}
	
	public function getLevelCode() {
		return $this->levelCode;
	}
	
	public function setLevelCode($levelCode) {
		$this->levelCode = $levelCode;
		$this->apiParams["levelCode"] = $levelCode;
	}
	
	public function getRowkey() {
		return $this->rowkey;
	}
	
	public function setRowkey($rowkey) {
		$this->rowkey = $rowkey;
		$this->apiParams["rowkey"] = $rowkey;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.memserver.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->levelCode, 'levelCode');
	}
	
	public function getBizName(){
		return "queryMemserver";
	}
	
}

?>