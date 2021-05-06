<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-19
 */
class LivecouponReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $phone;
	
	/**
	 * 
	 */
	private $reward;
	
	public function getPhone() {
		return $this->phone;
	}
	
	public function setPhone($phone) {
		$this->phone = $phone;
		$this->apiParams["phone"] = $phone;
	}
	
	public function getReward() {
		return $this->reward;
	}
	
	public function setReward($reward) {
		$this->reward = $reward;
		$this->apiParams["reward"] = $reward;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.livecoupon.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->phone, 'phone');
		RequestCheckUtil::checkNotNull($this->reward, 'reward');
	}
	
	public function getBizName(){
		return "receiveLivecoupon";
	}
	
}

?>