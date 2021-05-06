<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-22
 */
class MyaccountinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.myaccountinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
	}
	
	public function getBizName(){
		return "queryMyaccountinfo";
	}
	
}

?>