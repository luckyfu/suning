<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-23
 */
class SystimeGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $aa;
	
	/**
	 * 
	 */
	private $bbb;
	
	public function getAa() {
		return $this->aa;
	}
	
	public function setAa($aa) {
		$this->aa = $aa;
		$this->apiParams["aa"] = $aa;
	}
	
	public function getBbb() {
		return $this->bbb;
	}
	
	public function setBbb($bbb) {
		$this->bbb = $bbb;
		$this->apiParams["bbb"] = $bbb->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.common.systime.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->aa, 'aa');
	}
	
	public function getBizName(){
		return "getSystime";
	}
	
}

class Bbb {

	private $apiParams = array();
	
	private $ccc;
	
	public function getCcc() {
		return $this->ccc;
	}

	public function setCcc($ccc) {
		$this->ccc = $ccc;
		$this->apiParams["ccc"] = $ccc;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>