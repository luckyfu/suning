<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-15
 */
class OrdersubmitCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $platFormTrade;
	
	public function getPlatFormTrade() {
		return $this->platFormTrade;
	}
	
	public function setPlatFormTrade($platFormTrade) {
		$this->platFormTrade = $platFormTrade;
		$this->apiParams["platFormTrade"] = $platFormTrade->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.enable.ordersubmit.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createOrdersubmit";
	}
	
}

class CouponInfo {

	private $apiParams = array();
	
	private $couponAmount;
	
	private $couponCode;
	
	private $couponName;
	
	private $couponType;
	
	public function getCouponAmount() {
		return $this->couponAmount;
	}

	public function setCouponAmount($couponAmount) {
		$this->couponAmount = $couponAmount;
		$this->apiParams["couponAmount"] = $couponAmount;
	}
	
	public function getCouponCode() {
		return $this->couponCode;
	}

	public function setCouponCode($couponCode) {
		$this->couponCode = $couponCode;
		$this->apiParams["couponCode"] = $couponCode;
	}
	
	public function getCouponName() {
		return $this->couponName;
	}

	public function setCouponName($couponName) {
		$this->couponName = $couponName;
		$this->apiParams["couponName"] = $couponName;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}

	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CollectionInfo {

	private $apiParams = array();
	
	private $collectionCode;
	
	private $collectionSort;
	
	private $collectionType;
	
	public function getCollectionCode() {
		return $this->collectionCode;
	}

	public function setCollectionCode($collectionCode) {
		$this->collectionCode = $collectionCode;
		$this->apiParams["collectionCode"] = $collectionCode;
	}
	
	public function getCollectionSort() {
		return $this->collectionSort;
	}

	public function setCollectionSort($collectionSort) {
		$this->collectionSort = $collectionSort;
		$this->apiParams["collectionSort"] = $collectionSort;
	}
	
	public function getCollectionType() {
		return $this->collectionType;
	}

	public function setCollectionType($collectionType) {
		$this->collectionType = $collectionType;
		$this->apiParams["collectionType"] = $collectionType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PlatFormTrade {

	private $apiParams = array();
	
	private $businessType;
	
	private $chanId;
	
	private $memberNo;
	
	private $orderId;
	
	private $orderTime;
	
	private $orderType;
	
	private $payment;
	
	private $platFormOrder;
	
	private $receiverAddress;
	
	private $receiverCityName;
	
	private $receiverCountyName;
	
	private $receiverMobile;
	
	private $receiverName;
	
	private $receiverNationality;
	
	private $receiverPhone;
	
	private $receiverProvinceName;
	
	private $receiverStreetName;
	
	private $receiverZip;
	
	private $shopId;
	
	private $totalNo;
	
	public function getBusinessType() {
		return $this->businessType;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getChanId() {
		return $this->chanId;
	}

	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}

	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}

	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getPayment() {
		return $this->payment;
	}

	public function setPayment($payment) {
		$this->payment = $payment;
		$this->apiParams["payment"] = $payment;
	}
	
	public function getPlatFormOrder() {
		return $this->platFormOrder;
	}

	public function setPlatFormOrder($platFormOrder) {
		$this->platFormOrder = $platFormOrder;
		$arr = array();
		foreach ($platFormOrder as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["platFormOrder"] = $arr;
	}
	
	public function getReceiverAddress() {
		return $this->receiverAddress;
	}

	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->apiParams["receiverAddress"] = $receiverAddress;
	}
	
	public function getReceiverCityName() {
		return $this->receiverCityName;
	}

	public function setReceiverCityName($receiverCityName) {
		$this->receiverCityName = $receiverCityName;
		$this->apiParams["receiverCityName"] = $receiverCityName;
	}
	
	public function getReceiverCountyName() {
		return $this->receiverCountyName;
	}

	public function setReceiverCountyName($receiverCountyName) {
		$this->receiverCountyName = $receiverCountyName;
		$this->apiParams["receiverCountyName"] = $receiverCountyName;
	}
	
	public function getReceiverMobile() {
		return $this->receiverMobile;
	}

	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->apiParams["receiverMobile"] = $receiverMobile;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}

	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getReceiverNationality() {
		return $this->receiverNationality;
	}

	public function setReceiverNationality($receiverNationality) {
		$this->receiverNationality = $receiverNationality;
		$this->apiParams["receiverNationality"] = $receiverNationality;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}

	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getReceiverProvinceName() {
		return $this->receiverProvinceName;
	}

	public function setReceiverProvinceName($receiverProvinceName) {
		$this->receiverProvinceName = $receiverProvinceName;
		$this->apiParams["receiverProvinceName"] = $receiverProvinceName;
	}
	
	public function getReceiverStreetName() {
		return $this->receiverStreetName;
	}

	public function setReceiverStreetName($receiverStreetName) {
		$this->receiverStreetName = $receiverStreetName;
		$this->apiParams["receiverStreetName"] = $receiverStreetName;
	}
	
	public function getReceiverZip() {
		return $this->receiverZip;
	}

	public function setReceiverZip($receiverZip) {
		$this->receiverZip = $receiverZip;
		$this->apiParams["receiverZip"] = $receiverZip;
	}
	
	public function getShopId() {
		return $this->shopId;
	}

	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getTotalNo() {
		return $this->totalNo;
	}

	public function setTotalNo($totalNo) {
		$this->totalNo = $totalNo;
		$this->apiParams["totalNo"] = $totalNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PlatFormOrder {

	private $apiParams = array();
	
	private $activityInfo;
	
	private $businessSign;
	
	private $collectionInfo;
	
	private $couponInfo;
	
	private $fullReductionInfo;
	
	private $orderItemId;
	
	private $orderPayment;
	
	private $payInfo;
	
	private $postage;
	
	private $price;
	
	private $saleNum;
	
	private $skuId;
	
	private $snSkuId;
	
	private $supplierCode;
	
	private $totalFee;
	
	public function getActivityInfo() {
		return $this->activityInfo;
	}

	public function setActivityInfo($activityInfo) {
		$this->activityInfo = $activityInfo;
		$arr = array();
		foreach ($activityInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityInfo"] = $arr;
	}
	
	public function getBusinessSign() {
		return $this->businessSign;
	}

	public function setBusinessSign($businessSign) {
		$this->businessSign = $businessSign;
		$this->apiParams["businessSign"] = $businessSign;
	}
	
	public function getCollectionInfo() {
		return $this->collectionInfo;
	}

	public function setCollectionInfo($collectionInfo) {
		$this->collectionInfo = $collectionInfo;
		$arr = array();
		foreach ($collectionInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["collectionInfo"] = $arr;
	}
	
	public function getCouponInfo() {
		return $this->couponInfo;
	}

	public function setCouponInfo($couponInfo) {
		$this->couponInfo = $couponInfo;
		$arr = array();
		foreach ($couponInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponInfo"] = $arr;
	}
	
	public function getFullReductionInfo() {
		return $this->fullReductionInfo;
	}

	public function setFullReductionInfo($fullReductionInfo) {
		$this->fullReductionInfo = $fullReductionInfo;
		$arr = array();
		foreach ($fullReductionInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["fullReductionInfo"] = $arr;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderPayment() {
		return $this->orderPayment;
	}

	public function setOrderPayment($orderPayment) {
		$this->orderPayment = $orderPayment;
		$this->apiParams["orderPayment"] = $orderPayment;
	}
	
	public function getPayInfo() {
		return $this->payInfo;
	}

	public function setPayInfo($payInfo) {
		$this->payInfo = $payInfo;
		$arr = array();
		foreach ($payInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["payInfo"] = $arr;
	}
	
	public function getPostage() {
		return $this->postage;
	}

	public function setPostage($postage) {
		$this->postage = $postage;
		$this->apiParams["postage"] = $postage;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getSnSkuId() {
		return $this->snSkuId;
	}

	public function setSnSkuId($snSkuId) {
		$this->snSkuId = $snSkuId;
		$this->apiParams["snSkuId"] = $snSkuId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getTotalFee() {
		return $this->totalFee;
	}

	public function setTotalFee($totalFee) {
		$this->totalFee = $totalFee;
		$this->apiParams["totalFee"] = $totalFee;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class FullReductionInfo {

	private $apiParams = array();
	
	private $bonusId;
	
	private $fullReductionAmount;
	
	private $fullReductionType;
	
	private $promotionName;
	
	private $promotionNum;
	
	private $provider;
	
	public function getBonusId() {
		return $this->bonusId;
	}

	public function setBonusId($bonusId) {
		$this->bonusId = $bonusId;
		$this->apiParams["bonusId"] = $bonusId;
	}
	
	public function getFullReductionAmount() {
		return $this->fullReductionAmount;
	}

	public function setFullReductionAmount($fullReductionAmount) {
		$this->fullReductionAmount = $fullReductionAmount;
		$this->apiParams["fullReductionAmount"] = $fullReductionAmount;
	}
	
	public function getFullReductionType() {
		return $this->fullReductionType;
	}

	public function setFullReductionType($fullReductionType) {
		$this->fullReductionType = $fullReductionType;
		$this->apiParams["fullReductionType"] = $fullReductionType;
	}
	
	public function getPromotionName() {
		return $this->promotionName;
	}

	public function setPromotionName($promotionName) {
		$this->promotionName = $promotionName;
		$this->apiParams["promotionName"] = $promotionName;
	}
	
	public function getPromotionNum() {
		return $this->promotionNum;
	}

	public function setPromotionNum($promotionNum) {
		$this->promotionNum = $promotionNum;
		$this->apiParams["promotionNum"] = $promotionNum;
	}
	
	public function getProvider() {
		return $this->provider;
	}

	public function setProvider($provider) {
		$this->provider = $provider;
		$this->apiParams["provider"] = $provider;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ActivityInfo {

	private $apiParams = array();
	
	private $activityCode;
	
	private $activityName;
	
	public function getActivityCode() {
		return $this->activityCode;
	}

	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getActivityName() {
		return $this->activityName;
	}

	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PayInfo {

	private $apiParams = array();
	
	private $payCode;
	
	private $payName;
	
	public function getPayCode() {
		return $this->payCode;
	}

	public function setPayCode($payCode) {
		$this->payCode = $payCode;
		$this->apiParams["payCode"] = $payCode;
	}
	
	public function getPayName() {
		return $this->payName;
	}

	public function setPayName($payName) {
		$this->payName = $payName;
		$this->apiParams["payName"] = $payName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>