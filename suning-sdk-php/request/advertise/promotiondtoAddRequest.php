<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-29
 */
class promotiondtoAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cpcDayAmount;
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $promotionType;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $throwArea;
	
	/**
	 * 
	 */
	private $throwControl;
	
	/**
	 * 
	 */
	private $throwRebate;
	
	/**
	 * 
	 */
	private $throwTime;
	
	public function getCpcDayAmount() {
		return $this->cpcDayAmount;
	}
	
	public function setCpcDayAmount($cpcDayAmount) {
		$this->cpcDayAmount = $cpcDayAmount;
		$this->apiParams["cpcDayAmount"] = $cpcDayAmount->getApiParams();
	}
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getPromotionType() {
		return $this->promotionType;
	}
	
	public function setPromotionType($promotionType) {
		$this->promotionType = $promotionType;
		$this->apiParams["promotionType"] = $promotionType;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getThrowArea() {
		return $this->throwArea;
	}
	
	public function setThrowArea($throwArea) {
		$this->throwArea = $throwArea;
		$this->apiParams["throwArea"] = $throwArea;
	}
	
	public function getThrowControl() {
		return $this->throwControl;
	}
	
	public function setThrowControl($throwControl) {
		$this->throwControl = $throwControl;
		$arr = array();
		foreach ($throwControl as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["throwControl"] = $arr;
	}
	
	public function getThrowRebate() {
		return $this->throwRebate;
	}
	
	public function setThrowRebate($throwRebate) {
		$this->throwRebate = $throwRebate;
		$this->apiParams["throwRebate"] = $throwRebate;
	}
	
	public function getThrowTime() {
		return $this->throwTime;
	}
	
	public function setThrowTime($throwTime) {
		$this->throwTime = $throwTime;
		$this->apiParams["throwTime"] = $throwTime;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotion.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->promotionType, 'promotionType');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->throwArea, 'throwArea');
		RequestCheckUtil::checkNotNull($this->throwRebate, 'throwRebate');
		RequestCheckUtil::checkNotNull($this->throwTime, 'throwTime');
	}
	
	public function getBizName(){
		return "promotiondto";
	}
	
}

class ThrowControl {

	private $apiParams = array();
	
	private $positionType;
	
	private $throwDiscount;
	
	public function getPositionType() {
		return $this->positionType;
	}

	public function setPositionType($positionType) {
		$this->positionType = $positionType;
		$this->apiParams["positionType"] = $positionType;
	}
	
	public function getThrowDiscount() {
		return $this->throwDiscount;
	}

	public function setThrowDiscount($throwDiscount) {
		$this->throwDiscount = $throwDiscount;
		$this->apiParams["throwDiscount"] = $throwDiscount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CpcDayAmount {

	private $apiParams = array();
	
	private $customData;
	
	private $defaultUserLimitAmount;
	
	public function getCustomData() {
		return $this->customData;
	}

	public function setCustomData($customData) {
		$this->customData = $customData;
		$arr = array();
		foreach ($customData as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["customData"] = $arr;
	}
	
	public function getDefaultUserLimitAmount() {
		return $this->defaultUserLimitAmount;
	}

	public function setDefaultUserLimitAmount($defaultUserLimitAmount) {
		$this->defaultUserLimitAmount = $defaultUserLimitAmount;
		$this->apiParams["defaultUserLimitAmount"] = $defaultUserLimitAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CustomData {

	private $apiParams = array();
	
	private $date;
	
	private $userLimitAmount;
	
	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date = $date;
		$this->apiParams["date"] = $date;
	}
	
	public function getUserLimitAmount() {
		return $this->userLimitAmount;
	}

	public function setUserLimitAmount($userLimitAmount) {
		$this->userLimitAmount = $userLimitAmount;
		$this->apiParams["userLimitAmount"] = $userLimitAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>