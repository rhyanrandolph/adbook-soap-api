<?php

namespace FatTail\AdBook;

class Order extends AdBookConnectEntity
{

    /**
     * @var int $AgencyCommission
     */
    protected $AgencyCommission = null;

    /**
     * @var int $AgencyContactID
     */
    protected $AgencyContactID = null;

    /**
     * @var int $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @var BillTo $BillTo
     */
    protected $BillTo = null;

    /**
     * @var BillType $BillTypeName
     */
    protected $BillTypeName = null;

    /**
     * @var string $BillingComments
     */
    protected $BillingComments = null;

    /**
     * @var int $BillingContactID
     */
    protected $BillingContactID = null;

    /**
     * @var BillingModel $BillingModel
     */
    protected $BillingModel = null;

    /**
     * @var int $ClientContactID
     */
    protected $ClientContactID = null;

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $CurrencyID
     */
    protected $CurrencyID = null;

    /**
     * @var string $EstimateNumber
     */
    protected $EstimateNumber = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var int $MaterialsContactID
     */
    protected $MaterialsContactID = null;

    /**
     * @var int $OrderConfigurationID
     */
    protected $OrderConfigurationID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var string $OrderName
     */
    protected $OrderName = null;

    /**
     * @var ArrayOfOrderRep $OrderRepList
     */
    protected $OrderRepList = null;

    /**
     * @var int $OrderStatusID
     */
    protected $OrderStatusID = null;

    /**
     * @var string $PONumber
     */
    protected $PONumber = null;

    /**
     * @var int $RateCardNameID
     */
    protected $RateCardNameID = null;

    /**
     * @var int $ThirdPartyAdServerID
     */
    protected $ThirdPartyAdServerID = null;

    /**
     * @var ArrayOfDynamicPropertyValue $OrderDynamicProperties
     */
    protected $OrderDynamicProperties = null;

    /**
     * @var string $IONumber
     */
    protected $IONumber = null;

    /**
     * @var string $OrderNotes
     */
    protected $OrderNotes = null;

    /**
     * @var string $InternalOrderNotes
     */
    protected $InternalOrderNotes = null;

    /**
     * @var ArrayOflong $OrderManagerRepTypeIdList
     */
    protected $OrderManagerRepTypeIdList = null;

    /**
     * @param BillTo $BillTo
     * @param BillType $BillTypeName
     * @param BillingModel $BillingModel
     * @param int $ClientID
     * @param int $CurrencyID
     * @param int $OrderStatusID
     */
    public function __construct($BillTo, $BillTypeName, $BillingModel, $ClientID, $CurrencyID, $OrderStatusID)
    {
      $this->BillTo = $BillTo;
      $this->BillTypeName = $BillTypeName;
      $this->BillingModel = $BillingModel;
      $this->ClientID = $ClientID;
      $this->CurrencyID = $CurrencyID;
      $this->OrderStatusID = $OrderStatusID;
    }

    /**
     * @return int
     */
    public function getAgencyCommission()
    {
      return $this->AgencyCommission;
    }

    /**
     * @param int $AgencyCommission
     * @return \FatTail\AdBook\Order
     */
    public function setAgencyCommission($AgencyCommission)
    {
      $this->AgencyCommission = $AgencyCommission;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyContactID()
    {
      return $this->AgencyContactID;
    }

    /**
     * @param int $AgencyContactID
     * @return \FatTail\AdBook\Order
     */
    public function setAgencyContactID($AgencyContactID)
    {
      $this->AgencyContactID = $AgencyContactID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param int $AgencyID
     * @return \FatTail\AdBook\Order
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

    /**
     * @return BillTo
     */
    public function getBillTo()
    {
      return $this->BillTo;
    }

    /**
     * @param BillTo $BillTo
     * @return \FatTail\AdBook\Order
     */
    public function setBillTo($BillTo)
    {
      $this->BillTo = $BillTo;
      return $this;
    }

    /**
     * @return BillType
     */
    public function getBillTypeName()
    {
      return $this->BillTypeName;
    }

    /**
     * @param BillType $BillTypeName
     * @return \FatTail\AdBook\Order
     */
    public function setBillTypeName($BillTypeName)
    {
      $this->BillTypeName = $BillTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingComments()
    {
      return $this->BillingComments;
    }

    /**
     * @param string $BillingComments
     * @return \FatTail\AdBook\Order
     */
    public function setBillingComments($BillingComments)
    {
      $this->BillingComments = $BillingComments;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingContactID()
    {
      return $this->BillingContactID;
    }

    /**
     * @param int $BillingContactID
     * @return \FatTail\AdBook\Order
     */
    public function setBillingContactID($BillingContactID)
    {
      $this->BillingContactID = $BillingContactID;
      return $this;
    }

    /**
     * @return BillingModel
     */
    public function getBillingModel()
    {
      return $this->BillingModel;
    }

    /**
     * @param BillingModel $BillingModel
     * @return \FatTail\AdBook\Order
     */
    public function setBillingModel($BillingModel)
    {
      $this->BillingModel = $BillingModel;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientContactID()
    {
      return $this->ClientContactID;
    }

    /**
     * @param int $ClientContactID
     * @return \FatTail\AdBook\Order
     */
    public function setClientContactID($ClientContactID)
    {
      $this->ClientContactID = $ClientContactID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \FatTail\AdBook\Order
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyID()
    {
      return $this->CurrencyID;
    }

    /**
     * @param int $CurrencyID
     * @return \FatTail\AdBook\Order
     */
    public function setCurrencyID($CurrencyID)
    {
      $this->CurrencyID = $CurrencyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimateNumber()
    {
      return $this->EstimateNumber;
    }

    /**
     * @param string $EstimateNumber
     * @return \FatTail\AdBook\Order
     */
    public function setEstimateNumber($EstimateNumber)
    {
      $this->EstimateNumber = $EstimateNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param string $ExternalID
     * @return \FatTail\AdBook\Order
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \FatTail\AdBook\Order
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaterialsContactID()
    {
      return $this->MaterialsContactID;
    }

    /**
     * @param int $MaterialsContactID
     * @return \FatTail\AdBook\Order
     */
    public function setMaterialsContactID($MaterialsContactID)
    {
      $this->MaterialsContactID = $MaterialsContactID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderConfigurationID()
    {
      return $this->OrderConfigurationID;
    }

    /**
     * @param int $OrderConfigurationID
     * @return \FatTail\AdBook\Order
     */
    public function setOrderConfigurationID($OrderConfigurationID)
    {
      $this->OrderConfigurationID = $OrderConfigurationID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \FatTail\AdBook\Order
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderName()
    {
      return $this->OrderName;
    }

    /**
     * @param string $OrderName
     * @return \FatTail\AdBook\Order
     */
    public function setOrderName($OrderName)
    {
      $this->OrderName = $OrderName;
      return $this;
    }

    /**
     * @return ArrayOfOrderRep
     */
    public function getOrderRepList()
    {
      return $this->OrderRepList;
    }

    /**
     * @param ArrayOfOrderRep $OrderRepList
     * @return \FatTail\AdBook\Order
     */
    public function setOrderRepList($OrderRepList)
    {
      $this->OrderRepList = $OrderRepList;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusID()
    {
      return $this->OrderStatusID;
    }

    /**
     * @param int $OrderStatusID
     * @return \FatTail\AdBook\Order
     */
    public function setOrderStatusID($OrderStatusID)
    {
      $this->OrderStatusID = $OrderStatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPONumber()
    {
      return $this->PONumber;
    }

    /**
     * @param string $PONumber
     * @return \FatTail\AdBook\Order
     */
    public function setPONumber($PONumber)
    {
      $this->PONumber = $PONumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateCardNameID()
    {
      return $this->RateCardNameID;
    }

    /**
     * @param int $RateCardNameID
     * @return \FatTail\AdBook\Order
     */
    public function setRateCardNameID($RateCardNameID)
    {
      $this->RateCardNameID = $RateCardNameID;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAdServerID()
    {
      return $this->ThirdPartyAdServerID;
    }

    /**
     * @param int $ThirdPartyAdServerID
     * @return \FatTail\AdBook\Order
     */
    public function setThirdPartyAdServerID($ThirdPartyAdServerID)
    {
      $this->ThirdPartyAdServerID = $ThirdPartyAdServerID;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getOrderDynamicProperties()
    {
      return $this->OrderDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $OrderDynamicProperties
     * @return \FatTail\AdBook\Order
     */
    public function setOrderDynamicProperties($OrderDynamicProperties)
    {
      $this->OrderDynamicProperties = $OrderDynamicProperties;
      return $this;
    }

    /**
     * @return string
     */
    public function getIONumber()
    {
      return $this->IONumber;
    }

    /**
     * @param string $IONumber
     * @return \FatTail\AdBook\Order
     */
    public function setIONumber($IONumber)
    {
      $this->IONumber = $IONumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNotes()
    {
      return $this->OrderNotes;
    }

    /**
     * @param string $OrderNotes
     * @return \FatTail\AdBook\Order
     */
    public function setOrderNotes($OrderNotes)
    {
      $this->OrderNotes = $OrderNotes;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalOrderNotes()
    {
      return $this->InternalOrderNotes;
    }

    /**
     * @param string $InternalOrderNotes
     * @return \FatTail\AdBook\Order
     */
    public function setInternalOrderNotes($InternalOrderNotes)
    {
      $this->InternalOrderNotes = $InternalOrderNotes;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getOrderManagerRepTypeIdList()
    {
      return $this->OrderManagerRepTypeIdList;
    }

    /**
     * @param ArrayOflong $OrderManagerRepTypeIdList
     * @return \FatTail\AdBook\Order
     */
    public function setOrderManagerRepTypeIdList($OrderManagerRepTypeIdList)
    {
      $this->OrderManagerRepTypeIdList = $OrderManagerRepTypeIdList;
      return $this;
    }

}
