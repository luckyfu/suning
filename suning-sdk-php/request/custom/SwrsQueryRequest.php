<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-17
 */
class SwrsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $sceneCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $tasks;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getSceneCode() {
		return $this->sceneCode;
	}
	
	public function setSceneCode($sceneCode) {
		$this->sceneCode = $sceneCode;
		$this->apiParams["sceneCode"] = $sceneCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getTasks() {
		return $this->tasks;
	}
	
	public function setTasks($tasks) {
		$this->tasks = $tasks;
		$arr = array();
		foreach ($tasks as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["tasks"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.swrs.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "querySwrs";
	}
	
}

class Tasks {

	private $apiParams = array();
	
	private $content;
	
	private $dataId;
	
	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getDataId() {
		return $this->dataId;
	}

	public function setDataId($dataId) {
		$this->dataId = $dataId;
		$this->apiParams["dataId"] = $dataId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>