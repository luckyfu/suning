<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-16
 */
class StatementGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $detail;
	
	/**
	 * 
	 */
	private $factoryBp;
	
	/**
	 * 
	 */
	private $guid;
	
	/**
	 * 
	 */
	private $noteHeader;
	
	/**
	 * 
	 */
	private $zawbs;
	
	/**
	 * 
	 */
	private $zcjsqdm;
	
	/**
	 * 
	 */
	private $zkpje;
	
	public function getDetail() {
		return $this->detail;
	}
	
	public function setDetail($detail) {
		$this->detail = $detail;
		$arr = array();
		foreach ($detail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["detail"] = $arr;
	}
	
	public function getFactoryBp() {
		return $this->factoryBp;
	}
	
	public function setFactoryBp($factoryBp) {
		$this->factoryBp = $factoryBp;
		$this->apiParams["factoryBp"] = $factoryBp;
	}
	
	public function getGuid() {
		return $this->guid;
	}
	
	public function setGuid($guid) {
		$this->guid = $guid;
		$this->apiParams["guid"] = $guid;
	}
	
	public function getNoteHeader() {
		return $this->noteHeader;
	}
	
	public function setNoteHeader($noteHeader) {
		$this->noteHeader = $noteHeader;
		$this->apiParams["noteHeader"] = $noteHeader;
	}
	
	public function getZawbs() {
		return $this->zawbs;
	}
	
	public function setZawbs($zawbs) {
		$this->zawbs = $zawbs;
		$this->apiParams["zawbs"] = $zawbs;
	}
	
	public function getZcjsqdm() {
		return $this->zcjsqdm;
	}
	
	public function setZcjsqdm($zcjsqdm) {
		$this->zcjsqdm = $zcjsqdm;
		$this->apiParams["zcjsqdm"] = $zcjsqdm;
	}
	
	public function getZkpje() {
		return $this->zkpje;
	}
	
	public function setZkpje($zkpje) {
		$this->zkpje = $zkpje;
		$this->apiParams["zkpje"] = $zkpje;
	}
	
	public function getApiMethodName(){
		return 'suning.asmp.statement.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->factoryBp, 'factoryBp');
		RequestCheckUtil::checkNotNull($this->guid, 'guid');
		RequestCheckUtil::checkNotNull($this->zcjsqdm, 'zcjsqdm');
		RequestCheckUtil::checkNotNull($this->zkpje, 'zkpje');
	}
	
	public function getBizName(){
		return "getStatement";
	}
	
}

class Detail {

	private $apiParams = array();
	
	private $detailGuid;
	
	private $jctype;
	
	private $noteItem;
	
	private $serviceOrder;
	
	private $zawf;
	
	private $zblpf;
	
	private $zbtje;
	
	private $zbtyy;
	
	private $zbtyyDesc;
	
	private $zcjorder;
	
	private $zcjtzkpje;
	
	private $zcjyjje;
	
	private $zjlje;
	
	private $zjlyy;
	
	private $zjlyyDesc;
	
	private $zkfje;
	
	private $zkfyy;
	
	private $zkfyyDesc;
	
	private $zno;
	
	private $zpjf;
	
	private $zqtf;
	
	public function getDetailGuid() {
		return $this->detailGuid;
	}

	public function setDetailGuid($detailGuid) {
		$this->detailGuid = $detailGuid;
		$this->apiParams["detailGuid"] = $detailGuid;
	}
	
	public function getJctype() {
		return $this->jctype;
	}

	public function setJctype($jctype) {
		$this->jctype = $jctype;
		$this->apiParams["jctype"] = $jctype;
	}
	
	public function getNoteItem() {
		return $this->noteItem;
	}

	public function setNoteItem($noteItem) {
		$this->noteItem = $noteItem;
		$this->apiParams["noteItem"] = $noteItem;
	}
	
	public function getServiceOrder() {
		return $this->serviceOrder;
	}

	public function setServiceOrder($serviceOrder) {
		$this->serviceOrder = $serviceOrder;
		$this->apiParams["serviceOrder"] = $serviceOrder;
	}
	
	public function getZawf() {
		return $this->zawf;
	}

	public function setZawf($zawf) {
		$this->zawf = $zawf;
		$this->apiParams["zawf"] = $zawf;
	}
	
	public function getZblpf() {
		return $this->zblpf;
	}

	public function setZblpf($zblpf) {
		$this->zblpf = $zblpf;
		$this->apiParams["zblpf"] = $zblpf;
	}
	
	public function getZbtje() {
		return $this->zbtje;
	}

	public function setZbtje($zbtje) {
		$this->zbtje = $zbtje;
		$this->apiParams["zbtje"] = $zbtje;
	}
	
	public function getZbtyy() {
		return $this->zbtyy;
	}

	public function setZbtyy($zbtyy) {
		$this->zbtyy = $zbtyy;
		$this->apiParams["zbtyy"] = $zbtyy;
	}
	
	public function getZbtyyDesc() {
		return $this->zbtyyDesc;
	}

	public function setZbtyyDesc($zbtyyDesc) {
		$this->zbtyyDesc = $zbtyyDesc;
		$this->apiParams["zbtyyDesc"] = $zbtyyDesc;
	}
	
	public function getZcjorder() {
		return $this->zcjorder;
	}

	public function setZcjorder($zcjorder) {
		$this->zcjorder = $zcjorder;
		$this->apiParams["zcjorder"] = $zcjorder;
	}
	
	public function getZcjtzkpje() {
		return $this->zcjtzkpje;
	}

	public function setZcjtzkpje($zcjtzkpje) {
		$this->zcjtzkpje = $zcjtzkpje;
		$this->apiParams["zcjtzkpje"] = $zcjtzkpje;
	}
	
	public function getZcjyjje() {
		return $this->zcjyjje;
	}

	public function setZcjyjje($zcjyjje) {
		$this->zcjyjje = $zcjyjje;
		$this->apiParams["zcjyjje"] = $zcjyjje;
	}
	
	public function getZjlje() {
		return $this->zjlje;
	}

	public function setZjlje($zjlje) {
		$this->zjlje = $zjlje;
		$this->apiParams["zjlje"] = $zjlje;
	}
	
	public function getZjlyy() {
		return $this->zjlyy;
	}

	public function setZjlyy($zjlyy) {
		$this->zjlyy = $zjlyy;
		$this->apiParams["zjlyy"] = $zjlyy;
	}
	
	public function getZjlyyDesc() {
		return $this->zjlyyDesc;
	}

	public function setZjlyyDesc($zjlyyDesc) {
		$this->zjlyyDesc = $zjlyyDesc;
		$this->apiParams["zjlyyDesc"] = $zjlyyDesc;
	}
	
	public function getZkfje() {
		return $this->zkfje;
	}

	public function setZkfje($zkfje) {
		$this->zkfje = $zkfje;
		$this->apiParams["zkfje"] = $zkfje;
	}
	
	public function getZkfyy() {
		return $this->zkfyy;
	}

	public function setZkfyy($zkfyy) {
		$this->zkfyy = $zkfyy;
		$this->apiParams["zkfyy"] = $zkfyy;
	}
	
	public function getZkfyyDesc() {
		return $this->zkfyyDesc;
	}

	public function setZkfyyDesc($zkfyyDesc) {
		$this->zkfyyDesc = $zkfyyDesc;
		$this->apiParams["zkfyyDesc"] = $zkfyyDesc;
	}
	
	public function getZno() {
		return $this->zno;
	}

	public function setZno($zno) {
		$this->zno = $zno;
		$this->apiParams["zno"] = $zno;
	}
	
	public function getZpjf() {
		return $this->zpjf;
	}

	public function setZpjf($zpjf) {
		$this->zpjf = $zpjf;
		$this->apiParams["zpjf"] = $zpjf;
	}
	
	public function getZqtf() {
		return $this->zqtf;
	}

	public function setZqtf($zqtf) {
		$this->zqtf = $zqtf;
		$this->apiParams["zqtf"] = $zqtf;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>