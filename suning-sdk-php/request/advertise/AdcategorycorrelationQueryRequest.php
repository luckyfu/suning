<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class AdcategorycorrelationQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $categoryCorrelationRequestmodel;
	
	/**
	 * 
	 */
	private $custnum;
	
	public function getCategoryCorrelationRequestmodel() {
		return $this->categoryCorrelationRequestmodel;
	}
	
	public function setCategoryCorrelationRequestmodel($categoryCorrelationRequestmodel) {
		$this->categoryCorrelationRequestmodel = $categoryCorrelationRequestmodel;
		$this->apiParams["categoryCorrelationRequestmodel"] = $categoryCorrelationRequestmodel->getApiParams();
	}
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.adcategorycorrelation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
	}
	
	public function getBizName(){
		return "queryAdcategorycorrelation";
	}
	
}

class CategoryCorrelationRequestmodel {

	private $apiParams = array();
	
	private $brandCode;
	
	private $goodCode;
	
	private $keywordList;
	
	public function getBrandCode() {
		return $this->brandCode;
	}

	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getGoodCode() {
		return $this->goodCode;
	}

	public function setGoodCode($goodCode) {
		$this->goodCode = $goodCode;
		$this->apiParams["goodCode"] = $goodCode;
	}
	
	public function getKeywordList() {
		return $this->keywordList;
	}

	public function setKeywordList($keywordList) {
		$this->keywordList = $keywordList;
		$this->apiParams["keywordList"] = $keywordList;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>