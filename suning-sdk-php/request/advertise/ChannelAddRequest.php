<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-30
 */
class ChannelAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $mediaInputs;
	
	/**
	 * 
	 */
	private $storeType;
	
	public function getMediaInputs() {
		return $this->mediaInputs;
	}
	
	public function setMediaInputs($mediaInputs) {
		$this->mediaInputs = $mediaInputs;
		$arr = array();
		foreach ($mediaInputs as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["mediaInputs"] = $arr;
	}
	
	public function getStoreType() {
		return $this->storeType;
	}
	
	public function setStoreType($storeType) {
		$this->storeType = $storeType;
		$this->apiParams["storeType"] = $storeType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.channel.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->storeType, 'storeType');
	}
	
	public function getBizName(){
		return "addChannel";
	}
	
}

class MediaInputs {

	private $apiParams = array();
	
	private $address;
	
	private $areaName;
	
	private $buildingNumber;
	
	private $businessHours;
	
	private $categoryCode;
	
	private $cityName;
	
	private $contractNumber;
	
	private $coverNumber;
	
	private $cpmPrice;
	
	private $cptMaxPlayTimes;
	
	private $cptMediaMode;
	
	private $cptPlayTimes;
	
	private $cptPrice;
	
	private $cptPublishDates;
	
	private $cptSalesTimes;
	
	private $detailedLocation;
	
	private $duration;
	
	private $floor;
	
	private $floorSpace;
	
	private $height;
	
	private $isVertical;
	
	private $isVoice;
	
	private $latitude;
	
	private $length;
	
	private $longitude;
	
	private $materialSize;
	
	private $materialTime;
	
	private $mediaId;
	
	private $mediaNumber;
	
	private $mediaPicture;
	
	private $mediaPlayDuration;
	
	private $operate;
	
	private $parkingSpace;
	
	private $passengerNumber;
	
	private $price;
	
	private $prohibitedContent;
	
	private $propertyCosts;
	
	private $provinceName;
	
	private $remarks;
	
	private $resolution;
	
	private $salesType;
	
	private $screenPosition;
	
	private $senceId;
	
	private $shopName;
	
	private $shopNumber;
	
	private $shopProperty;
	
	private $showPosition;
	
	private $storeTypes;
	
	private $unitCount;
	
	private $unitNumber;
	
	private $width;
	
	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getAreaName() {
		return $this->areaName;
	}

	public function setAreaName($areaName) {
		$this->areaName = $areaName;
		$this->apiParams["areaName"] = $areaName;
	}
	
	public function getBuildingNumber() {
		return $this->buildingNumber;
	}

	public function setBuildingNumber($buildingNumber) {
		$this->buildingNumber = $buildingNumber;
		$this->apiParams["buildingNumber"] = $buildingNumber;
	}
	
	public function getBusinessHours() {
		return $this->businessHours;
	}

	public function setBusinessHours($businessHours) {
		$this->businessHours = $businessHours;
		$this->apiParams["businessHours"] = $businessHours;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}

	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getCityName() {
		return $this->cityName;
	}

	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getContractNumber() {
		return $this->contractNumber;
	}

	public function setContractNumber($contractNumber) {
		$this->contractNumber = $contractNumber;
		$this->apiParams["contractNumber"] = $contractNumber;
	}
	
	public function getCoverNumber() {
		return $this->coverNumber;
	}

	public function setCoverNumber($coverNumber) {
		$this->coverNumber = $coverNumber;
		$this->apiParams["coverNumber"] = $coverNumber;
	}
	
	public function getCpmPrice() {
		return $this->cpmPrice;
	}

	public function setCpmPrice($cpmPrice) {
		$this->cpmPrice = $cpmPrice;
		$this->apiParams["cpmPrice"] = $cpmPrice;
	}
	
	public function getCptMaxPlayTimes() {
		return $this->cptMaxPlayTimes;
	}

	public function setCptMaxPlayTimes($cptMaxPlayTimes) {
		$this->cptMaxPlayTimes = $cptMaxPlayTimes;
		$this->apiParams["cptMaxPlayTimes"] = $cptMaxPlayTimes;
	}
	
	public function getCptMediaMode() {
		return $this->cptMediaMode;
	}

	public function setCptMediaMode($cptMediaMode) {
		$this->cptMediaMode = $cptMediaMode;
		$this->apiParams["cptMediaMode"] = $cptMediaMode;
	}
	
	public function getCptPlayTimes() {
		return $this->cptPlayTimes;
	}

	public function setCptPlayTimes($cptPlayTimes) {
		$this->cptPlayTimes = $cptPlayTimes;
		$this->apiParams["cptPlayTimes"] = $cptPlayTimes;
	}
	
	public function getCptPrice() {
		return $this->cptPrice;
	}

	public function setCptPrice($cptPrice) {
		$this->cptPrice = $cptPrice;
		$this->apiParams["cptPrice"] = $cptPrice;
	}
	
	public function getCptPublishDates() {
		return $this->cptPublishDates;
	}

	public function setCptPublishDates($cptPublishDates) {
		$this->cptPublishDates = $cptPublishDates;
		$this->apiParams["cptPublishDates"] = $cptPublishDates;
	}
	
	public function getCptSalesTimes() {
		return $this->cptSalesTimes;
	}

	public function setCptSalesTimes($cptSalesTimes) {
		$this->cptSalesTimes = $cptSalesTimes;
		$this->apiParams["cptSalesTimes"] = $cptSalesTimes;
	}
	
	public function getDetailedLocation() {
		return $this->detailedLocation;
	}

	public function setDetailedLocation($detailedLocation) {
		$this->detailedLocation = $detailedLocation;
		$this->apiParams["detailedLocation"] = $detailedLocation;
	}
	
	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		$this->apiParams["duration"] = $duration;
	}
	
	public function getFloor() {
		return $this->floor;
	}

	public function setFloor($floor) {
		$this->floor = $floor;
		$this->apiParams["floor"] = $floor;
	}
	
	public function getFloorSpace() {
		return $this->floorSpace;
	}

	public function setFloorSpace($floorSpace) {
		$this->floorSpace = $floorSpace;
		$this->apiParams["floorSpace"] = $floorSpace;
	}
	
	public function getHeight() {
		return $this->height;
	}

	public function setHeight($height) {
		$this->height = $height;
		$this->apiParams["height"] = $height;
	}
	
	public function getIsVertical() {
		return $this->isVertical;
	}

	public function setIsVertical($isVertical) {
		$this->isVertical = $isVertical;
		$this->apiParams["isVertical"] = $isVertical;
	}
	
	public function getIsVoice() {
		return $this->isVoice;
	}

	public function setIsVoice($isVoice) {
		$this->isVoice = $isVoice;
		$this->apiParams["isVoice"] = $isVoice;
	}
	
	public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		$this->apiParams["latitude"] = $latitude;
	}
	
	public function getLength() {
		return $this->length;
	}

	public function setLength($length) {
		$this->length = $length;
		$this->apiParams["length"] = $length;
	}
	
	public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		$this->apiParams["longitude"] = $longitude;
	}
	
	public function getMaterialSize() {
		return $this->materialSize;
	}

	public function setMaterialSize($materialSize) {
		$this->materialSize = $materialSize;
		$this->apiParams["materialSize"] = $materialSize;
	}
	
	public function getMaterialTime() {
		return $this->materialTime;
	}

	public function setMaterialTime($materialTime) {
		$this->materialTime = $materialTime;
		$this->apiParams["materialTime"] = $materialTime;
	}
	
	public function getMediaId() {
		return $this->mediaId;
	}

	public function setMediaId($mediaId) {
		$this->mediaId = $mediaId;
		$this->apiParams["mediaId"] = $mediaId;
	}
	
	public function getMediaNumber() {
		return $this->mediaNumber;
	}

	public function setMediaNumber($mediaNumber) {
		$this->mediaNumber = $mediaNumber;
		$this->apiParams["mediaNumber"] = $mediaNumber;
	}
	
	public function getMediaPicture() {
		return $this->mediaPicture;
	}

	public function setMediaPicture($mediaPicture) {
		$this->mediaPicture = $mediaPicture;
		$this->apiParams["mediaPicture"] = $mediaPicture;
	}
	
	public function getMediaPlayDuration() {
		return $this->mediaPlayDuration;
	}

	public function setMediaPlayDuration($mediaPlayDuration) {
		$this->mediaPlayDuration = $mediaPlayDuration;
		$this->apiParams["mediaPlayDuration"] = $mediaPlayDuration;
	}
	
	public function getOperate() {
		return $this->operate;
	}

	public function setOperate($operate) {
		$this->operate = $operate;
		$this->apiParams["operate"] = $operate;
	}
	
	public function getParkingSpace() {
		return $this->parkingSpace;
	}

	public function setParkingSpace($parkingSpace) {
		$this->parkingSpace = $parkingSpace;
		$this->apiParams["parkingSpace"] = $parkingSpace;
	}
	
	public function getPassengerNumber() {
		return $this->passengerNumber;
	}

	public function setPassengerNumber($passengerNumber) {
		$this->passengerNumber = $passengerNumber;
		$this->apiParams["passengerNumber"] = $passengerNumber;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getProhibitedContent() {
		return $this->prohibitedContent;
	}

	public function setProhibitedContent($prohibitedContent) {
		$this->prohibitedContent = $prohibitedContent;
		$this->apiParams["prohibitedContent"] = $prohibitedContent;
	}
	
	public function getPropertyCosts() {
		return $this->propertyCosts;
	}

	public function setPropertyCosts($propertyCosts) {
		$this->propertyCosts = $propertyCosts;
		$this->apiParams["propertyCosts"] = $propertyCosts;
	}
	
	public function getProvinceName() {
		return $this->provinceName;
	}

	public function setProvinceName($provinceName) {
		$this->provinceName = $provinceName;
		$this->apiParams["provinceName"] = $provinceName;
	}
	
	public function getRemarks() {
		return $this->remarks;
	}

	public function setRemarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParams["remarks"] = $remarks;
	}
	
	public function getResolution() {
		return $this->resolution;
	}

	public function setResolution($resolution) {
		$this->resolution = $resolution;
		$this->apiParams["resolution"] = $resolution;
	}
	
	public function getSalesType() {
		return $this->salesType;
	}

	public function setSalesType($salesType) {
		$this->salesType = $salesType;
		$this->apiParams["salesType"] = $salesType;
	}
	
	public function getScreenPosition() {
		return $this->screenPosition;
	}

	public function setScreenPosition($screenPosition) {
		$this->screenPosition = $screenPosition;
		$this->apiParams["screenPosition"] = $screenPosition;
	}
	
	public function getSenceId() {
		return $this->senceId;
	}

	public function setSenceId($senceId) {
		$this->senceId = $senceId;
		$this->apiParams["senceId"] = $senceId;
	}
	
	public function getShopName() {
		return $this->shopName;
	}

	public function setShopName($shopName) {
		$this->shopName = $shopName;
		$this->apiParams["shopName"] = $shopName;
	}
	
	public function getShopNumber() {
		return $this->shopNumber;
	}

	public function setShopNumber($shopNumber) {
		$this->shopNumber = $shopNumber;
		$this->apiParams["shopNumber"] = $shopNumber;
	}
	
	public function getShopProperty() {
		return $this->shopProperty;
	}

	public function setShopProperty($shopProperty) {
		$this->shopProperty = $shopProperty;
		$this->apiParams["shopProperty"] = $shopProperty;
	}
	
	public function getShowPosition() {
		return $this->showPosition;
	}

	public function setShowPosition($showPosition) {
		$this->showPosition = $showPosition;
		$this->apiParams["showPosition"] = $showPosition;
	}
	
	public function getStoreTypes() {
		return $this->storeTypes;
	}

	public function setStoreTypes($storeTypes) {
		$this->storeTypes = $storeTypes;
		$this->apiParams["storeTypes"] = $storeTypes;
	}
	
	public function getUnitCount() {
		return $this->unitCount;
	}

	public function setUnitCount($unitCount) {
		$this->unitCount = $unitCount;
		$this->apiParams["unitCount"] = $unitCount;
	}
	
	public function getUnitNumber() {
		return $this->unitNumber;
	}

	public function setUnitNumber($unitNumber) {
		$this->unitNumber = $unitNumber;
		$this->apiParams["unitNumber"] = $unitNumber;
	}
	
	public function getWidth() {
		return $this->width;
	}

	public function setWidth($width) {
		$this->width = $width;
		$this->apiParams["width"] = $width;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>