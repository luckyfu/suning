<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-1
 */
class CommoditycategoryQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commoditycategoryList;
	
	public function getCommoditycategoryList() {
		return $this->commoditycategoryList;
	}
	
	public function setCommoditycategoryList($commoditycategoryList) {
		$this->commoditycategoryList = $commoditycategoryList;
		$arr = array();
		foreach ($commoditycategoryList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commoditycategoryList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.commoditycategory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCommoditycategory";
	}
	
}

class CommoditycategoryList {

	private $apiParams = array();
	
	private $grade;
	
	private $parentId;
	
	private $saleCategoryId;
	
	private $saleGrade;
	
	public function getGrade() {
		return $this->grade;
	}

	public function setGrade($grade) {
		$this->grade = $grade;
		$this->apiParams["grade"] = $grade;
	}
	
	public function getParentId() {
		return $this->parentId;
	}

	public function setParentId($parentId) {
		$this->parentId = $parentId;
		$this->apiParams["parentId"] = $parentId;
	}
	
	public function getSaleCategoryId() {
		return $this->saleCategoryId;
	}

	public function setSaleCategoryId($saleCategoryId) {
		$this->saleCategoryId = $saleCategoryId;
		$this->apiParams["saleCategoryId"] = $saleCategoryId;
	}
	
	public function getSaleGrade() {
		return $this->saleGrade;
	}

	public function setSaleGrade($saleGrade) {
		$this->saleGrade = $saleGrade;
		$this->apiParams["saleGrade"] = $saleGrade;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>