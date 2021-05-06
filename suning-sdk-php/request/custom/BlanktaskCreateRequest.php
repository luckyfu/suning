<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-29
 */
class BlanktaskCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $taskName;
	
	public function getTaskName() {
		return $this->taskName;
	}
	
	public function setTaskName($taskName) {
		$this->taskName = $taskName;
		$this->apiParams["taskName"] = $taskName;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.msgblanktask.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->taskName, 'taskName');
	}
	
	public function getBizName(){
		return "createBlanktask";
	}
	
}

?>