<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-18
 */
class UpdatepromotionUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionDto;
	
	public function getPromotionDto() {
		return $this->promotionDto;
	}
	
	public function setPromotionDto($promotionDto) {
		$this->promotionDto = $promotionDto;
		$this->apiParams["promotionDto"] = $promotionDto->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotion.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "updateUpdatepromotion";
	}
	
}

class PromotionDto {

	private $apiParams = array();
	
	private $cpcDayAmount;
	
	private $custnum;
	
	private $endDate;
	
	private $name;
	
	private $promotionId;
	
	private $startDate;
	
	private $throwArea;
	
	private $throwControl;
	
	private $throwRebate;
	
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
	
	public function getPromotionId() {
		return $this->promotionId;
	}

	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
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
	
	public function getApiParams(){
		return $this->apiParams;
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