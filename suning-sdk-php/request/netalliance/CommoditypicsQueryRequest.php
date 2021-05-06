<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-28
 */
class CommoditypicsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commodities;
	
	/**
	 * 
	 */
	private $width;
	
	/**
	 * 
	 */
	private $height;
	
	public function getCommodities() {
		return $this->commodities;
	}
	
	public function setCommodities($commodities) {
		$this->commodities = $commodities;
		$this->apiParams["commodities"] = $commodities;
	}
	
	public function getWidth() {
		return $this->width;
	}
	
	public function setWidth($width) {
		$this->width = $width;
		$this->apiParams["width"] = $width;
	}
	
	public function getHeight() {
		return $this->height;
	}
	
	public function setHeight($height) {
		$this->height = $height;
		$this->apiParams["height"] = $height;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.commoditypics.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodities, 'commodities');
	}
	
	public function getBizName(){
		return "queryCommoditypics";
	}
	
}

?>