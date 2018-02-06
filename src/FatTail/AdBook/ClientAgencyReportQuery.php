<?php

namespace FatTail\AdBook;

class ClientAgencyReportQuery extends AdBookConnectEntity
{

    /**
     * @var ArrayOflong $AccountManagerIDs
     */
    protected $AccountManagerIDs = null;

    /**
     * @var ArrayOflong $ClientIDs
     */
    protected $ClientIDs = null;

    /**
     * @var ArrayOflong $ClientContactIDs
     */
    protected $ClientContactIDs = null;

    /**
     * @var ArrayOflong $AgencyIDs
     */
    protected $AgencyIDs = null;

    /**
     * @var ArrayOflong $AgencyContactIDs
     */
    protected $AgencyContactIDs = null;

    /**
     * @var ArrayOfDynamicPropertyValue $ClientAgencyDynamicProperties
     */
    protected $ClientAgencyDynamicProperties = null;

    /**
     * @var ClientReportType $ClientReportType
     */
    protected $ClientReportType = null;

    /**
     * @param ClientReportType $ClientReportType
     */
    public function __construct($ClientReportType)
    {
      $this->ClientReportType = $ClientReportType;
    }

    /**
     * @return ArrayOflong
     */
    public function getAccountManagerIDs()
    {
      return $this->AccountManagerIDs;
    }

    /**
     * @param ArrayOflong $AccountManagerIDs
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setAccountManagerIDs($AccountManagerIDs)
    {
      $this->AccountManagerIDs = $AccountManagerIDs;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getClientIDs()
    {
      return $this->ClientIDs;
    }

    /**
     * @param ArrayOflong $ClientIDs
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getClientContactIDs()
    {
      return $this->ClientContactIDs;
    }

    /**
     * @param ArrayOflong $ClientContactIDs
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setClientContactIDs($ClientContactIDs)
    {
      $this->ClientContactIDs = $ClientContactIDs;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAgencyIDs()
    {
      return $this->AgencyIDs;
    }

    /**
     * @param ArrayOflong $AgencyIDs
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setAgencyIDs($AgencyIDs)
    {
      $this->AgencyIDs = $AgencyIDs;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAgencyContactIDs()
    {
      return $this->AgencyContactIDs;
    }

    /**
     * @param ArrayOflong $AgencyContactIDs
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setAgencyContactIDs($AgencyContactIDs)
    {
      $this->AgencyContactIDs = $AgencyContactIDs;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getClientAgencyDynamicProperties()
    {
      return $this->ClientAgencyDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $ClientAgencyDynamicProperties
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setClientAgencyDynamicProperties($ClientAgencyDynamicProperties)
    {
      $this->ClientAgencyDynamicProperties = $ClientAgencyDynamicProperties;
      return $this;
    }

    /**
     * @return ClientReportType
     */
    public function getClientReportType()
    {
      return $this->ClientReportType;
    }

    /**
     * @param ClientReportType $ClientReportType
     * @return \FatTail\AdBook\ClientAgencyReportQuery
     */
    public function setClientReportType($ClientReportType)
    {
      $this->ClientReportType = $ClientReportType;
      return $this;
    }

}
