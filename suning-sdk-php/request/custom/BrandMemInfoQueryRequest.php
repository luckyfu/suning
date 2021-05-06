<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-23
 */
class BrandMemInfoQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $queryEndDate;
	
	/**
	 * 
	 */
	private $queryStartDate;
	
	
	
	public function getQueryEndDate() {
		return $this->queryEndDate;
	}
	
	public function setQueryEndDate($queryEndDate) {
		$this->queryEndDate = $queryEndDate;
		$this->apiParams["queryEndDate"] = $queryEndDate;
	}
	
	public function getQueryStartDate() {
		return $this->queryStartDate;
	}
	
	public function setQueryStartDate($queryStartDate) {
		$this->queryStartDate = $queryStartDate;
		$this->apiParams["queryStartDate"] = $queryStartDate;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.brandmeminfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->queryEndDate, 'queryEndDate');
		RequestCheckUtil::checkNotNull($this->queryStartDate, 'queryStartDate');
	}
	
	public function getBizName(){
		return "queryBrandMemInfo";
	}
	
}

?>