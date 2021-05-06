<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-19
 */
class CreateunitCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $operateAppliCode;
	
	/**
	 * 
	 */
	private $operateSupplierType;
	
	/**
	 * 
	 */
	private $operateUserType;
	
	/**
	 * 
	 */
	private $promotionType;
	
	/**
	 * 
	 */
	private $promotionUnitDto;
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getOperateAppliCode() {
		return $this->operateAppliCode;
	}
	
	public function setOperateAppliCode($operateAppliCode) {
		$this->operateAppliCode = $operateAppliCode;
		$this->apiParams["operateAppliCode"] = $operateAppliCode;
	}
	
	public function getOperateSupplierType() {
		return $this->operateSupplierType;
	}
	
	public function setOperateSupplierType($operateSupplierType) {
		$this->operateSupplierType = $operateSupplierType;
		$this->apiParams["operateSupplierType"] = $operateSupplierType;
	}
	
	public function getOperateUserType() {
		return $this->operateUserType;
	}
	
	public function setOperateUserType($operateUserType) {
		$this->operateUserType = $operateUserType;
		$this->apiParams["operateUserType"] = $operateUserType;
	}
	
	public function getPromotionType() {
		return $this->promotionType;
	}
	
	public function setPromotionType($promotionType) {
		$this->promotionType = $promotionType;
		$this->apiParams["promotionType"] = $promotionType;
	}
	
	public function getPromotionUnitDto() {
		return $this->promotionUnitDto;
	}
	
	public function setPromotionUnitDto($promotionUnitDto) {
		$this->promotionUnitDto = $promotionUnitDto;
		$this->apiParams["promotionUnitDto"] = $promotionUnitDto->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.unit.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->promotionType, 'promotionType');
	}
	
	public function getBizName(){
		return "createCreateunit";
	}
	
}

class FlowPackList {

	private $apiParams = array();
	
	private $flowTypeExplain;
	
	private $flowTypeId;
	
	private $flowTypeName;
	
	private $premium;
	
	public function getFlowTypeExplain() {
		return $this->flowTypeExplain;
	}

	public function setFlowTypeExplain($flowTypeExplain) {
		$this->flowTypeExplain = $flowTypeExplain;
		$this->apiParams["flowTypeExplain"] = $flowTypeExplain;
	}
	
	public function getFlowTypeId() {
		return $this->flowTypeId;
	}

	public function setFlowTypeId($flowTypeId) {
		$this->flowTypeId = $flowTypeId;
		$this->apiParams["flowTypeId"] = $flowTypeId;
	}
	
	public function getFlowTypeName() {
		return $this->flowTypeName;
	}

	public function setFlowTypeName($flowTypeName) {
		$this->flowTypeName = $flowTypeName;
		$this->apiParams["flowTypeName"] = $flowTypeName;
	}
	
	public function getPremium() {
		return $this->premium;
	}

	public function setPremium($premium) {
		$this->premium = $premium;
		$this->apiParams["premium"] = $premium;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Goods {

	private $apiParams = array();
	
	private $goodsCode;
	
	private $goodsName;
	
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
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ExtField {

	private $apiParams = array();
	
	private $zncbPricePC;
	
	private $zncbPriceWAP;
	
	public function getZncbPricePC() {
		return $this->zncbPricePC;
	}

	public function setZncbPricePC($zncbPricePC) {
		$this->zncbPricePC = $zncbPricePC;
		$this->apiParams["zncbPricePC"] = $zncbPricePC;
	}
	
	public function getZncbPriceWAP() {
		return $this->zncbPriceWAP;
	}

	public function setZncbPriceWAP($zncbPriceWAP) {
		$this->zncbPriceWAP = $zncbPriceWAP;
		$this->apiParams["zncbPriceWAP"] = $zncbPriceWAP;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PromotionUnitDto {

	private $apiParams = array();
	
	private $commendCrowd;
	
	private $custnum;
	
	private $extField;
	
	private $flowPackList;
	
	private $goods;
	
	private $matchMode;
	
	private $ocpc;
	
	private $promotionId;
	
	private $rankingsButton;
	
	private $rankingsDiscount;
	
	private $rankingsOrder;
	
	private $recommendPrice;
	
	private $searchCrowd;
	
	public function getCommendCrowd() {
		return $this->commendCrowd;
	}

	public function setCommendCrowd($commendCrowd) {
		$this->commendCrowd = $commendCrowd;
		$this->apiParams["commendCrowd"] = $commendCrowd;
	}
	
	public function getCustnum() {
		return $this->custnum;
	}

	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getExtField() {
		return $this->extField;
	}

	public function setExtField($extField) {
		$this->extField = $extField;
		$arr = array();
		foreach ($extField as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["extField"] = $arr;
	}
	
	public function getFlowPackList() {
		return $this->flowPackList;
	}

	public function setFlowPackList($flowPackList) {
		$this->flowPackList = $flowPackList;
		$arr = array();
		foreach ($flowPackList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["flowPackList"] = $arr;
	}
	
	public function getGoods() {
		return $this->goods;
	}

	public function setGoods($goods) {
		$this->goods = $goods;
		$arr = array();
		foreach ($goods as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["goods"] = $arr;
	}
	
	public function getMatchMode() {
		return $this->matchMode;
	}

	public function setMatchMode($matchMode) {
		$this->matchMode = $matchMode;
		$this->apiParams["matchMode"] = $matchMode;
	}
	
	public function getOcpc() {
		return $this->ocpc;
	}

	public function setOcpc($ocpc) {
		$this->ocpc = $ocpc;
		$this->apiParams["ocpc"] = $ocpc;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}

	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getRankingsButton() {
		return $this->rankingsButton;
	}

	public function setRankingsButton($rankingsButton) {
		$this->rankingsButton = $rankingsButton;
		$this->apiParams["rankingsButton"] = $rankingsButton;
	}
	
	public function getRankingsDiscount() {
		return $this->rankingsDiscount;
	}

	public function setRankingsDiscount($rankingsDiscount) {
		$this->rankingsDiscount = $rankingsDiscount;
		$this->apiParams["rankingsDiscount"] = $rankingsDiscount;
	}
	
	public function getRankingsOrder() {
		return $this->rankingsOrder;
	}

	public function setRankingsOrder($rankingsOrder) {
		$this->rankingsOrder = $rankingsOrder;
		$this->apiParams["rankingsOrder"] = $rankingsOrder;
	}
	
	public function getRecommendPrice() {
		return $this->recommendPrice;
	}

	public function setRecommendPrice($recommendPrice) {
		$this->recommendPrice = $recommendPrice;
		$this->apiParams["recommendPrice"] = $recommendPrice;
	}
	
	public function getSearchCrowd() {
		return $this->searchCrowd;
	}

	public function setSearchCrowd($searchCrowd) {
		$this->searchCrowd = $searchCrowd;
		$this->apiParams["searchCrowd"] = $searchCrowd;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>