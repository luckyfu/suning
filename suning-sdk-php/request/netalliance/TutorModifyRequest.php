<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-27
 */
class TutorModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNo;
	
	/**
	 * 
	 */
	private $tutorCustNo;
	
	public function getCustNo() {
		return $this->custNo;
	}
	
	public function setCustNo($custNo) {
		$this->custNo = $custNo;
		$this->apiParams["custNo"] = $custNo;
	}
	
	public function getTutorCustNo() {
		return $this->tutorCustNo;
	}
	
	public function setTutorCustNo($tutorCustNo) {
		$this->tutorCustNo = $tutorCustNo;
		$this->apiParams["tutorCustNo"] = $tutorCustNo;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.tutor.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNo, 'custNo');
		RequestCheckUtil::checkNotNull($this->tutorCustNo, 'tutorCustNo');
	}
	
	public function getBizName(){
		return "modifyTutor";
	}
	
}

?>