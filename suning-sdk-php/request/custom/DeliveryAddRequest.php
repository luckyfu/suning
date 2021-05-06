<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-23
 */
class DeliveryAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $decoPageIp;
	
	/**
	 * 
	 */
	private $deliveryList;
	
	/**
	 * 
	 */
	private $pageName;
	
	/**
	 * 
	 */
	private $pageType;
	
	/**
	 * 
	 */
	private $serverId;
	
	/**
	 * 
	 */
	private $showPageIp;
	
	public function getDecoPageIp() {
		return $this->decoPageIp;
	}
	
	public function setDecoPageIp($decoPageIp) {
		$this->decoPageIp = $decoPageIp;
		$this->apiParams["decoPageIp"] = $decoPageIp;
	}
	
	public function getDeliveryList() {
		return $this->deliveryList;
	}
	
	public function setDeliveryList($deliveryList) {
		$this->deliveryList = $deliveryList;
		$arr = array();
		foreach ($deliveryList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["deliveryList"] = $arr;
	}
	
	public function getPageName() {
		return $this->pageName;
	}
	
	public function setPageName($pageName) {
		$this->pageName = $pageName;
		$this->apiParams["pageName"] = $pageName;
	}
	
	public function getPageType() {
		return $this->pageType;
	}
	
	public function setPageType($pageType) {
		$this->pageType = $pageType;
		$this->apiParams["pageType"] = $pageType;
	}
	
	public function getServerId() {
		return $this->serverId;
	}
	
	public function setServerId($serverId) {
		$this->serverId = $serverId;
		$this->apiParams["serverId"] = $serverId;
	}
	
	public function getShowPageIp() {
		return $this->showPageIp;
	}
	
	public function setShowPageIp($showPageIp) {
		$this->showPageIp = $showPageIp;
		$this->apiParams["showPageIp"] = $showPageIp;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.delivery.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->decoPageIp, 'decoPageIp');
		RequestCheckUtil::checkNotNull($this->pageName, 'pageName');
		RequestCheckUtil::checkNotNull($this->pageType, 'pageType');
		RequestCheckUtil::checkNotNull($this->serverId, 'serverId');
		RequestCheckUtil::checkNotNull($this->showPageIp, 'showPageIp');
	}
	
	public function getBizName(){
		return "addDelivery";
	}
	
}

class DeliveryList {

	private $apiParams = array();
	
	private $channel;
	
	private $deliveryDesc;
	
	private $deliveryIconUrl;
	
	private $deliveryStatus;
	
	private $deliveryTitle;
	
	private $floatIconUrl;
	
	private $guidePicUrl;
	
	private $posterEndTime;
	
	private $posterStartTime;
	
	private $posterUrl;
	
	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getDeliveryDesc() {
		return $this->deliveryDesc;
	}

	public function setDeliveryDesc($deliveryDesc) {
		$this->deliveryDesc = $deliveryDesc;
		$this->apiParams["deliveryDesc"] = $deliveryDesc;
	}
	
	public function getDeliveryIconUrl() {
		return $this->deliveryIconUrl;
	}

	public function setDeliveryIconUrl($deliveryIconUrl) {
		$this->deliveryIconUrl = $deliveryIconUrl;
		$this->apiParams["deliveryIconUrl"] = $deliveryIconUrl;
	}
	
	public function getDeliveryStatus() {
		return $this->deliveryStatus;
	}

	public function setDeliveryStatus($deliveryStatus) {
		$this->deliveryStatus = $deliveryStatus;
		$this->apiParams["deliveryStatus"] = $deliveryStatus;
	}
	
	public function getDeliveryTitle() {
		return $this->deliveryTitle;
	}

	public function setDeliveryTitle($deliveryTitle) {
		$this->deliveryTitle = $deliveryTitle;
		$this->apiParams["deliveryTitle"] = $deliveryTitle;
	}
	
	public function getFloatIconUrl() {
		return $this->floatIconUrl;
	}

	public function setFloatIconUrl($floatIconUrl) {
		$this->floatIconUrl = $floatIconUrl;
		$this->apiParams["floatIconUrl"] = $floatIconUrl;
	}
	
	public function getGuidePicUrl() {
		return $this->guidePicUrl;
	}

	public function setGuidePicUrl($guidePicUrl) {
		$this->guidePicUrl = $guidePicUrl;
		$this->apiParams["guidePicUrl"] = $guidePicUrl;
	}
	
	public function getPosterEndTime() {
		return $this->posterEndTime;
	}

	public function setPosterEndTime($posterEndTime) {
		$this->posterEndTime = $posterEndTime;
		$this->apiParams["posterEndTime"] = $posterEndTime;
	}
	
	public function getPosterStartTime() {
		return $this->posterStartTime;
	}

	public function setPosterStartTime($posterStartTime) {
		$this->posterStartTime = $posterStartTime;
		$this->apiParams["posterStartTime"] = $posterStartTime;
	}
	
	public function getPosterUrl() {
		return $this->posterUrl;
	}

	public function setPosterUrl($posterUrl) {
		$this->posterUrl = $posterUrl;
		$this->apiParams["posterUrl"] = $posterUrl;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>