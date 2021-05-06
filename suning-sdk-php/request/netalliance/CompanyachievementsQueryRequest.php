<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-18
 */
class CompanyachievementsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $activityType;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getActivityType() {
		return $this->activityType;
	}
	
	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.companyachievements.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "queryCompanyachievements";
	}
	
}

?>