<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-8
 */
class HourestimateorderQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $pageId;
	
	/**
	 * 
	 */
	private $missionId;
	
	public function getPageId() {
		return $this->pageId;
	}
	
	public function setPageId($pageId) {
		$this->pageId = $pageId;
		$this->apiParams["pageId"] = $pageId;
	}
	
	public function getMissionId() {
		return $this->missionId;
	}
	
	public function setMissionId($missionId) {
		$this->missionId = $missionId;
		$this->apiParams["missionId"] = $missionId;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.hourestimateorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryHourestimateorder";
	}
	
}

?>