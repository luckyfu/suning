<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class CategorizeunitkeywordlistUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $paramKeywordList;
	
	/**
	 * 
	 */
	private $unitId;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
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
	
	public function getUnitId() {
		return $this->unitId;
	}
	
	public function setUnitId($unitId) {
		$this->unitId = $unitId;
		$this->apiParams["unitId"] = $unitId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.categorizeunitkeywordlist.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->unitId, 'unitId');
	}
	
	public function getBizName(){
		return "updateCategorizeunitkeywordlist";
	}
	
}

class ParamKeywordList {

	private $apiParams = array();
	
	private $name;
	
	private $pcPrice;
	
	private $promotionId;
	
	private $promotionUnitId;
	
	private $type;
	
	private $wapPrice;
	
	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getPcPrice() {
		return $this->pcPrice;
	}

	public function setPcPrice($pcPrice) {
		$this->pcPrice = $pcPrice;
		$this->apiParams["pcPrice"] = $pcPrice;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}

	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}

	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
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