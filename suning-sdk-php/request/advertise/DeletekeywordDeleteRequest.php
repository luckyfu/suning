<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class DeletekeywordDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $keywordIdList;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getKeywordIdList() {
		return $this->keywordIdList;
	}
	
	public function setKeywordIdList($keywordIdList) {
		$this->keywordIdList = $keywordIdList;
		$this->apiParams["keywordIdList"] = $keywordIdList;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.keyword.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->keywordIdList, 'keywordIdList');
	}
	
	public function getBizName(){
		return "deleteDeletekeyword";
	}
	
}

?>