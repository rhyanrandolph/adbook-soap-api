<?php

namespace FatTail\AdBook;

class AdBookConnect extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'RunClientAgencyReportJob' => 'FatTail\\AdBook\\RunClientAgencyReportJob',
      'ClientAgencyReportJob' => 'FatTail\\AdBook\\ClientAgencyReportJob',
      'AdBookConnectEntity' => 'FatTail\\AdBook\\AdBookConnectEntity',
      'ClientAgencyReportQuery' => 'FatTail\\AdBook\\ClientAgencyReportQuery',
      'ArrayOfDynamicPropertyValue' => 'FatTail\\AdBook\\ArrayOfDynamicPropertyValue',
      'DynamicPropertyValue' => 'FatTail\\AdBook\\DynamicPropertyValue',
      'RunClientAgencyReportJobResponse' => 'FatTail\\AdBook\\RunClientAgencyReportJobResponse',
      'DataAccessFault' => 'FatTail\\AdBook\\DataAccessFault',
      'GetClientAgencyReportJob' => 'FatTail\\AdBook\\GetClientAgencyReportJob',
      'GetClientAgencyReportJobResponse' => 'FatTail\\AdBook\\GetClientAgencyReportJobResponse',
      'GetMediaElementPropertyValue' => 'FatTail\\AdBook\\GetMediaElementPropertyValue',
      'GetMediaElementPropertyValueResponse' => 'FatTail\\AdBook\\GetMediaElementPropertyValueResponse',
      'MediaElementPropertyValue' => 'FatTail\\AdBook\\MediaElementPropertyValue',
      'GetMediaElementAdSize' => 'FatTail\\AdBook\\GetMediaElementAdSize',
      'GetMediaElementAdSizeResponse' => 'FatTail\\AdBook\\GetMediaElementAdSizeResponse',
      'CreateCreative' => 'FatTail\\AdBook\\CreateCreative',
      'Creative' => 'FatTail\\AdBook\\Creative',
      'CreateCreativeResponse' => 'FatTail\\AdBook\\CreateCreativeResponse',
      'UpdateCreative' => 'FatTail\\AdBook\\UpdateCreative',
      'UpdateCreativeResponse' => 'FatTail\\AdBook\\UpdateCreativeResponse',
      'GetDynamicPropertiesListForCreative' => 'FatTail\\AdBook\\GetDynamicPropertiesListForCreative',
      'GetDynamicPropertiesListForCreativeResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForCreativeResponse',
      'ArrayOfDynamicProperty' => 'FatTail\\AdBook\\ArrayOfDynamicProperty',
      'DynamicProperty' => 'FatTail\\AdBook\\DynamicProperty',
      'GetCreativeList' => 'FatTail\\AdBook\\GetCreativeList',
      'GetCreativeListResponse' => 'FatTail\\AdBook\\GetCreativeListResponse',
      'ArrayOfCreative' => 'FatTail\\AdBook\\ArrayOfCreative',
      'GetCreative' => 'FatTail\\AdBook\\GetCreative',
      'GetCreativeResponse' => 'FatTail\\AdBook\\GetCreativeResponse',
      'GetCreativeAssignment' => 'FatTail\\AdBook\\GetCreativeAssignment',
      'GetCreativeAssignmentResponse' => 'FatTail\\AdBook\\GetCreativeAssignmentResponse',
      'CreativeAssignment' => 'FatTail\\AdBook\\CreativeAssignment',
      'GetCreativeAssignmentListForOrder' => 'FatTail\\AdBook\\GetCreativeAssignmentListForOrder',
      'GetCreativeAssignmentListForOrderResponse' => 'FatTail\\AdBook\\GetCreativeAssignmentListForOrderResponse',
      'ArrayOfCreativeAssignment' => 'FatTail\\AdBook\\ArrayOfCreativeAssignment',
      'UpdateCreativeAssignment' => 'FatTail\\AdBook\\UpdateCreativeAssignment',
      'UpdateCreativeAssignmentResponse' => 'FatTail\\AdBook\\UpdateCreativeAssignmentResponse',
      'CreateCreativeAssignment' => 'FatTail\\AdBook\\CreateCreativeAssignment',
      'CreateCreativeAssignmentResponse' => 'FatTail\\AdBook\\CreateCreativeAssignmentResponse',
      'DeleteCreativeAssignment' => 'FatTail\\AdBook\\DeleteCreativeAssignment',
      'DeleteCreativeAssignmentResponse' => 'FatTail\\AdBook\\DeleteCreativeAssignmentResponse',
      'GetDropBillingAdjustmentList' => 'FatTail\\AdBook\\GetDropBillingAdjustmentList',
      'GetDropBillingAdjustmentListResponse' => 'FatTail\\AdBook\\GetDropBillingAdjustmentListResponse',
      'ArrayOfDropBillingAdjustment' => 'FatTail\\AdBook\\ArrayOfDropBillingAdjustment',
      'DropBillingAdjustment' => 'FatTail\\AdBook\\DropBillingAdjustment',
      'CreateDropBillingAdjustments' => 'FatTail\\AdBook\\CreateDropBillingAdjustments',
      'CreateDropBillingAdjustmentsResponse' => 'FatTail\\AdBook\\CreateDropBillingAdjustmentsResponse',
      'ArrayOfDropBillingAdjustmentCreateResult' => 'FatTail\\AdBook\\ArrayOfDropBillingAdjustmentCreateResult',
      'DropBillingAdjustmentCreateResult' => 'FatTail\\AdBook\\DropBillingAdjustmentCreateResult',
      'UpdateDropBillingAdjustments' => 'FatTail\\AdBook\\UpdateDropBillingAdjustments',
      'UpdateDropBillingAdjustmentsResponse' => 'FatTail\\AdBook\\UpdateDropBillingAdjustmentsResponse',
      'ArrayOfDropBillingAdjustmentUpdateResult' => 'FatTail\\AdBook\\ArrayOfDropBillingAdjustmentUpdateResult',
      'DropBillingAdjustmentUpdateResult' => 'FatTail\\AdBook\\DropBillingAdjustmentUpdateResult',
      'DeleteDropBillingAdjustments' => 'FatTail\\AdBook\\DeleteDropBillingAdjustments',
      'DeleteDropBillingAdjustmentsResponse' => 'FatTail\\AdBook\\DeleteDropBillingAdjustmentsResponse',
      'ArrayOfDropBillingAdjustmentDeleteResult' => 'FatTail\\AdBook\\ArrayOfDropBillingAdjustmentDeleteResult',
      'DropBillingAdjustmentDeleteResult' => 'FatTail\\AdBook\\DropBillingAdjustmentDeleteResult',
      'CreateClientAgencyRelationship' => 'FatTail\\AdBook\\CreateClientAgencyRelationship',
      'ClientAgencyRelationship' => 'FatTail\\AdBook\\ClientAgencyRelationship',
      'CreateClientAgencyRelationshipResponse' => 'FatTail\\AdBook\\CreateClientAgencyRelationshipResponse',
      'CreateAgency' => 'FatTail\\AdBook\\CreateAgency',
      'Agency' => 'FatTail\\AdBook\\Agency',
      'Account' => 'FatTail\\AdBook\\Account',
      'CreateAgencyResponse' => 'FatTail\\AdBook\\CreateAgencyResponse',
      'DeleteAgency' => 'FatTail\\AdBook\\DeleteAgency',
      'DeleteAgencyResponse' => 'FatTail\\AdBook\\DeleteAgencyResponse',
      'GetAgency' => 'FatTail\\AdBook\\GetAgency',
      'GetAgencyResponse' => 'FatTail\\AdBook\\GetAgencyResponse',
      'GetAgencyList' => 'FatTail\\AdBook\\GetAgencyList',
      'GetAgencyListResponse' => 'FatTail\\AdBook\\GetAgencyListResponse',
      'ArrayOfAgency' => 'FatTail\\AdBook\\ArrayOfAgency',
      'GetAgencyListForClient' => 'FatTail\\AdBook\\GetAgencyListForClient',
      'GetAgencyListForClientResponse' => 'FatTail\\AdBook\\GetAgencyListForClientResponse',
      'GetClientAgencyRelationships' => 'FatTail\\AdBook\\GetClientAgencyRelationships',
      'GetClientAgencyRelationshipsResponse' => 'FatTail\\AdBook\\GetClientAgencyRelationshipsResponse',
      'ArrayOfClientAgencyRelationship' => 'FatTail\\AdBook\\ArrayOfClientAgencyRelationship',
      'SearchAgencyListByName' => 'FatTail\\AdBook\\SearchAgencyListByName',
      'SearchAgencyListByNameResponse' => 'FatTail\\AdBook\\SearchAgencyListByNameResponse',
      'UpdateAgency' => 'FatTail\\AdBook\\UpdateAgency',
      'UpdateAgencyResponse' => 'FatTail\\AdBook\\UpdateAgencyResponse',
      'CreateClient' => 'FatTail\\AdBook\\CreateClient',
      'Client' => 'FatTail\\AdBook\\Client',
      'CreateClientResponse' => 'FatTail\\AdBook\\CreateClientResponse',
      'DeleteClient' => 'FatTail\\AdBook\\DeleteClient',
      'DeleteClientResponse' => 'FatTail\\AdBook\\DeleteClientResponse',
      'GetClient' => 'FatTail\\AdBook\\GetClient',
      'GetClientResponse' => 'FatTail\\AdBook\\GetClientResponse',
      'GetClientList' => 'FatTail\\AdBook\\GetClientList',
      'GetClientListResponse' => 'FatTail\\AdBook\\GetClientListResponse',
      'ArrayOfClient' => 'FatTail\\AdBook\\ArrayOfClient',
      'SearchClientListByName' => 'FatTail\\AdBook\\SearchClientListByName',
      'SearchClientListByNameResponse' => 'FatTail\\AdBook\\SearchClientListByNameResponse',
      'UpdateClient' => 'FatTail\\AdBook\\UpdateClient',
      'UpdateClientResponse' => 'FatTail\\AdBook\\UpdateClientResponse',
      'CreateClientRelationshipsWithParentClient' => 'FatTail\\AdBook\\CreateClientRelationshipsWithParentClient',
      'ArrayOfParentClientRelationship' => 'FatTail\\AdBook\\ArrayOfParentClientRelationship',
      'ParentClientRelationship' => 'FatTail\\AdBook\\ParentClientRelationship',
      'CreateClientRelationshipsWithParentClientResponse' => 'FatTail\\AdBook\\CreateClientRelationshipsWithParentClientResponse',
      'ArrayOfParentClientRelationshipResult' => 'FatTail\\AdBook\\ArrayOfParentClientRelationshipResult',
      'ParentClientRelationshipResult' => 'FatTail\\AdBook\\ParentClientRelationshipResult',
      'DeleteClientRelationshipsWithParentClient' => 'FatTail\\AdBook\\DeleteClientRelationshipsWithParentClient',
      'DeleteClientRelationshipsWithParentClientResponse' => 'FatTail\\AdBook\\DeleteClientRelationshipsWithParentClientResponse',
      'GetClientRelationshipsWithParentClientList' => 'FatTail\\AdBook\\GetClientRelationshipsWithParentClientList',
      'GetClientRelationshipsWithParentClientListResponse' => 'FatTail\\AdBook\\GetClientRelationshipsWithParentClientListResponse',
      'GetOrder' => 'FatTail\\AdBook\\GetOrder',
      'GetOrderResponse' => 'FatTail\\AdBook\\GetOrderResponse',
      'Order' => 'FatTail\\AdBook\\Order',
      'ArrayOfOrderRep' => 'FatTail\\AdBook\\ArrayOfOrderRep',
      'OrderRep' => 'FatTail\\AdBook\\OrderRep',
      'GetOrderList' => 'FatTail\\AdBook\\GetOrderList',
      'OrderSearchParameter' => 'FatTail\\AdBook\\OrderSearchParameter',
      'GetOrderListResponse' => 'FatTail\\AdBook\\GetOrderListResponse',
      'ArrayOfOrder' => 'FatTail\\AdBook\\ArrayOfOrder',
      'UpdateOrder' => 'FatTail\\AdBook\\UpdateOrder',
      'UpdateOrderResponse' => 'FatTail\\AdBook\\UpdateOrderResponse',
      'CreateOrder' => 'FatTail\\AdBook\\CreateOrder',
      'CreateOrderResponse' => 'FatTail\\AdBook\\CreateOrderResponse',
      'UploadOrderAttachment' => 'FatTail\\AdBook\\UploadOrderAttachment',
      'OrderAttachment' => 'FatTail\\AdBook\\OrderAttachment',
      'UploadOrderAttachmentResponse' => 'FatTail\\AdBook\\UploadOrderAttachmentResponse',
      'DownloadOrderAttachment' => 'FatTail\\AdBook\\DownloadOrderAttachment',
      'DownloadOrderAttachmentResponse' => 'FatTail\\AdBook\\DownloadOrderAttachmentResponse',
      'ArrayOfOrderAttachment' => 'FatTail\\AdBook\\ArrayOfOrderAttachment',
      'GetOrderAttachmentList' => 'FatTail\\AdBook\\GetOrderAttachmentList',
      'GetOrderAttachmentListResponse' => 'FatTail\\AdBook\\GetOrderAttachmentListResponse',
      'GetRevisionProposalsForOrder' => 'FatTail\\AdBook\\GetRevisionProposalsForOrder',
      'GetRevisionProposalsForOrderResponse' => 'FatTail\\AdBook\\GetRevisionProposalsForOrderResponse',
      'ArrayOfRevisionProposal' => 'FatTail\\AdBook\\ArrayOfRevisionProposal',
      'RevisionProposal' => 'FatTail\\AdBook\\RevisionProposal',
      'GetProposalVersionsForOrder' => 'FatTail\\AdBook\\GetProposalVersionsForOrder',
      'GetProposalVersionsForOrderResponse' => 'FatTail\\AdBook\\GetProposalVersionsForOrderResponse',
      'ArrayOfProposalVersion' => 'FatTail\\AdBook\\ArrayOfProposalVersion',
      'ProposalVersion' => 'FatTail\\AdBook\\ProposalVersion',
      'CreateOrderLevelCustomTask' => 'FatTail\\AdBook\\CreateOrderLevelCustomTask',
      'OrderCustomTask' => 'FatTail\\AdBook\\OrderCustomTask',
      'CreateOrderLevelCustomTaskResponse' => 'FatTail\\AdBook\\CreateOrderLevelCustomTaskResponse',
      'CreateOrderLevelCustomTaskResult' => 'FatTail\\AdBook\\CreateOrderLevelCustomTaskResult',
      'GetOrderAttachmentsByDynamicPropertyId' => 'FatTail\\AdBook\\GetOrderAttachmentsByDynamicPropertyId',
      'GetOrderAttachmentsByDynamicPropertyIdResponse' => 'FatTail\\AdBook\\GetOrderAttachmentsByDynamicPropertyIdResponse',
      'DeleteOrderAttachment' => 'FatTail\\AdBook\\DeleteOrderAttachment',
      'DeleteOrderAttachmentResponse' => 'FatTail\\AdBook\\DeleteOrderAttachmentResponse',
      'GetDrop' => 'FatTail\\AdBook\\GetDrop',
      'GetDropResponse' => 'FatTail\\AdBook\\GetDropResponse',
      'Drop' => 'FatTail\\AdBook\\Drop',
      'Targeting' => 'FatTail\\AdBook\\Targeting',
      'GetDropListForOrder' => 'FatTail\\AdBook\\GetDropListForOrder',
      'GetDropListForOrderResponse' => 'FatTail\\AdBook\\GetDropListForOrderResponse',
      'ArrayOfDrop' => 'FatTail\\AdBook\\ArrayOfDrop',
      'UpdateDrop' => 'FatTail\\AdBook\\UpdateDrop',
      'UpdateDropResponse' => 'FatTail\\AdBook\\UpdateDropResponse',
      'UpdateDrops' => 'FatTail\\AdBook\\UpdateDrops',
      'UpdateDropsResponse' => 'FatTail\\AdBook\\UpdateDropsResponse',
      'ArrayOfDropUpdateResult' => 'FatTail\\AdBook\\ArrayOfDropUpdateResult',
      'DropUpdateResult' => 'FatTail\\AdBook\\DropUpdateResult',
      'CreateDrop' => 'FatTail\\AdBook\\CreateDrop',
      'CreateDropResponse' => 'FatTail\\AdBook\\CreateDropResponse',
      'CreateDrops' => 'FatTail\\AdBook\\CreateDrops',
      'CreateDropsResponse' => 'FatTail\\AdBook\\CreateDropsResponse',
      'ArrayOfDropCreateResult' => 'FatTail\\AdBook\\ArrayOfDropCreateResult',
      'DropCreateResult' => 'FatTail\\AdBook\\DropCreateResult',
      'DeleteDrop' => 'FatTail\\AdBook\\DeleteDrop',
      'DeleteDropResponse' => 'FatTail\\AdBook\\DeleteDropResponse',
      'DeleteDrops' => 'FatTail\\AdBook\\DeleteDrops',
      'DeleteDropsResponse' => 'FatTail\\AdBook\\DeleteDropsResponse',
      'ArrayOfDropDeleteResult' => 'FatTail\\AdBook\\ArrayOfDropDeleteResult',
      'DropDeleteResult' => 'FatTail\\AdBook\\DropDeleteResult',
      'CancelDrops' => 'FatTail\\AdBook\\CancelDrops',
      'CancelDropsResponse' => 'FatTail\\AdBook\\CancelDropsResponse',
      'ArrayOfDropCancelResult' => 'FatTail\\AdBook\\ArrayOfDropCancelResult',
      'DropCancelResult' => 'FatTail\\AdBook\\DropCancelResult',
      'ReactivateCancelledDrops' => 'FatTail\\AdBook\\ReactivateCancelledDrops',
      'ReactivateCancelledDropsResponse' => 'FatTail\\AdBook\\ReactivateCancelledDropsResponse',
      'ArrayOfDropReactivateCancelledResult' => 'FatTail\\AdBook\\ArrayOfDropReactivateCancelledResult',
      'DropReactivateCancelledResult' => 'FatTail\\AdBook\\DropReactivateCancelledResult',
      'UpdateDropBillingStatus' => 'FatTail\\AdBook\\UpdateDropBillingStatus',
      'ArrayOfDropBillingStatusInfo' => 'FatTail\\AdBook\\ArrayOfDropBillingStatusInfo',
      'DropBillingStatusInfo' => 'FatTail\\AdBook\\DropBillingStatusInfo',
      'UpdateDropBillingStatusResponse' => 'FatTail\\AdBook\\UpdateDropBillingStatusResponse',
      'ArrayOfUpdateDropBillingStatusResult' => 'FatTail\\AdBook\\ArrayOfUpdateDropBillingStatusResult',
      'UpdateDropBillingStatusResult' => 'FatTail\\AdBook\\UpdateDropBillingStatusResult',
      'CreateDropLevelCustomTask' => 'FatTail\\AdBook\\CreateDropLevelCustomTask',
      'DropCustomTask' => 'FatTail\\AdBook\\DropCustomTask',
      'CreateDropLevelCustomTaskResponse' => 'FatTail\\AdBook\\CreateDropLevelCustomTaskResponse',
      'CreateDropLevelCustomTaskResult' => 'FatTail\\AdBook\\CreateDropLevelCustomTaskResult',
      'CreateAgencyContact' => 'FatTail\\AdBook\\CreateAgencyContact',
      'AgencyContact' => 'FatTail\\AdBook\\AgencyContact',
      'Contact' => 'FatTail\\AdBook\\Contact',
      'ArrayOfContactType' => 'FatTail\\AdBook\\ArrayOfContactType',
      'CreateAgencyContactResponse' => 'FatTail\\AdBook\\CreateAgencyContactResponse',
      'DeleteAgencyContact' => 'FatTail\\AdBook\\DeleteAgencyContact',
      'DeleteAgencyContactResponse' => 'FatTail\\AdBook\\DeleteAgencyContactResponse',
      'GetAgencyContact' => 'FatTail\\AdBook\\GetAgencyContact',
      'GetAgencyContactResponse' => 'FatTail\\AdBook\\GetAgencyContactResponse',
      'GetAgencyContactList' => 'FatTail\\AdBook\\GetAgencyContactList',
      'GetAgencyContactListResponse' => 'FatTail\\AdBook\\GetAgencyContactListResponse',
      'ArrayOfAgencyContact' => 'FatTail\\AdBook\\ArrayOfAgencyContact',
      'UpdateAgencyContact' => 'FatTail\\AdBook\\UpdateAgencyContact',
      'UpdateAgencyContactResponse' => 'FatTail\\AdBook\\UpdateAgencyContactResponse',
      'CreateClientContact' => 'FatTail\\AdBook\\CreateClientContact',
      'ClientContact' => 'FatTail\\AdBook\\ClientContact',
      'CreateClientContactResponse' => 'FatTail\\AdBook\\CreateClientContactResponse',
      'DeleteClientContact' => 'FatTail\\AdBook\\DeleteClientContact',
      'DeleteClientContactResponse' => 'FatTail\\AdBook\\DeleteClientContactResponse',
      'UpdateClientContact' => 'FatTail\\AdBook\\UpdateClientContact',
      'UpdateClientContactResponse' => 'FatTail\\AdBook\\UpdateClientContactResponse',
      'GetClientContact' => 'FatTail\\AdBook\\GetClientContact',
      'GetClientContactResponse' => 'FatTail\\AdBook\\GetClientContactResponse',
      'GetClientContactList' => 'FatTail\\AdBook\\GetClientContactList',
      'GetClientContactListResponse' => 'FatTail\\AdBook\\GetClientContactListResponse',
      'ArrayOfClientContact' => 'FatTail\\AdBook\\ArrayOfClientContact',
      'CreateAccountContactAssociation' => 'FatTail\\AdBook\\CreateAccountContactAssociation',
      'ArrayOfAccountContactAssociation' => 'FatTail\\AdBook\\ArrayOfAccountContactAssociation',
      'AccountContactAssociation' => 'FatTail\\AdBook\\AccountContactAssociation',
      'CreateAccountContactAssociationResponse' => 'FatTail\\AdBook\\CreateAccountContactAssociationResponse',
      'ArrayOfAccountContactAssociationCreateResult' => 'FatTail\\AdBook\\ArrayOfAccountContactAssociationCreateResult',
      'AccountContactAssociationCreateResult' => 'FatTail\\AdBook\\AccountContactAssociationCreateResult',
      'RemoveAccountContactAssociation' => 'FatTail\\AdBook\\RemoveAccountContactAssociation',
      'RemoveAccountContactAssociationResponse' => 'FatTail\\AdBook\\RemoveAccountContactAssociationResponse',
      'ArrayOfAccountContactAssociationDeleteResult' => 'FatTail\\AdBook\\ArrayOfAccountContactAssociationDeleteResult',
      'AccountContactAssociationDeleteResult' => 'FatTail\\AdBook\\AccountContactAssociationDeleteResult',
      'GetAccountManagerAssociationByContactID' => 'FatTail\\AdBook\\GetAccountManagerAssociationByContactID',
      'GetAccountManagerAssociationByContactIDResponse' => 'FatTail\\AdBook\\GetAccountManagerAssociationByContactIDResponse',
      'ArrayOfAccountManagerAssociation' => 'FatTail\\AdBook\\ArrayOfAccountManagerAssociation',
      'AccountManagerAssociation' => 'FatTail\\AdBook\\AccountManagerAssociation',
      'GetAccountManagerAssociationByClientID' => 'FatTail\\AdBook\\GetAccountManagerAssociationByClientID',
      'GetAccountManagerAssociationByClientIDResponse' => 'FatTail\\AdBook\\GetAccountManagerAssociationByClientIDResponse',
      'CreateAccountManagerAssociation' => 'FatTail\\AdBook\\CreateAccountManagerAssociation',
      'CreateAccountManagerAssociationResponse' => 'FatTail\\AdBook\\CreateAccountManagerAssociationResponse',
      'ArrayOfAccountManagerAssociationCreateResult' => 'FatTail\\AdBook\\ArrayOfAccountManagerAssociationCreateResult',
      'AccountManagerAssociationCreateResult' => 'FatTail\\AdBook\\AccountManagerAssociationCreateResult',
      'RemoveAccountManagerAssociation' => 'FatTail\\AdBook\\RemoveAccountManagerAssociation',
      'RemoveAccountManagerAssociationResponse' => 'FatTail\\AdBook\\RemoveAccountManagerAssociationResponse',
      'ArrayOfAccountManagerAssociationDeleteResult' => 'FatTail\\AdBook\\ArrayOfAccountManagerAssociationDeleteResult',
      'AccountManagerAssociationDeleteResult' => 'FatTail\\AdBook\\AccountManagerAssociationDeleteResult',
      'GetAccountManagerRepTypeAssociationByClientID' => 'FatTail\\AdBook\\GetAccountManagerRepTypeAssociationByClientID',
      'GetAccountManagerRepTypeAssociationByClientIDResponse' => 'FatTail\\AdBook\\GetAccountManagerRepTypeAssociationByClientIDResponse',
      'ArrayOfAccountManagerGroupAssociation' => 'FatTail\\AdBook\\ArrayOfAccountManagerGroupAssociation',
      'AccountManagerGroupAssociation' => 'FatTail\\AdBook\\AccountManagerGroupAssociation',
      'GetAccountManagerRepTypeAssociationByRepTypeID' => 'FatTail\\AdBook\\GetAccountManagerRepTypeAssociationByRepTypeID',
      'GetAccountManagerRepTypeAssociationByRepTypeIDResponse' => 'FatTail\\AdBook\\GetAccountManagerRepTypeAssociationByRepTypeIDResponse',
      'CreateAccountManagerRepTypeAssociation' => 'FatTail\\AdBook\\CreateAccountManagerRepTypeAssociation',
      'CreateAccountManagerRepTypeAssociationResponse' => 'FatTail\\AdBook\\CreateAccountManagerRepTypeAssociationResponse',
      'ArrayOfAccountManagerGroupAssociationCreateResult' => 'FatTail\\AdBook\\ArrayOfAccountManagerGroupAssociationCreateResult',
      'AccountManagerGroupAssociationCreateResult' => 'FatTail\\AdBook\\AccountManagerGroupAssociationCreateResult',
      'RemoveAccountManagerRepTypeAssociation' => 'FatTail\\AdBook\\RemoveAccountManagerRepTypeAssociation',
      'RemoveAccountManagerRepTypeAssociationResponse' => 'FatTail\\AdBook\\RemoveAccountManagerRepTypeAssociationResponse',
      'ArrayOfAccountManagerGroupAssociationDeleteResult' => 'FatTail\\AdBook\\ArrayOfAccountManagerGroupAssociationDeleteResult',
      'AccountManagerGroupAssociationDeleteResult' => 'FatTail\\AdBook\\AccountManagerGroupAssociationDeleteResult',
      'GetAvailability' => 'FatTail\\AdBook\\GetAvailability',
      'AvailabilityRequest' => 'FatTail\\AdBook\\AvailabilityRequest',
      'GetAvailabilityResponse' => 'FatTail\\AdBook\\GetAvailabilityResponse',
      'Availability' => 'FatTail\\AdBook\\Availability',
      'GetAvailabilityList' => 'FatTail\\AdBook\\GetAvailabilityList',
      'ArrayOfAvailabilityRequest' => 'FatTail\\AdBook\\ArrayOfAvailabilityRequest',
      'GetAvailabilityListResponse' => 'FatTail\\AdBook\\GetAvailabilityListResponse',
      'ArrayOfAvailability' => 'FatTail\\AdBook\\ArrayOfAvailability',
      'GetNewsletterAvailabilityList' => 'FatTail\\AdBook\\GetNewsletterAvailabilityList',
      'ArrayOfNewsletterAvailabilityRequest' => 'FatTail\\AdBook\\ArrayOfNewsletterAvailabilityRequest',
      'NewsletterAvailabilityRequest' => 'FatTail\\AdBook\\NewsletterAvailabilityRequest',
      'GetNewsletterAvailabilityListResponse' => 'FatTail\\AdBook\\GetNewsletterAvailabilityListResponse',
      'ArrayOfNewsletterAvailability' => 'FatTail\\AdBook\\ArrayOfNewsletterAvailability',
      'NewsletterAvailability' => 'FatTail\\AdBook\\NewsletterAvailability',
      'GetAvailabilityListFromReport' => 'FatTail\\AdBook\\GetAvailabilityListFromReport',
      'GetAvailabilityListFromReportResponse' => 'FatTail\\AdBook\\GetAvailabilityListFromReportResponse',
      'ImportThirdPartyDelivery' => 'FatTail\\AdBook\\ImportThirdPartyDelivery',
      'ArrayOfThirdPartyDeliveryQuantity' => 'FatTail\\AdBook\\ArrayOfThirdPartyDeliveryQuantity',
      'ThirdPartyDeliveryQuantity' => 'FatTail\\AdBook\\ThirdPartyDeliveryQuantity',
      'ImportThirdPartyDeliveryResponse' => 'FatTail\\AdBook\\ImportThirdPartyDeliveryResponse',
      'ArrayOfThirdPartyDeliveryUploadResult' => 'FatTail\\AdBook\\ArrayOfThirdPartyDeliveryUploadResult',
      'ThirdPartyDeliveryUploadResult' => 'FatTail\\AdBook\\ThirdPartyDeliveryUploadResult',
      'ImportContentTargetingDelivery' => 'FatTail\\AdBook\\ImportContentTargetingDelivery',
      'ArrayOfContentTargetingDelivery' => 'FatTail\\AdBook\\ArrayOfContentTargetingDelivery',
      'ContentTargetingDelivery' => 'FatTail\\AdBook\\ContentTargetingDelivery',
      'ImportContentTargetingDeliveryResponse' => 'FatTail\\AdBook\\ImportContentTargetingDeliveryResponse',
      'ContentTargetingDeliveryUploadSummary' => 'FatTail\\AdBook\\ContentTargetingDeliveryUploadSummary',
      'ArrayOfContentTargetingDeliveryUploadResult' => 'FatTail\\AdBook\\ArrayOfContentTargetingDeliveryUploadResult',
      'ContentTargetingDeliveryUploadResult' => 'FatTail\\AdBook\\ContentTargetingDeliveryUploadResult',
      'ImportFirstPartyDelivery' => 'FatTail\\AdBook\\ImportFirstPartyDelivery',
      'FirstPartyDelivery' => 'FatTail\\AdBook\\FirstPartyDelivery',
      'ArrayOfFirstPartyDeliveryQuantity' => 'FatTail\\AdBook\\ArrayOfFirstPartyDeliveryQuantity',
      'FirstPartyDeliveryQuantity' => 'FatTail\\AdBook\\FirstPartyDeliveryQuantity',
      'ImportFirstPartyDeliveryResponse' => 'FatTail\\AdBook\\ImportFirstPartyDeliveryResponse',
      'FirstPartyDeliveryUploadSummary' => 'FatTail\\AdBook\\FirstPartyDeliveryUploadSummary',
      'ArrayOfFirstPartyDeliveryUploadResult' => 'FatTail\\AdBook\\ArrayOfFirstPartyDeliveryUploadResult',
      'FirstPartyDeliveryUploadResult' => 'FatTail\\AdBook\\FirstPartyDeliveryUploadResult',
      'GetAdServerDropMappingForDateRange' => 'FatTail\\AdBook\\GetAdServerDropMappingForDateRange',
      'GetAdServerDropMappingForDateRangeResponse' => 'FatTail\\AdBook\\GetAdServerDropMappingForDateRangeResponse',
      'ArrayOfAdServerEntityMapping' => 'FatTail\\AdBook\\ArrayOfAdServerEntityMapping',
      'AdServerEntityMapping' => 'FatTail\\AdBook\\AdServerEntityMapping',
      'GetRateCardNameList' => 'FatTail\\AdBook\\GetRateCardNameList',
      'GetRateCardNameListResponse' => 'FatTail\\AdBook\\GetRateCardNameListResponse',
      'ArrayOfRateCardName' => 'FatTail\\AdBook\\ArrayOfRateCardName',
      'RateCardName' => 'FatTail\\AdBook\\RateCardName',
      'GetAdUnitList' => 'FatTail\\AdBook\\GetAdUnitList',
      'GetAdUnitListResponse' => 'FatTail\\AdBook\\GetAdUnitListResponse',
      'ArrayOfAdUnit' => 'FatTail\\AdBook\\ArrayOfAdUnit',
      'AdUnit' => 'FatTail\\AdBook\\AdUnit',
      'GetRepTypeList' => 'FatTail\\AdBook\\GetRepTypeList',
      'GetRepTypeListResponse' => 'FatTail\\AdBook\\GetRepTypeListResponse',
      'ArrayOfRepType' => 'FatTail\\AdBook\\ArrayOfRepType',
      'RepType' => 'FatTail\\AdBook\\RepType',
      'GetCurrencyList' => 'FatTail\\AdBook\\GetCurrencyList',
      'GetCurrencyListResponse' => 'FatTail\\AdBook\\GetCurrencyListResponse',
      'ArrayOfCurrency' => 'FatTail\\AdBook\\ArrayOfCurrency',
      'Currency' => 'FatTail\\AdBook\\Currency',
      'GetMediaElement' => 'FatTail\\AdBook\\GetMediaElement',
      'GetMediaElementResponse' => 'FatTail\\AdBook\\GetMediaElementResponse',
      'MediaElement' => 'FatTail\\AdBook\\MediaElement',
      'ArrayOfMediaElementPropertyValue' => 'FatTail\\AdBook\\ArrayOfMediaElementPropertyValue',
      'GetMediaElementProductList' => 'FatTail\\AdBook\\GetMediaElementProductList',
      'GetMediaElementProductListResponse' => 'FatTail\\AdBook\\GetMediaElementProductListResponse',
      'ArrayOfMediaElement' => 'FatTail\\AdBook\\ArrayOfMediaElement',
      'GetMediaElementList' => 'FatTail\\AdBook\\GetMediaElementList',
      'GetMediaElementListResponse' => 'FatTail\\AdBook\\GetMediaElementListResponse',
      'GetMediaElementListByDynamicPropertyValue' => 'FatTail\\AdBook\\GetMediaElementListByDynamicPropertyValue',
      'GetMediaElementListByDynamicPropertyValueResponse' => 'FatTail\\AdBook\\GetMediaElementListByDynamicPropertyValueResponse',
      'GetMediaElementListForParent' => 'FatTail\\AdBook\\GetMediaElementListForParent',
      'GetMediaElementListForParentResponse' => 'FatTail\\AdBook\\GetMediaElementListForParentResponse',
      'GetOrderStatusList' => 'FatTail\\AdBook\\GetOrderStatusList',
      'GetOrderStatusListResponse' => 'FatTail\\AdBook\\GetOrderStatusListResponse',
      'ArrayOfOrderStatus' => 'FatTail\\AdBook\\ArrayOfOrderStatus',
      'OrderStatus' => 'FatTail\\AdBook\\OrderStatus',
      'GetPositionPricingForRateCard' => 'FatTail\\AdBook\\GetPositionPricingForRateCard',
      'GetPositionPricingForRateCardResponse' => 'FatTail\\AdBook\\GetPositionPricingForRateCardResponse',
      'ArrayOfPositionPricing' => 'FatTail\\AdBook\\ArrayOfPositionPricing',
      'PositionPricing' => 'FatTail\\AdBook\\PositionPricing',
      'GetPositionPricingForRateCardByPosition' => 'FatTail\\AdBook\\GetPositionPricingForRateCardByPosition',
      'GetPositionPricingForRateCardByPositionResponse' => 'FatTail\\AdBook\\GetPositionPricingForRateCardByPositionResponse',
      'GetPositionPricingList' => 'FatTail\\AdBook\\GetPositionPricingList',
      'GetPositionPricingListResponse' => 'FatTail\\AdBook\\GetPositionPricingListResponse',
      'GetPriceTypeList' => 'FatTail\\AdBook\\GetPriceTypeList',
      'GetPriceTypeListResponse' => 'FatTail\\AdBook\\GetPriceTypeListResponse',
      'ArrayOfPriceType' => 'FatTail\\AdBook\\ArrayOfPriceType',
      'PriceType' => 'FatTail\\AdBook\\PriceType',
      'GetRepList' => 'FatTail\\AdBook\\GetRepList',
      'GetRepListResponse' => 'FatTail\\AdBook\\GetRepListResponse',
      'ArrayOfRep' => 'FatTail\\AdBook\\ArrayOfRep',
      'Rep' => 'FatTail\\AdBook\\Rep',
      'GetRepListForType' => 'FatTail\\AdBook\\GetRepListForType',
      'GetRepListForTypeResponse' => 'FatTail\\AdBook\\GetRepListForTypeResponse',
      'GetServedByList' => 'FatTail\\AdBook\\GetServedByList',
      'GetServedByListResponse' => 'FatTail\\AdBook\\GetServedByListResponse',
      'ArrayOfServedBy' => 'FatTail\\AdBook\\ArrayOfServedBy',
      'ServedBy' => 'FatTail\\AdBook\\ServedBy',
      'GetTargetingElementList' => 'FatTail\\AdBook\\GetTargetingElementList',
      'GetTargetingElementListResponse' => 'FatTail\\AdBook\\GetTargetingElementListResponse',
      'ArrayOfTargetingElement' => 'FatTail\\AdBook\\ArrayOfTargetingElement',
      'TargetingElement' => 'FatTail\\AdBook\\TargetingElement',
      'GetTargetingGroupList' => 'FatTail\\AdBook\\GetTargetingGroupList',
      'GetTargetingGroupListResponse' => 'FatTail\\AdBook\\GetTargetingGroupListResponse',
      'ArrayOfTargetingGroup' => 'FatTail\\AdBook\\ArrayOfTargetingGroup',
      'TargetingGroup' => 'FatTail\\AdBook\\TargetingGroup',
      'GetTargetingPackageList' => 'FatTail\\AdBook\\GetTargetingPackageList',
      'GetTargetingPackageListResponse' => 'FatTail\\AdBook\\GetTargetingPackageListResponse',
      'ArrayOfTargetingPackage' => 'FatTail\\AdBook\\ArrayOfTargetingPackage',
      'TargetingPackage' => 'FatTail\\AdBook\\TargetingPackage',
      'GetThirdPartyAdServerList' => 'FatTail\\AdBook\\GetThirdPartyAdServerList',
      'GetThirdPartyAdServerListResponse' => 'FatTail\\AdBook\\GetThirdPartyAdServerListResponse',
      'ArrayOfThirdPartyAdServer' => 'FatTail\\AdBook\\ArrayOfThirdPartyAdServer',
      'ThirdPartyAdServer' => 'FatTail\\AdBook\\ThirdPartyAdServer',
      'GetThirdPartyMetricList' => 'FatTail\\AdBook\\GetThirdPartyMetricList',
      'GetThirdPartyMetricListResponse' => 'FatTail\\AdBook\\GetThirdPartyMetricListResponse',
      'ArrayOfThirdPartyMetric' => 'FatTail\\AdBook\\ArrayOfThirdPartyMetric',
      'ThirdPartyMetric' => 'FatTail\\AdBook\\ThirdPartyMetric',
      'GetOrderConfigurationList' => 'FatTail\\AdBook\\GetOrderConfigurationList',
      'GetOrderConfigurationListResponse' => 'FatTail\\AdBook\\GetOrderConfigurationListResponse',
      'ArrayOfOrderConfiguration' => 'FatTail\\AdBook\\ArrayOfOrderConfiguration',
      'OrderConfiguration' => 'FatTail\\AdBook\\OrderConfiguration',
      'GetDynamicPropertiesListValuesByPropertyID' => 'FatTail\\AdBook\\GetDynamicPropertiesListValuesByPropertyID',
      'GetDynamicPropertiesListValuesByPropertyIDResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListValuesByPropertyIDResponse',
      'ArrayOfDynamicPropertyListElement' => 'FatTail\\AdBook\\ArrayOfDynamicPropertyListElement',
      'DynamicPropertyListElement' => 'FatTail\\AdBook\\DynamicPropertyListElement',
      'GetDynamicPropertiesListForDrop' => 'FatTail\\AdBook\\GetDynamicPropertiesListForDrop',
      'GetDynamicPropertiesListForDropResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForDropResponse',
      'GetDynamicPropertiesListForOrder' => 'FatTail\\AdBook\\GetDynamicPropertiesListForOrder',
      'GetDynamicPropertiesListForOrderResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForOrderResponse',
      'GetDynamicPropertiesListForAccount' => 'FatTail\\AdBook\\GetDynamicPropertiesListForAccount',
      'GetDynamicPropertiesListForAccountResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForAccountResponse',
      'GetDynamicPropertiesListValuesForAccount' => 'FatTail\\AdBook\\GetDynamicPropertiesListValuesForAccount',
      'GetDynamicPropertiesListValuesForAccountResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListValuesForAccountResponse',
      'GetAdServerList' => 'FatTail\\AdBook\\GetAdServerList',
      'GetAdServerListResponse' => 'FatTail\\AdBook\\GetAdServerListResponse',
      'ArrayOfAdServer' => 'FatTail\\AdBook\\ArrayOfAdServer',
      'AdServer' => 'FatTail\\AdBook\\AdServer',
      'GetMediaElementPropertiesListValuesByPropertyID' => 'FatTail\\AdBook\\GetMediaElementPropertiesListValuesByPropertyID',
      'GetMediaElementPropertiesListValuesByPropertyIDResponse' => 'FatTail\\AdBook\\GetMediaElementPropertiesListValuesByPropertyIDResponse',
      'ArrayOfMediaElementPropertyListItem' => 'FatTail\\AdBook\\ArrayOfMediaElementPropertyListItem',
      'MediaElementPropertyListItem' => 'FatTail\\AdBook\\MediaElementPropertyListItem',
      'GetMediaElementPropertiesList' => 'FatTail\\AdBook\\GetMediaElementPropertiesList',
      'GetMediaElementPropertiesListResponse' => 'FatTail\\AdBook\\GetMediaElementPropertiesListResponse',
      'ArrayOfMediaElementProperty' => 'FatTail\\AdBook\\ArrayOfMediaElementProperty',
      'MediaElementProperty' => 'FatTail\\AdBook\\MediaElementProperty',
      'GetDynamicPropertiesListForCreativeAssignment' => 'FatTail\\AdBook\\GetDynamicPropertiesListForCreativeAssignment',
      'GetDynamicPropertiesListForCreativeAssignmentResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForCreativeAssignmentResponse',
      'GetDynamicPropertiesListForDropBillingAdjustment' => 'FatTail\\AdBook\\GetDynamicPropertiesListForDropBillingAdjustment',
      'GetDynamicPropertiesListForDropBillingAdjustmentResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForDropBillingAdjustmentResponse',
      'GetCreativeDynamicPropertiesListValuesByPropertyID' => 'FatTail\\AdBook\\GetCreativeDynamicPropertiesListValuesByPropertyID',
      'GetCreativeDynamicPropertiesListValuesByPropertyIDResponse' => 'FatTail\\AdBook\\GetCreativeDynamicPropertiesListValuesByPropertyIDResponse',
      'GetPublisherContactListForCustomTasks' => 'FatTail\\AdBook\\GetPublisherContactListForCustomTasks',
      'GetPublisherContactListForCustomTasksResponse' => 'FatTail\\AdBook\\GetPublisherContactListForCustomTasksResponse',
      'ArrayOfPublisherContact' => 'FatTail\\AdBook\\ArrayOfPublisherContact',
      'PublisherContact' => 'FatTail\\AdBook\\PublisherContact',
      'GetDynamicPropertiesListForOrderAttachments' => 'FatTail\\AdBook\\GetDynamicPropertiesListForOrderAttachments',
      'GetDynamicPropertiesListForOrderAttachmentsResponse' => 'FatTail\\AdBook\\GetDynamicPropertiesListForOrderAttachmentsResponse',
      'GetPackageDefinition' => 'FatTail\\AdBook\\GetPackageDefinition',
      'GetPackageDefinitionResponse' => 'FatTail\\AdBook\\GetPackageDefinitionResponse',
      'ArrayOfPackageDefinition' => 'FatTail\\AdBook\\ArrayOfPackageDefinition',
      'PackageDefinition' => 'FatTail\\AdBook\\PackageDefinition',
      'GetPackageComponentDrops' => 'FatTail\\AdBook\\GetPackageComponentDrops',
      'GetPackageComponentDropsResponse' => 'FatTail\\AdBook\\GetPackageComponentDropsResponse',
      'ArrayOfPackageComponentDrop' => 'FatTail\\AdBook\\ArrayOfPackageComponentDrop',
      'PackageComponentDrop' => 'FatTail\\AdBook\\PackageComponentDrop',
      'CreatePackageComponentDrops' => 'FatTail\\AdBook\\CreatePackageComponentDrops',
      'CreatePackageComponentDropsResponse' => 'FatTail\\AdBook\\CreatePackageComponentDropsResponse',
      'ArrayOfPackageComponentDropCreateResult' => 'FatTail\\AdBook\\ArrayOfPackageComponentDropCreateResult',
      'PackageComponentDropCreateResult' => 'FatTail\\AdBook\\PackageComponentDropCreateResult',
      'UpdatePackageComponentDrops' => 'FatTail\\AdBook\\UpdatePackageComponentDrops',
      'UpdatePackageComponentDropsResponse' => 'FatTail\\AdBook\\UpdatePackageComponentDropsResponse',
      'ArrayOfPackageComponentDropUpdateResult' => 'FatTail\\AdBook\\ArrayOfPackageComponentDropUpdateResult',
      'PackageComponentDropUpdateResult' => 'FatTail\\AdBook\\PackageComponentDropUpdateResult',
      'DeletePackageComponentDrops' => 'FatTail\\AdBook\\DeletePackageComponentDrops',
      'DeletePackageComponentDropsResponse' => 'FatTail\\AdBook\\DeletePackageComponentDropsResponse',
      'ArrayOfPackageComponentDropDeleteResult' => 'FatTail\\AdBook\\ArrayOfPackageComponentDropDeleteResult',
      'PackageComponentDropDeleteResult' => 'FatTail\\AdBook\\PackageComponentDropDeleteResult',
      'BuildKeyValueCriteriaSetGraph' => 'FatTail\\AdBook\\BuildKeyValueCriteriaSetGraph',
      'BuildKeyValueCriteriaSetGraphResponse' => 'FatTail\\AdBook\\BuildKeyValueCriteriaSetGraphResponse',
      'TargetCriteriaSetOR' => 'FatTail\\AdBook\\TargetCriteriaSetOR',
      'ArrayOfTargetCriteriaSetAND' => 'FatTail\\AdBook\\ArrayOfTargetCriteriaSetAND',
      'TargetCriteriaSetAND' => 'FatTail\\AdBook\\TargetCriteriaSetAND',
      'ArrayOfTargetCriteria' => 'FatTail\\AdBook\\ArrayOfTargetCriteria',
      'TargetCriteria' => 'FatTail\\AdBook\\TargetCriteria',
      'TargetKey' => 'FatTail\\AdBook\\TargetKey',
      'ArrayOfTargetValue' => 'FatTail\\AdBook\\ArrayOfTargetValue',
      'TargetValue' => 'FatTail\\AdBook\\TargetValue',
      'BuildKeyValueExpression' => 'FatTail\\AdBook\\BuildKeyValueExpression',
      'BuildKeyValueExpressionResponse' => 'FatTail\\AdBook\\BuildKeyValueExpressionResponse',
      'GetAdServerEntityValues' => 'FatTail\\AdBook\\GetAdServerEntityValues',
      'GetAdServerEntityValuesResponse' => 'FatTail\\AdBook\\GetAdServerEntityValuesResponse',
      'ArrayOfAdServerEntityName' => 'FatTail\\AdBook\\ArrayOfAdServerEntityName',
      'AdServerEntityName' => 'FatTail\\AdBook\\AdServerEntityName',
      'ArrayOfAdServerEntityProperty' => 'FatTail\\AdBook\\ArrayOfAdServerEntityProperty',
      'AdServerEntityProperty' => 'FatTail\\AdBook\\AdServerEntityProperty',
      'GetExternalDataMapList' => 'FatTail\\AdBook\\GetExternalDataMapList',
      'GetExternalDataMapListResponse' => 'FatTail\\AdBook\\GetExternalDataMapListResponse',
      'ArrayOfExternalDataMap' => 'FatTail\\AdBook\\ArrayOfExternalDataMap',
      'ExternalDataMap' => 'FatTail\\AdBook\\ExternalDataMap',
      'GetExternalDataMapListForType' => 'FatTail\\AdBook\\GetExternalDataMapListForType',
      'GetExternalDataMapListForTypeResponse' => 'FatTail\\AdBook\\GetExternalDataMapListForTypeResponse',
      'CreateExternalDataMap' => 'FatTail\\AdBook\\CreateExternalDataMap',
      'CreateExternalDataMapResponse' => 'FatTail\\AdBook\\CreateExternalDataMapResponse',
      'DeleteExternalDataMap' => 'FatTail\\AdBook\\DeleteExternalDataMap',
      'DeleteExternalDataMapResponse' => 'FatTail\\AdBook\\DeleteExternalDataMapResponse',
      'GetSavedReportList' => 'FatTail\\AdBook\\GetSavedReportList',
      'GetSavedReportListResponse' => 'FatTail\\AdBook\\GetSavedReportListResponse',
      'ArrayOfSavedReport' => 'FatTail\\AdBook\\ArrayOfSavedReport',
      'SavedReport' => 'FatTail\\AdBook\\SavedReport',
      'GetSavedReportQuery' => 'FatTail\\AdBook\\GetSavedReportQuery',
      'GetSavedReportQueryResponse' => 'FatTail\\AdBook\\GetSavedReportQueryResponse',
      'SavedReportQuery' => 'FatTail\\AdBook\\SavedReportQuery',
      'ReportQuery' => 'FatTail\\AdBook\\ReportQuery',
      'ArrayOfQueryFilter' => 'FatTail\\AdBook\\ArrayOfQueryFilter',
      'QueryFilter' => 'FatTail\\AdBook\\QueryFilter',
      'ArrayOfQueryParameter' => 'FatTail\\AdBook\\ArrayOfQueryParameter',
      'QueryParameter' => 'FatTail\\AdBook\\QueryParameter',
      'RunReportJob' => 'FatTail\\AdBook\\RunReportJob',
      'ReportJob' => 'FatTail\\AdBook\\ReportJob',
      'RunReportJobResponse' => 'FatTail\\AdBook\\RunReportJobResponse',
      'GetReportJob' => 'FatTail\\AdBook\\GetReportJob',
      'GetReportJobResponse' => 'FatTail\\AdBook\\GetReportJobResponse',
      'GetReportDownloadURL' => 'FatTail\\AdBook\\GetReportDownloadURL',
      'GetReportDownloadURLResponse' => 'FatTail\\AdBook\\GetReportDownloadURLResponse',
      'GetQueryFilterValueList' => 'FatTail\\AdBook\\GetQueryFilterValueList',
      'GetQueryFilterValueListResponse' => 'FatTail\\AdBook\\GetQueryFilterValueListResponse',
      'ArrayOfQueryFilterValue' => 'FatTail\\AdBook\\ArrayOfQueryFilterValue',
      'QueryFilterValue' => 'FatTail\\AdBook\\QueryFilterValue',
      'GetQueryParameterList' => 'FatTail\\AdBook\\GetQueryParameterList',
      'GetQueryParameterListResponse' => 'FatTail\\AdBook\\GetQueryParameterListResponse',
      'GetFieldOutputColumnList' => 'FatTail\\AdBook\\GetFieldOutputColumnList',
      'GetFieldOutputColumnListResponse' => 'FatTail\\AdBook\\GetFieldOutputColumnListResponse',
      'ArrayOfFieldOutputColumn' => 'FatTail\\AdBook\\ArrayOfFieldOutputColumn',
      'FieldOutputColumn' => 'FatTail\\AdBook\\FieldOutputColumn',
      'GetDeliveryDetailOutputColumnList' => 'FatTail\\AdBook\\GetDeliveryDetailOutputColumnList',
      'GetDeliveryDetailOutputColumnListResponse' => 'FatTail\\AdBook\\GetDeliveryDetailOutputColumnListResponse',
      'ArrayOfDeliveryDetailOutputColumn' => 'FatTail\\AdBook\\ArrayOfDeliveryDetailOutputColumn',
      'DeliveryDetailOutputColumn' => 'FatTail\\AdBook\\DeliveryDetailOutputColumn',
      'GetMetricOutputColumnList' => 'FatTail\\AdBook\\GetMetricOutputColumnList',
      'GetMetricOutputColumnListResponse' => 'FatTail\\AdBook\\GetMetricOutputColumnListResponse',
      'ArrayOfMetricOutputColumn' => 'FatTail\\AdBook\\ArrayOfMetricOutputColumn',
      'MetricOutputColumn' => 'FatTail\\AdBook\\MetricOutputColumn',
      'ArrayOflong' => 'FatTail\\AdBook\\ArrayOflong',
      'ArrayOfstring' => 'FatTail\\AdBook\\ArrayOfstring',
      'PositionSize' => 'FatTail\\AdBook\\PositionSize',
      'ArrayOfKeyValuePairOfstringstring' => 'FatTail\\AdBook\\ArrayOfKeyValuePairOfstringstring',
      'KeyValuePairOfstringstring' => 'FatTail\\AdBook\\KeyValuePairOfstringstring',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array('features' => 1), $options);

        if (is_null($wsdl)) {
            $options['location'] = '';
            $options['uri'] = '';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param RunClientAgencyReportJob $parameters
     * @return RunClientAgencyReportJobResponse
     */
    public function RunClientAgencyReportJob(RunClientAgencyReportJob $parameters)
    {
      return $this->__soapCall('RunClientAgencyReportJob', array($parameters));
    }

    /**
     * @param GetClientAgencyReportJob $parameters
     * @return GetClientAgencyReportJobResponse
     */
    public function GetClientAgencyReportJob(GetClientAgencyReportJob $parameters)
    {
      return $this->__soapCall('GetClientAgencyReportJob', array($parameters));
    }

    /**
     * @param GetMediaElementPropertyValue $parameters
     * @return GetMediaElementPropertyValueResponse
     */
    public function GetMediaElementPropertyValue(GetMediaElementPropertyValue $parameters)
    {
      return $this->__soapCall('GetMediaElementPropertyValue', array($parameters));
    }

    /**
     * @param GetMediaElementAdSize $parameters
     * @return GetMediaElementAdSizeResponse
     */
    public function GetMediaElementAdSize(GetMediaElementAdSize $parameters)
    {
      return $this->__soapCall('GetMediaElementAdSize', array($parameters));
    }

    /**
     * @param CreateCreative $parameters
     * @return CreateCreativeResponse
     */
    public function CreateCreative(CreateCreative $parameters)
    {
      return $this->__soapCall('CreateCreative', array($parameters));
    }

    /**
     * @param UpdateCreative $parameters
     * @return UpdateCreativeResponse
     */
    public function UpdateCreative(UpdateCreative $parameters)
    {
      return $this->__soapCall('UpdateCreative', array($parameters));
    }

    /**
     * @param GetDynamicPropertiesListForCreative $parameters
     * @return GetDynamicPropertiesListForCreativeResponse
     */
    public function GetDynamicPropertiesListForCreative(GetDynamicPropertiesListForCreative $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForCreative', array($parameters));
    }

    /**
     * @param GetCreativeList $parameters
     * @return GetCreativeListResponse
     */
    public function GetCreativeList(GetCreativeList $parameters)
    {
      return $this->__soapCall('GetCreativeList', array($parameters));
    }

    /**
     * @param GetCreative $parameters
     * @return GetCreativeResponse
     */
    public function GetCreative(GetCreative $parameters)
    {
      return $this->__soapCall('GetCreative', array($parameters));
    }

    /**
     * @param GetCreativeAssignment $parameters
     * @return GetCreativeAssignmentResponse
     */
    public function GetCreativeAssignment(GetCreativeAssignment $parameters)
    {
      return $this->__soapCall('GetCreativeAssignment', array($parameters));
    }

    /**
     * @param GetCreativeAssignmentListForOrder $parameters
     * @return GetCreativeAssignmentListForOrderResponse
     */
    public function GetCreativeAssignmentListForOrder(GetCreativeAssignmentListForOrder $parameters)
    {
      return $this->__soapCall('GetCreativeAssignmentListForOrder', array($parameters));
    }

    /**
     * @param UpdateCreativeAssignment $parameters
     * @return UpdateCreativeAssignmentResponse
     */
    public function UpdateCreativeAssignment(UpdateCreativeAssignment $parameters)
    {
      return $this->__soapCall('UpdateCreativeAssignment', array($parameters));
    }

    /**
     * @param CreateCreativeAssignment $parameters
     * @return CreateCreativeAssignmentResponse
     */
    public function CreateCreativeAssignment(CreateCreativeAssignment $parameters)
    {
      return $this->__soapCall('CreateCreativeAssignment', array($parameters));
    }

    /**
     * @param DeleteCreativeAssignment $parameters
     * @return DeleteCreativeAssignmentResponse
     */
    public function DeleteCreativeAssignment(DeleteCreativeAssignment $parameters)
    {
      return $this->__soapCall('DeleteCreativeAssignment', array($parameters));
    }

    /**
     * @param GetDropBillingAdjustmentList $parameters
     * @return GetDropBillingAdjustmentListResponse
     */
    public function GetDropBillingAdjustmentList(GetDropBillingAdjustmentList $parameters)
    {
      return $this->__soapCall('GetDropBillingAdjustmentList', array($parameters));
    }

    /**
     * @param CreateDropBillingAdjustments $parameters
     * @return CreateDropBillingAdjustmentsResponse
     */
    public function CreateDropBillingAdjustments(CreateDropBillingAdjustments $parameters)
    {
      return $this->__soapCall('CreateDropBillingAdjustments', array($parameters));
    }

    /**
     * @param UpdateDropBillingAdjustments $parameters
     * @return UpdateDropBillingAdjustmentsResponse
     */
    public function UpdateDropBillingAdjustments(UpdateDropBillingAdjustments $parameters)
    {
      return $this->__soapCall('UpdateDropBillingAdjustments', array($parameters));
    }

    /**
     * @param DeleteDropBillingAdjustments $parameters
     * @return DeleteDropBillingAdjustmentsResponse
     */
    public function DeleteDropBillingAdjustments(DeleteDropBillingAdjustments $parameters)
    {
      return $this->__soapCall('DeleteDropBillingAdjustments', array($parameters));
    }

    /**
     * <summary>Establishes an association between a client and an agency.</summary>
     *             <param name="relationship">Client/agency association to create.</param>
     *
     * @param CreateClientAgencyRelationship $parameters
     * @return CreateClientAgencyRelationshipResponse
     */
    public function CreateClientAgencyRelationship(CreateClientAgencyRelationship $parameters)
    {
      return $this->__soapCall('CreateClientAgencyRelationship', array($parameters));
    }

    /**
     * <summary>Creates an Agency object.</summary>
     *             <param name="agency">Agency object to create.</param>
     *             <returns>Agency object that was created.</returns>
     *
     * @param CreateAgency $parameters
     * @return CreateAgencyResponse
     */
    public function CreateAgency(CreateAgency $parameters)
    {
      return $this->__soapCall('CreateAgency', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="agencyId"></param>
     *
     * @param DeleteAgency $parameters
     * @return DeleteAgencyResponse
     */
    public function DeleteAgency(DeleteAgency $parameters)
    {
      return $this->__soapCall('DeleteAgency', array($parameters));
    }

    /**
     * <summary>Retrieves an Agency.</summary>
     *             <param name="agencyId">AgencyID for the desired Agency object.</param>
     *             <returns>Agency object requested.</returns>
     *
     * @param GetAgency $parameters
     * @return GetAgencyResponse
     */
    public function GetAgency(GetAgency $parameters)
    {
      return $this->__soapCall('GetAgency', array($parameters));
    }

    /**
     * <summary>Retrieves a list of all Agency objects.</summary>
     *             <returns></returns>
     *
     * @param GetAgencyList $parameters
     * @return GetAgencyListResponse
     */
    public function GetAgencyList(GetAgencyList $parameters)
    {
      return $this->__soapCall('GetAgencyList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of Agency objects for the specified ClientID.</summary>
     *             <param name="clientId">ClientID of the Client object being requested.</param>
     *             <returns>Collection of Agency objects associated with the requested Client.</returns>
     *
     * @param GetAgencyListForClient $parameters
     * @return GetAgencyListForClientResponse
     */
    public function GetAgencyListForClient(GetAgencyListForClient $parameters)
    {
      return $this->__soapCall('GetAgencyListForClient', array($parameters));
    }

    /**
     * <summary>Retrieve all client/agency associations.</summary>
     *             <returns>Collection of ClientAgencyRelationship objects that contain the associations for all clients and agencies in the system.</returns>
     *
     * @param GetClientAgencyRelationships $parameters
     * @return GetClientAgencyRelationshipsResponse
     */
    public function GetClientAgencyRelationships(GetClientAgencyRelationships $parameters)
    {
      return $this->__soapCall('GetClientAgencyRelationships', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="containsValue"></param>
     *             <returns></returns>
     *
     * @param SearchAgencyListByName $parameters
     * @return SearchAgencyListByNameResponse
     */
    public function SearchAgencyListByName(SearchAgencyListByName $parameters)
    {
      return $this->__soapCall('SearchAgencyListByName', array($parameters));
    }

    /**
     * <summary>Update an Agency.</summary>
     *             <param name="agency">Agency object to update.</param>
     *
     * @param UpdateAgency $parameters
     * @return UpdateAgencyResponse
     */
    public function UpdateAgency(UpdateAgency $parameters)
    {
      return $this->__soapCall('UpdateAgency', array($parameters));
    }

    /**
     * <summary>Creates a Client object.</summary>
     *             <param name="client">Client object to create.</param>
     *             <returns>Client object that was created.</returns>
     *
     * @param CreateClient $parameters
     * @return CreateClientResponse
     */
    public function CreateClient(CreateClient $parameters)
    {
      return $this->__soapCall('CreateClient', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="clientId"></param>
     *
     * @param DeleteClient $parameters
     * @return DeleteClientResponse
     */
    public function DeleteClient(DeleteClient $parameters)
    {
      return $this->__soapCall('DeleteClient', array($parameters));
    }

    /**
     * <summary>The input of this method is the argument GetClient having the structure defined by the following table.</summary>
     *             <param name="clientId">ClientID of the Client object being requested.</param>
     *             <returns>Client object requested.</returns>
     *
     * @param GetClient $parameters
     * @return GetClientResponse
     */
    public function GetClient(GetClient $parameters)
    {
      return $this->__soapCall('GetClient', array($parameters));
    }

    /**
     * <summary>
     *               <para>Retrieve a list of all Clients.</para>
     *             </summary>
     *             <returns>Collection of Client objects configured in AdBook.</returns>
     *
     * @param GetClientList $parameters
     * @return GetClientListResponse
     */
    public function GetClientList(GetClientList $parameters)
    {
      return $this->__soapCall('GetClientList', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="containsValue"></param>
     *             <returns></returns>
     *
     * @param SearchClientListByName $parameters
     * @return SearchClientListByNameResponse
     */
    public function SearchClientListByName(SearchClientListByName $parameters)
    {
      return $this->__soapCall('SearchClientListByName', array($parameters));
    }

    /**
     * <summary>Update a Client.</summary>
     *             <param name="client">Client object to update.</param>
     *
     * @param UpdateClient $parameters
     * @return UpdateClientResponse
     */
    public function UpdateClient(UpdateClient $parameters)
    {
      return $this->__soapCall('UpdateClient', array($parameters));
    }

    /**
     * @param CreateClientRelationshipsWithParentClient $parameters
     * @return CreateClientRelationshipsWithParentClientResponse
     */
    public function CreateClientRelationshipsWithParentClient(CreateClientRelationshipsWithParentClient $parameters)
    {
      return $this->__soapCall('CreateClientRelationshipsWithParentClient', array($parameters));
    }

    /**
     * @param DeleteClientRelationshipsWithParentClient $parameters
     * @return DeleteClientRelationshipsWithParentClientResponse
     */
    public function DeleteClientRelationshipsWithParentClient(DeleteClientRelationshipsWithParentClient $parameters)
    {
      return $this->__soapCall('DeleteClientRelationshipsWithParentClient', array($parameters));
    }

    /**
     * @param GetClientRelationshipsWithParentClientList $parameters
     * @return GetClientRelationshipsWithParentClientListResponse
     */
    public function GetClientRelationshipsWithParentClientList(GetClientRelationshipsWithParentClientList $parameters)
    {
      return $this->__soapCall('GetClientRelationshipsWithParentClientList', array($parameters));
    }

    /**
     * <summary>Retrieve an Order based on a specified OrderID.</summary>
     *             <param name="orderId">OrderID of the Order object to retrieve.</param>
     *             <returns>Order object requested.</returns>
     *
     * @param GetOrder $parameters
     * @return GetOrderResponse
     */
    public function GetOrder(GetOrder $parameters)
    {
      return $this->__soapCall('GetOrder', array($parameters));
    }

    /**
     * @param GetOrderList $parameters
     * @return GetOrderListResponse
     */
    public function GetOrderList(GetOrderList $parameters)
    {
      return $this->__soapCall('GetOrderList', array($parameters));
    }

    /**
     * <summary>Update an Order.</summary>
     *             <param name="order">Order object to update.</param>
     *
     * @param UpdateOrder $parameters
     * @return UpdateOrderResponse
     */
    public function UpdateOrder(UpdateOrder $parameters)
    {
      return $this->__soapCall('UpdateOrder', array($parameters));
    }

    /**
     * <summary>The input of this method is the argument CreateOrder having the structure defined by the following table.</summary>
     *             <param name="order">Order object to create.</param>
     *             <returns>Order object that was created.</returns>
     *
     * @param CreateOrder $parameters
     * @return CreateOrderResponse
     */
    public function CreateOrder(CreateOrder $parameters)
    {
      return $this->__soapCall('CreateOrder', array($parameters));
    }

    /**
     * <summary>Uploads a file to attach to an Order.</summary>
     *
     * @param UploadOrderAttachment $parameters
     * @return UploadOrderAttachmentResponse
     */
    public function UploadOrderAttachment(UploadOrderAttachment $parameters)
    {
      return $this->__soapCall('UploadOrderAttachment', array($parameters));
    }

    /**
     * <summary>The input of this method is the argument DownloadOrderAttachment having the structure defined by the following table.</summary>
     *             <returns>ArrayOfOrderAttachment</returns>
     *
     * @param DownloadOrderAttachment $parameters
     * @return DownloadOrderAttachmentResponse
     */
    public function DownloadOrderAttachment(DownloadOrderAttachment $parameters)
    {
      return $this->__soapCall('DownloadOrderAttachment', array($parameters));
    }

    /**
     * @param GetOrderAttachmentList $parameters
     * @return GetOrderAttachmentListResponse
     */
    public function GetOrderAttachmentList(GetOrderAttachmentList $parameters)
    {
      return $this->__soapCall('GetOrderAttachmentList', array($parameters));
    }

    /**
     * @param GetRevisionProposalsForOrder $parameters
     * @return GetRevisionProposalsForOrderResponse
     */
    public function GetRevisionProposalsForOrder(GetRevisionProposalsForOrder $parameters)
    {
      return $this->__soapCall('GetRevisionProposalsForOrder', array($parameters));
    }

    /**
     * @param GetProposalVersionsForOrder $parameters
     * @return GetProposalVersionsForOrderResponse
     */
    public function GetProposalVersionsForOrder(GetProposalVersionsForOrder $parameters)
    {
      return $this->__soapCall('GetProposalVersionsForOrder', array($parameters));
    }

    /**
     * @param CreateOrderLevelCustomTask $parameters
     * @return CreateOrderLevelCustomTaskResponse
     */
    public function CreateOrderLevelCustomTask(CreateOrderLevelCustomTask $parameters)
    {
      return $this->__soapCall('CreateOrderLevelCustomTask', array($parameters));
    }

    /**
     * @param GetOrderAttachmentsByDynamicPropertyId $parameters
     * @return GetOrderAttachmentsByDynamicPropertyIdResponse
     */
    public function GetOrderAttachmentsByDynamicPropertyId(GetOrderAttachmentsByDynamicPropertyId $parameters)
    {
      return $this->__soapCall('GetOrderAttachmentsByDynamicPropertyId', array($parameters));
    }

    /**
     * @param DeleteOrderAttachment $parameters
     * @return DeleteOrderAttachmentResponse
     */
    public function DeleteOrderAttachment(DeleteOrderAttachment $parameters)
    {
      return $this->__soapCall('DeleteOrderAttachment', array($parameters));
    }

    /**
     * <summary>Retrieve a Drop based on the specified DropID.</summary>
     *             <param name="dropId">DropID for the desired Drop object.</param>
     *             <returns>Drop object requested.</returns>
     *
     * @param GetDrop $parameters
     * @return GetDropResponse
     */
    public function GetDrop(GetDrop $parameters)
    {
      return $this->__soapCall('GetDrop', array($parameters));
    }

    /**
     * <summary>Retrieve all Drops for a specified OrderID.</summary>
     *             <param name="orderId">OrderID for the Order the desired Drops are associated with.</param>
     *             <returns>Collection of Drop objects associated with the requested Order.</returns>
     *
     * @param GetDropListForOrder $parameters
     * @return GetDropListForOrderResponse
     */
    public function GetDropListForOrder(GetDropListForOrder $parameters)
    {
      return $this->__soapCall('GetDropListForOrder', array($parameters));
    }

    /**
     * <summary>Update a Drop.</summary>
     *             <param name="drop">Drop object to update.</param>
     *
     * @param UpdateDrop $parameters
     * @return UpdateDropResponse
     */
    public function UpdateDrop(UpdateDrop $parameters)
    {
      return $this->__soapCall('UpdateDrop', array($parameters));
    }

    /**
     * <summary>Update a collection of Drop objects.</summary>
     *             <param name="drops">Collection of Drop objects to update.</param>
     *             <returns>Collection of information indicating the success or failure of the update operation on each drop.</returns>
     *
     * @param UpdateDrops $parameters
     * @return UpdateDropsResponse
     */
    public function UpdateDrops(UpdateDrops $parameters)
    {
      return $this->__soapCall('UpdateDrops', array($parameters));
    }

    /**
     * <summary>Creates a Drop for a specified Order.</summary>
     *             <param name="drop">Drop object to create.</param>
     *             <returns>Drop object that was created.</returns>
     *
     * @param CreateDrop $parameters
     * @return CreateDropResponse
     */
    public function CreateDrop(CreateDrop $parameters)
    {
      return $this->__soapCall('CreateDrop', array($parameters));
    }

    /**
     * <summary>Creates a collection of Drop objects on specified orders.</summary>
     *             <param name="drop">Collection of Drop objects to create.</param>
     *             <returns>A collection of newly created Drop objects.  The DropID property in each of the returned objects will be populated with the system assigned ID.</returns>
     *
     * @param CreateDrops $parameters
     * @return CreateDropsResponse
     */
    public function CreateDrops(CreateDrops $parameters)
    {
      return $this->__soapCall('CreateDrops', array($parameters));
    }

    /**
     * <summary>he input of this method is the argument DeleteDrop having the structure defined by the following table.</summary>
     *             <param name="drop">Drop object to delete.</param>
     *
     * @param DeleteDrop $parameters
     * @return DeleteDropResponse
     */
    public function DeleteDrop(DeleteDrop $parameters)
    {
      return $this->__soapCall('DeleteDrop', array($parameters));
    }

    /**
     * <summary>The input of this method is the argument DeleteDrops having the structure defined by the following table.</summary>
     *             <param name="drops">Collection of Drop objects to delete.</param>
     *             <returns>Collection of information on the success or failure of the delete operation on each drop.</returns>
     *
     * @param DeleteDrops $parameters
     * @return DeleteDropsResponse
     */
    public function DeleteDrops(DeleteDrops $parameters)
    {
      return $this->__soapCall('DeleteDrops', array($parameters));
    }

    /**
     * <summary>
     *             Cancel Drops associated with the DropIds specified in cancelDropIds
     *             </summary>
     *             <param name="cancelDropIds">Collection of DropIds identifying Drops to cancel</param>
     *             <returns>A collection of DropCancelResult objects.  One for each DropId specified.</returns>
     *
     * @param CancelDrops $parameters
     * @return CancelDropsResponse
     */
    public function CancelDrops(CancelDrops $parameters)
    {
      return $this->__soapCall('CancelDrops', array($parameters));
    }

    /**
     * @param ReactivateCancelledDrops $parameters
     * @return ReactivateCancelledDropsResponse
     */
    public function ReactivateCancelledDrops(ReactivateCancelledDrops $parameters)
    {
      return $this->__soapCall('ReactivateCancelledDrops', array($parameters));
    }

    /**
     * <summary>
     *             Update Drop Billing Status entries
     *             </summary>
     *             <param name="dropBillingStatusList">Drop billing status entries to update</param>
     *             <returns>A collection of UpdateDropBillingStatusResult objects.  One for each DropBillingStatus entry specified.</returns>
     *
     * @param UpdateDropBillingStatus $parameters
     * @return UpdateDropBillingStatusResponse
     */
    public function UpdateDropBillingStatus(UpdateDropBillingStatus $parameters)
    {
      return $this->__soapCall('UpdateDropBillingStatus', array($parameters));
    }

    /**
     * @param CreateDropLevelCustomTask $parameters
     * @return CreateDropLevelCustomTaskResponse
     */
    public function CreateDropLevelCustomTask(CreateDropLevelCustomTask $parameters)
    {
      return $this->__soapCall('CreateDropLevelCustomTask', array($parameters));
    }

    /**
     * <summary>Creates an Agency object.</summary>
     *             <param name="agencyContact">Agency object to create.</param>
     *             <returns>Agency object that was created.</returns>
     *
     * @param CreateAgencyContact $parameters
     * @return CreateAgencyContactResponse
     */
    public function CreateAgencyContact(CreateAgencyContact $parameters)
    {
      return $this->__soapCall('CreateAgencyContact', array($parameters));
    }

    /**
     * @param DeleteAgencyContact $parameters
     * @return DeleteAgencyContactResponse
     */
    public function DeleteAgencyContact(DeleteAgencyContact $parameters)
    {
      return $this->__soapCall('DeleteAgencyContact', array($parameters));
    }

    /**
     * @param GetAgencyContact $parameters
     * @return GetAgencyContactResponse
     */
    public function GetAgencyContact(GetAgencyContact $parameters)
    {
      return $this->__soapCall('GetAgencyContact', array($parameters));
    }

    /**
     * <summary>Retrieves a list of AgencyContact objects for the specified AgencyID.</summary>
     *             <param name="agencyId">AgencyID for the Agency the desired AgencyContacts are associated with.</param>
     *             <param name="contactType">Indicates the type of the contact being requested.</param>
     *             <returns>Collection of AgencyContact objects associated with the requested AgencyID and conact type.</returns>
     *
     * @param GetAgencyContactList $parameters
     * @return GetAgencyContactListResponse
     */
    public function GetAgencyContactList(GetAgencyContactList $parameters)
    {
      return $this->__soapCall('GetAgencyContactList', array($parameters));
    }

    /**
     * @param UpdateAgencyContact $parameters
     * @return UpdateAgencyContactResponse
     */
    public function UpdateAgencyContact(UpdateAgencyContact $parameters)
    {
      return $this->__soapCall('UpdateAgencyContact', array($parameters));
    }

    /**
     * <summary>The input of this method is the argument CreateClientContact having the structure defined by the following table.</summary>
     *             <param name="clientContact">Client contact object to create.</param>
     *             <returns>ClientContact object that was created.</returns>
     *
     * @param CreateClientContact $parameters
     * @return CreateClientContactResponse
     */
    public function CreateClientContact(CreateClientContact $parameters)
    {
      return $this->__soapCall('CreateClientContact', array($parameters));
    }

    /**
     * @param DeleteClientContact $parameters
     * @return DeleteClientContactResponse
     */
    public function DeleteClientContact(DeleteClientContact $parameters)
    {
      return $this->__soapCall('DeleteClientContact', array($parameters));
    }

    /**
     * @param UpdateClientContact $parameters
     * @return UpdateClientContactResponse
     */
    public function UpdateClientContact(UpdateClientContact $parameters)
    {
      return $this->__soapCall('UpdateClientContact', array($parameters));
    }

    /**
     * @param GetClientContact $parameters
     * @return GetClientContactResponse
     */
    public function GetClientContact(GetClientContact $parameters)
    {
      return $this->__soapCall('GetClientContact', array($parameters));
    }

    /**
     * <summary>Retrieve a list of ClientContact objects.</summary>
     *             <param name="clientId">ClientID of the Client object associated with the desired contacts.</param>
     *             <param name="contactType">Indicates the type of contacts being requested.</param>
     *             <returns>Collection of ClientContact objects associated with the Client requested.</returns>
     *
     * @param GetClientContactList $parameters
     * @return GetClientContactListResponse
     */
    public function GetClientContactList(GetClientContactList $parameters)
    {
      return $this->__soapCall('GetClientContactList', array($parameters));
    }

    /**
     * @param CreateAccountContactAssociation $parameters
     * @return CreateAccountContactAssociationResponse
     */
    public function CreateAccountContactAssociation(CreateAccountContactAssociation $parameters)
    {
      return $this->__soapCall('CreateAccountContactAssociation', array($parameters));
    }

    /**
     * @param RemoveAccountContactAssociation $parameters
     * @return RemoveAccountContactAssociationResponse
     */
    public function RemoveAccountContactAssociation(RemoveAccountContactAssociation $parameters)
    {
      return $this->__soapCall('RemoveAccountContactAssociation', array($parameters));
    }

    /**
     * @param GetAccountManagerAssociationByContactID $parameters
     * @return GetAccountManagerAssociationByContactIDResponse
     */
    public function GetAccountManagerAssociationByContactID(GetAccountManagerAssociationByContactID $parameters)
    {
      return $this->__soapCall('GetAccountManagerAssociationByContactID', array($parameters));
    }

    /**
     * @param GetAccountManagerAssociationByClientID $parameters
     * @return GetAccountManagerAssociationByClientIDResponse
     */
    public function GetAccountManagerAssociationByClientID(GetAccountManagerAssociationByClientID $parameters)
    {
      return $this->__soapCall('GetAccountManagerAssociationByClientID', array($parameters));
    }

    /**
     * @param CreateAccountManagerAssociation $parameters
     * @return CreateAccountManagerAssociationResponse
     */
    public function CreateAccountManagerAssociation(CreateAccountManagerAssociation $parameters)
    {
      return $this->__soapCall('CreateAccountManagerAssociation', array($parameters));
    }

    /**
     * @param RemoveAccountManagerAssociation $parameters
     * @return RemoveAccountManagerAssociationResponse
     */
    public function RemoveAccountManagerAssociation(RemoveAccountManagerAssociation $parameters)
    {
      return $this->__soapCall('RemoveAccountManagerAssociation', array($parameters));
    }

    /**
     * @param GetAccountManagerRepTypeAssociationByClientID $parameters
     * @return GetAccountManagerRepTypeAssociationByClientIDResponse
     */
    public function GetAccountManagerRepTypeAssociationByClientID(GetAccountManagerRepTypeAssociationByClientID $parameters)
    {
      return $this->__soapCall('GetAccountManagerRepTypeAssociationByClientID', array($parameters));
    }

    /**
     * @param GetAccountManagerRepTypeAssociationByRepTypeID $parameters
     * @return GetAccountManagerRepTypeAssociationByRepTypeIDResponse
     */
    public function GetAccountManagerRepTypeAssociationByRepTypeID(GetAccountManagerRepTypeAssociationByRepTypeID $parameters)
    {
      return $this->__soapCall('GetAccountManagerRepTypeAssociationByRepTypeID', array($parameters));
    }

    /**
     * @param CreateAccountManagerRepTypeAssociation $parameters
     * @return CreateAccountManagerRepTypeAssociationResponse
     */
    public function CreateAccountManagerRepTypeAssociation(CreateAccountManagerRepTypeAssociation $parameters)
    {
      return $this->__soapCall('CreateAccountManagerRepTypeAssociation', array($parameters));
    }

    /**
     * @param RemoveAccountManagerRepTypeAssociation $parameters
     * @return RemoveAccountManagerRepTypeAssociationResponse
     */
    public function RemoveAccountManagerRepTypeAssociation(RemoveAccountManagerRepTypeAssociation $parameters)
    {
      return $this->__soapCall('RemoveAccountManagerRepTypeAssociation', array($parameters));
    }

    /**
     * <summary>Retrieve availability information.</summary>
     *             <param name="availParam">Parameters for the availability request.</param>
     *             <returns>Availability properties for all different types of availability based on the parameters in the request.</returns>
     *
     * @param GetAvailability $parameters
     * @return GetAvailabilityResponse
     */
    public function GetAvailability(GetAvailability $parameters)
    {
      return $this->__soapCall('GetAvailability', array($parameters));
    }

    /**
     * <summary>Retrieve availability information for a collection of parameters.</summary>
     *             <param name="availParamList">Collection of availability parameters.</param>
     *             <returns>Collection of Availability objects containing availability information based on the parameters requested.</returns>
     *
     * @param GetAvailabilityList $parameters
     * @return GetAvailabilityListResponse
     */
    public function GetAvailabilityList(GetAvailabilityList $parameters)
    {
      return $this->__soapCall('GetAvailabilityList', array($parameters));
    }

    /**
     * <summary>Retrieve newsletter availability information for a collection of parameters.</summary>
     *             <param name="availParamList">Collection of availability parameters.</param>
     *             <returns>Collection of NewsletterAvailability objects containing availability information for the parameters specified in the request.</returns>
     *
     * @param GetNewsletterAvailabilityList $parameters
     * @return GetNewsletterAvailabilityListResponse
     */
    public function GetNewsletterAvailabilityList(GetNewsletterAvailabilityList $parameters)
    {
      return $this->__soapCall('GetNewsletterAvailabilityList', array($parameters));
    }

    /**
     * @param GetAvailabilityListFromReport $parameters
     * @return GetAvailabilityListFromReportResponse
     */
    public function GetAvailabilityListFromReport(GetAvailabilityListFromReport $parameters)
    {
      return $this->__soapCall('GetAvailabilityListFromReport', array($parameters));
    }

    /**
     * <summary>Persist third party delivery information in AdBook.</summary>
     *             <param name="quantities">Collection of ThirdPartyDeliveryQuantity objects containing third party delivery information to import.</param>
     *             <returns>Collection of information indicating the status of the third party data import operation.</returns>
     *
     * @param ImportThirdPartyDelivery $parameters
     * @return ImportThirdPartyDeliveryResponse
     */
    public function ImportThirdPartyDelivery(ImportThirdPartyDelivery $parameters)
    {
      return $this->__soapCall('ImportThirdPartyDelivery', array($parameters));
    }

    /**
     * @param ImportContentTargetingDelivery $parameters
     * @return ImportContentTargetingDeliveryResponse
     */
    public function ImportContentTargetingDelivery(ImportContentTargetingDelivery $parameters)
    {
      return $this->__soapCall('ImportContentTargetingDelivery', array($parameters));
    }

    /**
     * @param ImportFirstPartyDelivery $parameters
     * @return ImportFirstPartyDeliveryResponse
     */
    public function ImportFirstPartyDelivery(ImportFirstPartyDelivery $parameters)
    {
      return $this->__soapCall('ImportFirstPartyDelivery', array($parameters));
    }

    /**
     * @param GetAdServerDropMappingForDateRange $parameters
     * @return GetAdServerDropMappingForDateRangeResponse
     */
    public function GetAdServerDropMappingForDateRange(GetAdServerDropMappingForDateRange $parameters)
    {
      return $this->__soapCall('GetAdServerDropMappingForDateRange', array($parameters));
    }

    /**
     * <summary>Retrieve the list of configured RateCardNames.</summary>
     *             <returns>Collection of RateCardName objects configured in AdBook.</returns>
     *
     * @param GetRateCardNameList $parameters
     * @return GetRateCardNameListResponse
     */
    public function GetRateCardNameList(GetRateCardNameList $parameters)
    {
      return $this->__soapCall('GetRateCardNameList', array($parameters));
    }

    /**
     * <summary>Retrieves a list of AdUnit objects.</summary>
     *             <returns>Collection of AdUnit objects configured in AdBook.</returns>
     *
     * @param GetAdUnitList $parameters
     * @return GetAdUnitListResponse
     */
    public function GetAdUnitList(GetAdUnitList $parameters)
    {
      return $this->__soapCall('GetAdUnitList', array($parameters));
    }

    /**
     * <summary>Retreive a list of RepTypes.</summary>
     *             <returns>Collection of RepType objects configured in AdBook.</returns>
     *
     * @param GetRepTypeList $parameters
     * @return GetRepTypeListResponse
     */
    public function GetRepTypeList(GetRepTypeList $parameters)
    {
      return $this->__soapCall('GetRepTypeList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of currencies configured.</summary>
     *             <returns>Collection of Currency objects configured in AdBook.</returns>
     *
     * @param GetCurrencyList $parameters
     * @return GetCurrencyListResponse
     */
    public function GetCurrencyList(GetCurrencyList $parameters)
    {
      return $this->__soapCall('GetCurrencyList', array($parameters));
    }

    /**
     * @param GetMediaElement $parameters
     * @return GetMediaElementResponse
     */
    public function GetMediaElement(GetMediaElement $parameters)
    {
      return $this->__soapCall('GetMediaElement', array($parameters));
    }

    /**
     * @param GetMediaElementProductList $parameters
     * @return GetMediaElementProductListResponse
     */
    public function GetMediaElementProductList(GetMediaElementProductList $parameters)
    {
      return $this->__soapCall('GetMediaElementProductList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of all MediaElement objects.</summary>
     *             <returns>Collection of MediaElement objects configured in AdBook.</returns>
     *
     * @param GetMediaElementList $parameters
     * @return GetMediaElementListResponse
     */
    public function GetMediaElementList(GetMediaElementList $parameters)
    {
      return $this->__soapCall('GetMediaElementList', array($parameters));
    }

    /**
     * @param GetMediaElementListByDynamicPropertyValue $parameters
     * @return GetMediaElementListByDynamicPropertyValueResponse
     */
    public function GetMediaElementListByDynamicPropertyValue(GetMediaElementListByDynamicPropertyValue $parameters)
    {
      return $this->__soapCall('GetMediaElementListByDynamicPropertyValue', array($parameters));
    }

    /**
     * <summary>Retrieve the list of MediaElement objects directly below the specified parent in the media hierarchy.</summary>
     *             <param name="mediaElementParentId">MediaElementID for the parent element in the media hierarchy.</param>
     *             <param name="mediaTypeFilter">Media type to use for filtering the results.</param>
     *             <returns>Collection of MediaElement objects immediately below the specified parent in the media hierarchy.</returns>
     *
     * @param GetMediaElementListForParent $parameters
     * @return GetMediaElementListForParentResponse
     */
    public function GetMediaElementListForParent(GetMediaElementListForParent $parameters)
    {
      return $this->__soapCall('GetMediaElementListForParent', array($parameters));
    }

    /**
     * <summary>Retrieve the list of configured OrderStatus objects.</summary>
     *             <returns>Collection of OrderStatus objects configured in AdBook.</returns>
     *
     * @param GetOrderStatusList $parameters
     * @return GetOrderStatusListResponse
     */
    public function GetOrderStatusList(GetOrderStatusList $parameters)
    {
      return $this->__soapCall('GetOrderStatusList', array($parameters));
    }

    /**
     * <summary>Retrieve the position pricing information for a specified rate card name.</summary>
     *
     * @param GetPositionPricingForRateCard $parameters
     * @return GetPositionPricingForRateCardResponse
     */
    public function GetPositionPricingForRateCard(GetPositionPricingForRateCard $parameters)
    {
      return $this->__soapCall('GetPositionPricingForRateCard', array($parameters));
    }

    /**
     * @param GetPositionPricingForRateCardByPosition $parameters
     * @return GetPositionPricingForRateCardByPositionResponse
     */
    public function GetPositionPricingForRateCardByPosition(GetPositionPricingForRateCardByPosition $parameters)
    {
      return $this->__soapCall('GetPositionPricingForRateCardByPosition', array($parameters));
    }

    /**
     * @param GetPositionPricingList $parameters
     * @return GetPositionPricingListResponse
     */
    public function GetPositionPricingList(GetPositionPricingList $parameters)
    {
      return $this->__soapCall('GetPositionPricingList', array($parameters));
    }

    /**
     * <summary>Retrieve the list of configured PriceTypes.</summary>
     *             <returns>
     *               <br />
     *             GetPriceTypeListResult ArrayOfPriceType Collection of PriceType objects configured in AdBook.</returns>
     *
     * @param GetPriceTypeList $parameters
     * @return GetPriceTypeListResponse
     */
    public function GetPriceTypeList(GetPriceTypeList $parameters)
    {
      return $this->__soapCall('GetPriceTypeList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of Reps configured as a sales rep, print rep or operations contact in AdBook.</summary>
     *             <returns>Collection of Rep objects configured in AdBook.</returns>
     *
     * @param GetRepList $parameters
     * @return GetRepListResponse
     */
    public function GetRepList(GetRepList $parameters)
    {
      return $this->__soapCall('GetRepList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of Reps based on a specified RepTypeID.</summary>
     *             <param name="repTypeId">RepTypeID assigned to the desired Rep objects.</param>
     *             <returns>Collection of Rep objects that are members of the group identified by the requested RepTypeID.</returns>
     *
     * @param GetRepListForType $parameters
     * @return GetRepListForTypeResponse
     */
    public function GetRepListForType(GetRepListForType $parameters)
    {
      return $this->__soapCall('GetRepListForType', array($parameters));
    }

    /**
     * <summary>Retrieve a list of configured ad servers.</summary>
     *             <returns>Collection of ServedBy objects configured in AdBook.</returns>
     *
     * @param GetServedByList $parameters
     * @return GetServedByListResponse
     */
    public function GetServedByList(GetServedByList $parameters)
    {
      return $this->__soapCall('GetServedByList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of configured TargetingElements.</summary>
     *             <returns>Collection of TargetingElement objects configured in AdBook.</returns>
     *
     * @param GetTargetingElementList $parameters
     * @return GetTargetingElementListResponse
     */
    public function GetTargetingElementList(GetTargetingElementList $parameters)
    {
      return $this->__soapCall('GetTargetingElementList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of configured TargetingGroups.</summary>
     *             <returns>Collection of TargetingGroup objects configured in AdBook.</returns>
     *
     * @param GetTargetingGroupList $parameters
     * @return GetTargetingGroupListResponse
     */
    public function GetTargetingGroupList(GetTargetingGroupList $parameters)
    {
      return $this->__soapCall('GetTargetingGroupList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of configured TargetingGroups.</summary>
     *             <returns>Collection of TargetingPackage objects configured in AdBook.</returns>
     *
     * @param GetTargetingPackageList $parameters
     * @return GetTargetingPackageListResponse
     */
    public function GetTargetingPackageList(GetTargetingPackageList $parameters)
    {
      return $this->__soapCall('GetTargetingPackageList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of configured ThirdPartyAdServer options.</summary>
     *             <returns>Collection of ThirdPartyAdServer objects configured in AdBook.</returns>
     *
     * @param GetThirdPartyAdServerList $parameters
     * @return GetThirdPartyAdServerListResponse
     */
    public function GetThirdPartyAdServerList(GetThirdPartyAdServerList $parameters)
    {
      return $this->__soapCall('GetThirdPartyAdServerList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of configured ThirdPartyAdServer metric information.</summary>
     *
     * @param GetThirdPartyMetricList $parameters
     * @return GetThirdPartyMetricListResponse
     */
    public function GetThirdPartyMetricList(GetThirdPartyMetricList $parameters)
    {
      return $this->__soapCall('GetThirdPartyMetricList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of OrderConfiguration objects</summary>
     *
     * @param GetOrderConfigurationList $parameters
     * @return GetOrderConfigurationListResponse
     */
    public function GetOrderConfigurationList(GetOrderConfigurationList $parameters)
    {
      return $this->__soapCall('GetOrderConfigurationList', array($parameters));
    }

    /**
     * <summary>Retrieve a list of valid values for the specified property.</summary>
     *             <param name="dynamicPropertyID">AdBook system ID of the property to retrieve the list of valid values.</param>
     *             <returns>Collection of valid values for the specified property ID.</returns>
     *
     * @param GetDynamicPropertiesListValuesByPropertyID $parameters
     * @return GetDynamicPropertiesListValuesByPropertyIDResponse
     */
    public function GetDynamicPropertiesListValuesByPropertyID(GetDynamicPropertiesListValuesByPropertyID $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListValuesByPropertyID', array($parameters));
    }

    /**
     * <summary>Retrieve a list of dynamic properties available for a drop.</summary>
     *             <returns>Collection of DynamicProperty objects for all custom fields configured at the drop level for your organization.</returns>
     *
     * @param GetDynamicPropertiesListForDrop $parameters
     * @return GetDynamicPropertiesListForDropResponse
     */
    public function GetDynamicPropertiesListForDrop(GetDynamicPropertiesListForDrop $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForDrop', array($parameters));
    }

    /**
     * <summary>Retrieve a list of dynamic properties available for an order.</summary>
     *             <returns>Collection of DynamicProperty objects for all custom fields configured at the order level for your organization.</returns>
     *
     * @param GetDynamicPropertiesListForOrder $parameters
     * @return GetDynamicPropertiesListForOrderResponse
     */
    public function GetDynamicPropertiesListForOrder(GetDynamicPropertiesListForOrder $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForOrder', array($parameters));
    }

    /**
     * @param GetDynamicPropertiesListForAccount $parameters
     * @return GetDynamicPropertiesListForAccountResponse
     */
    public function GetDynamicPropertiesListForAccount(GetDynamicPropertiesListForAccount $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForAccount', array($parameters));
    }

    /**
     * @param GetDynamicPropertiesListValuesForAccount $parameters
     * @return GetDynamicPropertiesListValuesForAccountResponse
     */
    public function GetDynamicPropertiesListValuesForAccount(GetDynamicPropertiesListValuesForAccount $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListValuesForAccount', array($parameters));
    }

    /**
     * @param GetAdServerList $parameters
     * @return GetAdServerListResponse
     */
    public function GetAdServerList(GetAdServerList $parameters)
    {
      return $this->__soapCall('GetAdServerList', array($parameters));
    }

    /**
     * @param GetMediaElementPropertiesListValuesByPropertyID $parameters
     * @return GetMediaElementPropertiesListValuesByPropertyIDResponse
     */
    public function GetMediaElementPropertiesListValuesByPropertyID(GetMediaElementPropertiesListValuesByPropertyID $parameters)
    {
      return $this->__soapCall('GetMediaElementPropertiesListValuesByPropertyID', array($parameters));
    }

    /**
     * @param GetMediaElementPropertiesList $parameters
     * @return GetMediaElementPropertiesListResponse
     */
    public function GetMediaElementPropertiesList(GetMediaElementPropertiesList $parameters)
    {
      return $this->__soapCall('GetMediaElementPropertiesList', array($parameters));
    }

    /**
     * @param GetDynamicPropertiesListForCreativeAssignment $parameters
     * @return GetDynamicPropertiesListForCreativeAssignmentResponse
     */
    public function GetDynamicPropertiesListForCreativeAssignment(GetDynamicPropertiesListForCreativeAssignment $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForCreativeAssignment', array($parameters));
    }

    /**
     * @param GetDynamicPropertiesListForDropBillingAdjustment $parameters
     * @return GetDynamicPropertiesListForDropBillingAdjustmentResponse
     */
    public function GetDynamicPropertiesListForDropBillingAdjustment(GetDynamicPropertiesListForDropBillingAdjustment $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForDropBillingAdjustment', array($parameters));
    }

    /**
     * @param GetCreativeDynamicPropertiesListValuesByPropertyID $parameters
     * @return GetCreativeDynamicPropertiesListValuesByPropertyIDResponse
     */
    public function GetCreativeDynamicPropertiesListValuesByPropertyID(GetCreativeDynamicPropertiesListValuesByPropertyID $parameters)
    {
      return $this->__soapCall('GetCreativeDynamicPropertiesListValuesByPropertyID', array($parameters));
    }

    /**
     * @param GetPublisherContactListForCustomTasks $parameters
     * @return GetPublisherContactListForCustomTasksResponse
     */
    public function GetPublisherContactListForCustomTasks(GetPublisherContactListForCustomTasks $parameters)
    {
      return $this->__soapCall('GetPublisherContactListForCustomTasks', array($parameters));
    }

    /**
     * @param GetDynamicPropertiesListForOrderAttachments $parameters
     * @return GetDynamicPropertiesListForOrderAttachmentsResponse
     */
    public function GetDynamicPropertiesListForOrderAttachments(GetDynamicPropertiesListForOrderAttachments $parameters)
    {
      return $this->__soapCall('GetDynamicPropertiesListForOrderAttachments', array($parameters));
    }

    /**
     * @param GetPackageDefinition $parameters
     * @return GetPackageDefinitionResponse
     */
    public function GetPackageDefinition(GetPackageDefinition $parameters)
    {
      return $this->__soapCall('GetPackageDefinition', array($parameters));
    }

    /**
     * @param GetPackageComponentDrops $parameters
     * @return GetPackageComponentDropsResponse
     */
    public function GetPackageComponentDrops(GetPackageComponentDrops $parameters)
    {
      return $this->__soapCall('GetPackageComponentDrops', array($parameters));
    }

    /**
     * @param CreatePackageComponentDrops $parameters
     * @return CreatePackageComponentDropsResponse
     */
    public function CreatePackageComponentDrops(CreatePackageComponentDrops $parameters)
    {
      return $this->__soapCall('CreatePackageComponentDrops', array($parameters));
    }

    /**
     * @param UpdatePackageComponentDrops $parameters
     * @return UpdatePackageComponentDropsResponse
     */
    public function UpdatePackageComponentDrops(UpdatePackageComponentDrops $parameters)
    {
      return $this->__soapCall('UpdatePackageComponentDrops', array($parameters));
    }

    /**
     * @param DeletePackageComponentDrops $parameters
     * @return DeletePackageComponentDropsResponse
     */
    public function DeletePackageComponentDrops(DeletePackageComponentDrops $parameters)
    {
      return $this->__soapCall('DeletePackageComponentDrops', array($parameters));
    }

    /**
     * @param BuildKeyValueCriteriaSetGraph $parameters
     * @return BuildKeyValueCriteriaSetGraphResponse
     */
    public function BuildKeyValueCriteriaSetGraph(BuildKeyValueCriteriaSetGraph $parameters)
    {
      return $this->__soapCall('BuildKeyValueCriteriaSetGraph', array($parameters));
    }

    /**
     * @param BuildKeyValueExpression $parameters
     * @return BuildKeyValueExpressionResponse
     */
    public function BuildKeyValueExpression(BuildKeyValueExpression $parameters)
    {
      return $this->__soapCall('BuildKeyValueExpression', array($parameters));
    }

    /**
     * @param GetAdServerEntityValues $parameters
     * @return GetAdServerEntityValuesResponse
     */
    public function GetAdServerEntityValues(GetAdServerEntityValues $parameters)
    {
      return $this->__soapCall('GetAdServerEntityValues', array($parameters));
    }

    /**
     * @param GetExternalDataMapList $parameters
     * @return GetExternalDataMapListResponse
     */
    public function GetExternalDataMapList(GetExternalDataMapList $parameters)
    {
      return $this->__soapCall('GetExternalDataMapList', array($parameters));
    }

    /**
     * @param GetExternalDataMapListForType $parameters
     * @return GetExternalDataMapListForTypeResponse
     */
    public function GetExternalDataMapListForType(GetExternalDataMapListForType $parameters)
    {
      return $this->__soapCall('GetExternalDataMapListForType', array($parameters));
    }

    /**
     * @param CreateExternalDataMap $parameters
     * @return CreateExternalDataMapResponse
     */
    public function CreateExternalDataMap(CreateExternalDataMap $parameters)
    {
      return $this->__soapCall('CreateExternalDataMap', array($parameters));
    }

    /**
     * @param DeleteExternalDataMap $parameters
     * @return DeleteExternalDataMapResponse
     */
    public function DeleteExternalDataMap(DeleteExternalDataMap $parameters)
    {
      return $this->__soapCall('DeleteExternalDataMap', array($parameters));
    }

    /**
     * @param GetSavedReportList $parameters
     * @return GetSavedReportListResponse
     */
    public function GetSavedReportList(GetSavedReportList $parameters)
    {
      return $this->__soapCall('GetSavedReportList', array($parameters));
    }

    /**
     * @param GetSavedReportQuery $parameters
     * @return GetSavedReportQueryResponse
     */
    public function GetSavedReportQuery(GetSavedReportQuery $parameters)
    {
      return $this->__soapCall('GetSavedReportQuery', array($parameters));
    }

    /**
     * @param RunReportJob $parameters
     * @return RunReportJobResponse
     */
    public function RunReportJob(RunReportJob $parameters)
    {
      return $this->__soapCall('RunReportJob', array($parameters));
    }

    /**
     * @param GetReportJob $parameters
     * @return GetReportJobResponse
     */
    public function GetReportJob(GetReportJob $parameters)
    {
      return $this->__soapCall('GetReportJob', array($parameters));
    }

    /**
     * @param GetReportDownloadURL $parameters
     * @return GetReportDownloadURLResponse
     */
    public function GetReportDownloadURL(GetReportDownloadURL $parameters)
    {
      return $this->__soapCall('GetReportDownloadURL', array($parameters));
    }

    /**
     * @param GetQueryFilterValueList $parameters
     * @return GetQueryFilterValueListResponse
     */
    public function GetQueryFilterValueList(GetQueryFilterValueList $parameters)
    {
      return $this->__soapCall('GetQueryFilterValueList', array($parameters));
    }

    /**
     * @param GetQueryParameterList $parameters
     * @return GetQueryParameterListResponse
     */
    public function GetQueryParameterList(GetQueryParameterList $parameters)
    {
      return $this->__soapCall('GetQueryParameterList', array($parameters));
    }

    /**
     * @param GetFieldOutputColumnList $parameters
     * @return GetFieldOutputColumnListResponse
     */
    public function GetFieldOutputColumnList(GetFieldOutputColumnList $parameters)
    {
      return $this->__soapCall('GetFieldOutputColumnList', array($parameters));
    }

    /**
     * @param GetDeliveryDetailOutputColumnList $parameters
     * @return GetDeliveryDetailOutputColumnListResponse
     */
    public function GetDeliveryDetailOutputColumnList(GetDeliveryDetailOutputColumnList $parameters)
    {
      return $this->__soapCall('GetDeliveryDetailOutputColumnList', array($parameters));
    }

    /**
     * @param GetMetricOutputColumnList $parameters
     * @return GetMetricOutputColumnListResponse
     */
    public function GetMetricOutputColumnList(GetMetricOutputColumnList $parameters)
    {
      return $this->__soapCall('GetMetricOutputColumnList', array($parameters));
    }

}
