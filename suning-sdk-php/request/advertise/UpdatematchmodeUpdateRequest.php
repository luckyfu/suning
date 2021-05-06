<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-21
 */
class UpdatematchmodeUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $matchModeMap;
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getMatchModeMap() {
		return $this->matchModeMap;
	}
	
	public function setMatchModeMap($matchModeMap) {
		$this->matchModeMap = $matchModeMap;
		$this->apiParams["matchModeMap"] = $matchModeMap;
	}
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.matchmode.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->matchModeMap, 'matchModeMap');
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
	}
	
	public function getBizName(){
		return "updateUpdatematchmode";
	}
	
}

?>