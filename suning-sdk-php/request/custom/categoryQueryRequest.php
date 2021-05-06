<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-16
 */
class categoryQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $categoryName;
	
	
	
	/**
	 * 
	 */
	private $targetChannel;
	
	public function getCategoryName() {
		return $this->categoryName;
	}
	
	public function setCategoryName($categoryName) {
		$this->categoryName = $categoryName;
		$this->apiParams["categoryName"] = $categoryName;
	}
	
	
	
	public function getTargetChannel() {
		return $this->targetChannel;
	}
	
	public function setTargetChannel($targetChannel) {
		$this->targetChannel = $targetChannel;
		$this->apiParams["targetChannel"] = $targetChannel;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.category.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "category";
	}
	
}

?>