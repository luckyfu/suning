<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-19
 */
class QueryhourranklistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $quaityScoreList;
	
	public function getQuaityScoreList() {
		return $this->quaityScoreList;
	}
	
	public function setQuaityScoreList($quaityScoreList) {
		$this->quaityScoreList = $quaityScoreList;
		$arr = array();
		foreach ($quaityScoreList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["quaityScoreList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.queryhourranklist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryQueryhourranklist";
	}
	
}

class QuaityScoreList {

	private $apiParams = array();
	
	private $keyword;
	
	private $keywordId;
	
	public function getKeyword() {
		return $this->keyword;
	}

	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->apiParams["keyword"] = $keyword;
	}
	
	public function getKeywordId() {
		return $this->keywordId;
	}

	public function setKeywordId($keywordId) {
		$this->keywordId = $keywordId;
		$this->apiParams["keywordId"] = $keywordId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>