<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-29
 */
class QueryuserpromotionsourceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $pageSizer;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getPageSizer() {
		return $this->pageSizer;
	}
	
	public function setPageSizer($pageSizer) {
		$this->pageSizer = $pageSizer;
		$this->apiParams["pageSizer"] = $pageSizer;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.queryuserpromotionsource.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->pageNum, 'pageNum');
		RequestCheckUtil::checkNotNull($this->pageSizer, 'pageSizer');
	}
	
	public function getBizName(){
		return "queryQueryuserpromotionsource";
	}
	
}

?>