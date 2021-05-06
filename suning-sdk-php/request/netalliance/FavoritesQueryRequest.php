<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-1
 */
class FavoritesQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $favoritesid;
	
	/**
	 * 
	 */
	private $pageIndex;
	
	/**
	 * 
	 */
	private $size;
	
	public function getFavoritesid() {
		return $this->favoritesid;
	}
	
	public function setFavoritesid($favoritesid) {
		$this->favoritesid = $favoritesid;
		$this->apiParams["favoritesid"] = $favoritesid;
	}
	
	public function getPageIndex() {
		return $this->pageIndex;
	}
	
	public function setPageIndex($pageIndex) {
		$this->pageIndex = $pageIndex;
		$this->apiParams["pageIndex"] = $pageIndex;
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function setSize($size) {
		$this->size = $size;
		$this->apiParams["size"] = $size;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.favorites.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->favoritesid, 'favoritesid');
	}
	
	public function getBizName(){
		return "queryFavorites";
	}
	
}

?>