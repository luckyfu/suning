<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-14
 */
class inventoryModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $destInvNum;
	
	/**
	 * 
	 */
	private $invAddrId;
	
	/**
	 * 
	 */
	private $invType;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getDestInvNum() {
		return $this->destInvNum;
	}
	
	public function setDestInvNum($destInvNum) {
		$this->destInvNum = $destInvNum;
		$this->apiParams["destInvNum"] = $destInvNum;
	}
	
	public function getInvAddrId() {
		return $this->invAddrId;
	}
	
	public function setInvAddrId($invAddrId) {
		$this->invAddrId = $invAddrId;
		$this->apiParams["invAddrId"] = $invAddrId;
	}
	
	public function getInvType() {
		return $this->invType;
	}
	
	public function setInvType($invType) {
		$this->invType = $invType;
		$this->apiParams["invType"] = $invType;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.inventory.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->destInvNum, 'destInvNum');
	}
	
	public function getBizName(){
		return "inventory";
	}
	
}

?>