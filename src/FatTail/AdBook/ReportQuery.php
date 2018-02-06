<?php

namespace FatTail\AdBook;

class ReportQuery extends AdBookConnectEntity
{

    /**
     * @var ArrayOflong $DeliveryDetailOutputColumnIDList
     */
    protected $DeliveryDetailOutputColumnIDList = null;

    /**
     * @var ArrayOfstring $FieldOutputColumnNameList
     */
    protected $FieldOutputColumnNameList = null;

    /**
     * @var ArrayOflong $MetricOutputColumnIDList
     */
    protected $MetricOutputColumnIDList = null;

    /**
     * @var ArrayOfQueryFilter $QueryFilterList
     */
    protected $QueryFilterList = null;

    /**
     * @var ArrayOfQueryParameter $QueryParameterList
     */
    protected $QueryParameterList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOflong
     */
    public function getDeliveryDetailOutputColumnIDList()
    {
      return $this->DeliveryDetailOutputColumnIDList;
    }

    /**
     * @param ArrayOflong $DeliveryDetailOutputColumnIDList
     * @return \FatTail\AdBook\ReportQuery
     */
    public function setDeliveryDetailOutputColumnIDList($DeliveryDetailOutputColumnIDList)
    {
      $this->DeliveryDetailOutputColumnIDList = $DeliveryDetailOutputColumnIDList;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFieldOutputColumnNameList()
    {
      return $this->FieldOutputColumnNameList;
    }

    /**
     * @param ArrayOfstring $FieldOutputColumnNameList
     * @return \FatTail\AdBook\ReportQuery
     */
    public function setFieldOutputColumnNameList($FieldOutputColumnNameList)
    {
      $this->FieldOutputColumnNameList = $FieldOutputColumnNameList;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getMetricOutputColumnIDList()
    {
      return $this->MetricOutputColumnIDList;
    }

    /**
     * @param ArrayOflong $MetricOutputColumnIDList
     * @return \FatTail\AdBook\ReportQuery
     */
    public function setMetricOutputColumnIDList($MetricOutputColumnIDList)
    {
      $this->MetricOutputColumnIDList = $MetricOutputColumnIDList;
      return $this;
    }

    /**
     * @return ArrayOfQueryFilter
     */
    public function getQueryFilterList()
    {
      return $this->QueryFilterList;
    }

    /**
     * @param ArrayOfQueryFilter $QueryFilterList
     * @return \FatTail\AdBook\ReportQuery
     */
    public function setQueryFilterList($QueryFilterList)
    {
      $this->QueryFilterList = $QueryFilterList;
      return $this;
    }

    /**
     * @return ArrayOfQueryParameter
     */
    public function getQueryParameterList()
    {
      return $this->QueryParameterList;
    }

    /**
     * @param ArrayOfQueryParameter $QueryParameterList
     * @return \FatTail\AdBook\ReportQuery
     */
    public function setQueryParameterList($QueryParameterList)
    {
      $this->QueryParameterList = $QueryParameterList;
      return $this;
    }

}
