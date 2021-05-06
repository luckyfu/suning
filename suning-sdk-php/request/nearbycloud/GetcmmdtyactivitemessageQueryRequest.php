<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-30
 */
class GetcmmdtyactivitemessageQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $itemDate;
	
	/**
	 * 
	 */
	private $itemPage;
	
	public function getItemDate() {
		return $this->itemDate;
	}
	
	public function setItemDate($itemDate) {
		$this->itemDate = $itemDate;
		$this->apiParams["itemDate"] = $itemDate;
	}
	
	public function getItemPage() {
		return $this->itemPage;
	}
	
	public function setItemPage($itemPage) {
		$this->itemPage = $itemPage;
		$this->apiParams["itemPage"] = $itemPage;
	}
	
	public function getApiMethodName(){
		return 'suning.nearbycloud.getcmmdtyactivitemessage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->itemDate, 'itemDate');
		RequestCheckUtil::checkNotNull($this->itemPage, 'itemPage');
	}
	
	public function getBizName(){
		return "queryGetcmmdtyactivitemessage";
	}
	
}

?>