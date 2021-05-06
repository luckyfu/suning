<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class UpdatekeywordUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $paramKeywordList;
	
	public function getParamKeywordList() {
		return $this->paramKeywordList;
	}
	
	public function setParamKeywordList($paramKeywordList) {
		$this->paramKeywordList = $paramKeywordList;
		$arr = array();
		foreach ($paramKeywordList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["paramKeywordList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.keyword.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "updateUpdatekeyword";
	}
	
}

class ParamKeywordList {

	private $apiParams = array();
	
	private $custnum;
	
	private $keywordId;
	
	private $pcPrice;
	
	private $wapPrice;
	
	public function getCustnum() {
		return $this->custnum;
	}

	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getKeywordId() {
		return $this->keywordId;
	}

	public function setKeywordId($keywordId) {
		$this->keywordId = $keywordId;
		$this->apiParams["keywordId"] = $keywordId;
	}
	
	public function getPcPrice() {
		return $this->pcPrice;
	}

	public function setPcPrice($pcPrice) {
		$this->pcPrice = $pcPrice;
		$this->apiParams["pcPrice"] = $pcPrice;
	}
	
	public function getWapPrice() {
		return $this->wapPrice;
	}

	public function setWapPrice($wapPrice) {
		$this->wapPrice = $wapPrice;
		$this->apiParams["wapPrice"] = $wapPrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>