<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-31
 */
class EffectdataAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $activityPv;
	
	/**
	 * 
	 */
	private $activityUv;
	
	/**
	 * 
	 */
	private $cloudDiamondCount;
	
	/**
	 * 
	 */
	private $date;
	
	/**
	 * 
	 */
	private $helpCount;
	
	/**
	 * 
	 */
	private $initInvitationCount;
	
	/**
	 * 
	 */
	private $newJoinedCount;
	
	/**
	 * 
	 */
	private $storeEffectList;
	
	/**
	 * 
	 */
	private $xhJoinedCount;
	
	/**
	 * 
	 */
	private $xhNewJoinedCount;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getActivityPv() {
		return $this->activityPv;
	}
	
	public function setActivityPv($activityPv) {
		$this->activityPv = $activityPv;
		$this->apiParams["activityPv"] = $activityPv;
	}
	
	public function getActivityUv() {
		return $this->activityUv;
	}
	
	public function setActivityUv($activityUv) {
		$this->activityUv = $activityUv;
		$this->apiParams["activityUv"] = $activityUv;
	}
	
	public function getCloudDiamondCount() {
		return $this->cloudDiamondCount;
	}
	
	public function setCloudDiamondCount($cloudDiamondCount) {
		$this->cloudDiamondCount = $cloudDiamondCount;
		$this->apiParams["cloudDiamondCount"] = $cloudDiamondCount;
	}
	
	public function getDate() {
		return $this->date;
	}
	
	public function setDate($date) {
		$this->date = $date;
		$this->apiParams["date"] = $date;
	}
	
	public function getHelpCount() {
		return $this->helpCount;
	}
	
	public function setHelpCount($helpCount) {
		$this->helpCount = $helpCount;
		$this->apiParams["helpCount"] = $helpCount;
	}
	
	public function getInitInvitationCount() {
		return $this->initInvitationCount;
	}
	
	public function setInitInvitationCount($initInvitationCount) {
		$this->initInvitationCount = $initInvitationCount;
		$this->apiParams["initInvitationCount"] = $initInvitationCount;
	}
	
	public function getNewJoinedCount() {
		return $this->newJoinedCount;
	}
	
	public function setNewJoinedCount($newJoinedCount) {
		$this->newJoinedCount = $newJoinedCount;
		$this->apiParams["newJoinedCount"] = $newJoinedCount;
	}
	
	public function getStoreEffectList() {
		return $this->storeEffectList;
	}
	
	public function setStoreEffectList($storeEffectList) {
		$this->storeEffectList = $storeEffectList;
		$arr = array();
		foreach ($storeEffectList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["storeEffectList"] = $arr;
	}
	
	public function getXhJoinedCount() {
		return $this->xhJoinedCount;
	}
	
	public function setXhJoinedCount($xhJoinedCount) {
		$this->xhJoinedCount = $xhJoinedCount;
		$this->apiParams["xhJoinedCount"] = $xhJoinedCount;
	}
	
	public function getXhNewJoinedCount() {
		return $this->xhNewJoinedCount;
	}
	
	public function setXhNewJoinedCount($xhNewJoinedCount) {
		$this->xhNewJoinedCount = $xhNewJoinedCount;
		$this->apiParams["xhNewJoinedCount"] = $xhNewJoinedCount;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.effectdata.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->date, 'date');
	}
	
	public function getBizName(){
		return "addEffectdata";
	}
	
}

class GoodsEffectList {

	private $apiParams = array();
	
	private $goodsCode;
	
	private $goodsName;
	
	private $scanGoodsCount;
	
	private $scanGoodsNewUserCount;
	
	private $scanGoodsUserCount;
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}

	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getGoodsName() {
		return $this->goodsName;
	}

	public function setGoodsName($goodsName) {
		$this->goodsName = $goodsName;
		$this->apiParams["goodsName"] = $goodsName;
	}
	
	public function getScanGoodsCount() {
		return $this->scanGoodsCount;
	}

	public function setScanGoodsCount($scanGoodsCount) {
		$this->scanGoodsCount = $scanGoodsCount;
		$this->apiParams["scanGoodsCount"] = $scanGoodsCount;
	}
	
	public function getScanGoodsNewUserCount() {
		return $this->scanGoodsNewUserCount;
	}

	public function setScanGoodsNewUserCount($scanGoodsNewUserCount) {
		$this->scanGoodsNewUserCount = $scanGoodsNewUserCount;
		$this->apiParams["scanGoodsNewUserCount"] = $scanGoodsNewUserCount;
	}
	
	public function getScanGoodsUserCount() {
		return $this->scanGoodsUserCount;
	}

	public function setScanGoodsUserCount($scanGoodsUserCount) {
		$this->scanGoodsUserCount = $scanGoodsUserCount;
		$this->apiParams["scanGoodsUserCount"] = $scanGoodsUserCount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class StoreEffectList {

	private $apiParams = array();
	
	private $couponCount;
	
	private $goodsEffectList;
	
	private $joinedCount;
	
	private $newFansCount;
	
	private $newMemberCount;
	
	private $scanStoreCount;
	
	private $scanStoreNewUserCount;
	
	private $scanStoreUserCount;
	
	private $storeCode;
	
	private $storeName;
	
	private $storeNewJoinedCount;
	
	public function getCouponCount() {
		return $this->couponCount;
	}

	public function setCouponCount($couponCount) {
		$this->couponCount = $couponCount;
		$this->apiParams["couponCount"] = $couponCount;
	}
	
	public function getGoodsEffectList() {
		return $this->goodsEffectList;
	}

	public function setGoodsEffectList($goodsEffectList) {
		$this->goodsEffectList = $goodsEffectList;
		$arr = array();
		foreach ($goodsEffectList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["goodsEffectList"] = $arr;
	}
	
	public function getJoinedCount() {
		return $this->joinedCount;
	}

	public function setJoinedCount($joinedCount) {
		$this->joinedCount = $joinedCount;
		$this->apiParams["joinedCount"] = $joinedCount;
	}
	
	public function getNewFansCount() {
		return $this->newFansCount;
	}

	public function setNewFansCount($newFansCount) {
		$this->newFansCount = $newFansCount;
		$this->apiParams["newFansCount"] = $newFansCount;
	}
	
	public function getNewMemberCount() {
		return $this->newMemberCount;
	}

	public function setNewMemberCount($newMemberCount) {
		$this->newMemberCount = $newMemberCount;
		$this->apiParams["newMemberCount"] = $newMemberCount;
	}
	
	public function getScanStoreCount() {
		return $this->scanStoreCount;
	}

	public function setScanStoreCount($scanStoreCount) {
		$this->scanStoreCount = $scanStoreCount;
		$this->apiParams["scanStoreCount"] = $scanStoreCount;
	}
	
	public function getScanStoreNewUserCount() {
		return $this->scanStoreNewUserCount;
	}

	public function setScanStoreNewUserCount($scanStoreNewUserCount) {
		$this->scanStoreNewUserCount = $scanStoreNewUserCount;
		$this->apiParams["scanStoreNewUserCount"] = $scanStoreNewUserCount;
	}
	
	public function getScanStoreUserCount() {
		return $this->scanStoreUserCount;
	}

	public function setScanStoreUserCount($scanStoreUserCount) {
		$this->scanStoreUserCount = $scanStoreUserCount;
		$this->apiParams["scanStoreUserCount"] = $scanStoreUserCount;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}

	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->apiParams["storeName"] = $storeName;
	}
	
	public function getStoreNewJoinedCount() {
		return $this->storeNewJoinedCount;
	}

	public function setStoreNewJoinedCount($storeNewJoinedCount) {
		$this->storeNewJoinedCount = $storeNewJoinedCount;
		$this->apiParams["storeNewJoinedCount"] = $storeNewJoinedCount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>