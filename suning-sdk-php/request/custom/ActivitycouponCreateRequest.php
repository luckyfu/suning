<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-11
 */
class ActivitycouponCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityProductList;
	
	/**
	 * 
	 */
	private $activityTimesLimit;
	
	/**
	 * 
	 */
	private $assignedRole;
	
	/**
	 * 
	 */
	private $baseAmount;
	
	/**
	 * 
	 */
	private $couponType;
	
	/**
	 * 
	 */
	private $effectEndTime;
	
	/**
	 * 
	 */
	private $effectStartTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $isShop;
	
	/**
	 * 
	 */
	private $rewardAmount;
	
	/**
	 * 
	 */
	private $shopCode;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityProductList() {
		return $this->activityProductList;
	}
	
	public function setActivityProductList($activityProductList) {
		$this->activityProductList = $activityProductList;
		$arr = array();
		foreach ($activityProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityProductList"] = $arr;
	}
	
	public function getActivityTimesLimit() {
		return $this->activityTimesLimit;
	}
	
	public function setActivityTimesLimit($activityTimesLimit) {
		$this->activityTimesLimit = $activityTimesLimit;
		$this->apiParams["activityTimesLimit"] = $activityTimesLimit;
	}
	
	public function getAssignedRole() {
		return $this->assignedRole;
	}
	
	public function setAssignedRole($assignedRole) {
		$this->assignedRole = $assignedRole;
		$this->apiParams["assignedRole"] = $assignedRole;
	}
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}
	
	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}
	
	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getEffectEndTime() {
		return $this->effectEndTime;
	}
	
	public function setEffectEndTime($effectEndTime) {
		$this->effectEndTime = $effectEndTime;
		$this->apiParams["effectEndTime"] = $effectEndTime;
	}
	
	public function getEffectStartTime() {
		return $this->effectStartTime;
	}
	
	public function setEffectStartTime($effectStartTime) {
		$this->effectStartTime = $effectStartTime;
		$this->apiParams["effectStartTime"] = $effectStartTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getIsShop() {
		return $this->isShop;
	}
	
	public function setIsShop($isShop) {
		$this->isShop = $isShop;
		$this->apiParams["isShop"] = $isShop;
	}
	
	public function getRewardAmount() {
		return $this->rewardAmount;
	}
	
	public function setRewardAmount($rewardAmount) {
		$this->rewardAmount = $rewardAmount;
		$this->apiParams["rewardAmount"] = $rewardAmount;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activitycoupon.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->activityTimesLimit, 'activityTimesLimit');
		RequestCheckUtil::checkNotNull($this->assignedRole, 'assignedRole');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->couponType, 'couponType');
		RequestCheckUtil::checkNotNull($this->effectEndTime, 'effectEndTime');
		RequestCheckUtil::checkNotNull($this->effectStartTime, 'effectStartTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createActivitycoupon";
	}
	
}

class ActivityProductList {

	private $apiParams = array();
	
	private $productCode;
	
	private $productType;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductType() {
		return $this->productType;
	}

	public function setProductType($productType) {
		$this->productType = $productType;
		$this->apiParams["productType"] = $productType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>