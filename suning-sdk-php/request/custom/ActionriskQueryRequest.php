<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-28
 */
class ActionriskQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionType;
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $appType;
	
	/**
	 * 
	 */
	private $appVersion;
	
	/**
	 * 
	 */
	private $cutOrderNum;
	
	/**
	 * 
	 */
	private $detect;
	
	/**
	 * 
	 */
	private $dfpToken;
	
	/**
	 * 
	 */
	private $giftPickType;
	
	/**
	 * 
	 */
	private $inviteSnUnionId;
	
	/**
	 * 
	 */
	private $miniSource;
	
	/**
	 * 
	 */
	private $referenceURL;
	
	/**
	 * 
	 */
	private $serialNo;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $termiSys;
	
	/**
	 * 
	 */
	private $termiType;
	
	/**
	 * 
	 */
	private $token;
	
	/**
	 * 
	 */
	private $valiNo;
	
	public function getActionType() {
		return $this->actionType;
	}
	
	public function setActionType($actionType) {
		$this->actionType = $actionType;
		$this->apiParams["actionType"] = $actionType;
	}
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getAppType() {
		return $this->appType;
	}
	
	public function setAppType($appType) {
		$this->appType = $appType;
		$this->apiParams["appType"] = $appType;
	}
	
	public function getAppVersion() {
		return $this->appVersion;
	}
	
	public function setAppVersion($appVersion) {
		$this->appVersion = $appVersion;
		$this->apiParams["appVersion"] = $appVersion;
	}
	
	public function getCutOrderNum() {
		return $this->cutOrderNum;
	}
	
	public function setCutOrderNum($cutOrderNum) {
		$this->cutOrderNum = $cutOrderNum;
		$this->apiParams["cutOrderNum"] = $cutOrderNum;
	}
	
	public function getDetect() {
		return $this->detect;
	}
	
	public function setDetect($detect) {
		$this->detect = $detect;
		$this->apiParams["detect"] = $detect;
	}
	
	public function getDfpToken() {
		return $this->dfpToken;
	}
	
	public function setDfpToken($dfpToken) {
		$this->dfpToken = $dfpToken;
		$this->apiParams["dfpToken"] = $dfpToken;
	}
	
	public function getGiftPickType() {
		return $this->giftPickType;
	}
	
	public function setGiftPickType($giftPickType) {
		$this->giftPickType = $giftPickType;
		$this->apiParams["giftPickType"] = $giftPickType;
	}
	
	public function getInviteSnUnionId() {
		return $this->inviteSnUnionId;
	}
	
	public function setInviteSnUnionId($inviteSnUnionId) {
		$this->inviteSnUnionId = $inviteSnUnionId;
		$this->apiParams["inviteSnUnionId"] = $inviteSnUnionId;
	}
	
	public function getMiniSource() {
		return $this->miniSource;
	}
	
	public function setMiniSource($miniSource) {
		$this->miniSource = $miniSource;
		$this->apiParams["miniSource"] = $miniSource;
	}
	
	public function getReferenceURL() {
		return $this->referenceURL;
	}
	
	public function setReferenceURL($referenceURL) {
		$this->referenceURL = $referenceURL;
		$this->apiParams["referenceURL"] = $referenceURL;
	}
	
	public function getSerialNo() {
		return $this->serialNo;
	}
	
	public function setSerialNo($serialNo) {
		$this->serialNo = $serialNo;
		$this->apiParams["serialNo"] = $serialNo;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getTermiSys() {
		return $this->termiSys;
	}
	
	public function setTermiSys($termiSys) {
		$this->termiSys = $termiSys;
		$this->apiParams["termiSys"] = $termiSys;
	}
	
	public function getTermiType() {
		return $this->termiType;
	}
	
	public function setTermiType($termiType) {
		$this->termiType = $termiType;
		$this->apiParams["termiType"] = $termiType;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getValiNo() {
		return $this->valiNo;
	}
	
	public function setValiNo($valiNo) {
		$this->valiNo = $valiNo;
		$this->apiParams["valiNo"] = $valiNo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.actionrisk.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionType, 'actionType');
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->appType, 'appType');
		RequestCheckUtil::checkNotNull($this->detect, 'detect');
		RequestCheckUtil::checkNotNull($this->dfpToken, 'dfpToken');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->termiSys, 'termiSys');
		RequestCheckUtil::checkNotNull($this->termiType, 'termiType');
	}
	
	public function getBizName(){
		return "queryActionrisk";
	}
	
}

?>