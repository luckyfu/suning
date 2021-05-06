<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-23
 */
class ConfirmgoodsAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.confirmgoods.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
	}
	
	public function getBizName(){
		return "addConfirmgoods";
	}
	
}

?>