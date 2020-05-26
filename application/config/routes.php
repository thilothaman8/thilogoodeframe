<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';

//General Setting
$route['upload_app'] = 'GeneralSetting/upload_app';
$route['company_details'] = 'GeneralSetting/company_details';
$route['social_details'] = 'GeneralSetting/social_details';
$route['smtp_configuration'] = 'GeneralSetting/smtp_configuration';
$route['payment_setting'] = 'GeneralSetting/payment_setting';
$route['show_testimonial'] = 'GeneralSetting/show_testimonial';
$route['add_feedback'] = 'GeneralSetting/add_feedback';
$route['show_about_us'] = 'GeneralSetting/show_about_us';

//Operation Filter
$route['ofd_issue'] = 'OperationFilter/ofd_issue';
$route['order_not_picked'] = 'OperationFilter/order_not_picked';
$route['shipments_hold'] = 'OperationFilter/shipments_hold';
$route['csa_schedule_issue'] = 'OperationFilter/csa_schedule_issue';
$route['csa_location_issue'] = 'OperationFilter/csa_location_issue';
$route['driver_update'] = 'OperationFilter/driver_update';
$route['future_update'] = 'OperationFilter/future_update';
$route['not_dispatch'] = 'OperationFilter/not_dispatch';

//Shipment Management
$route['all_shipment'] = 'ShipmentManagement/all_shipment';
$route['archive_shipment'] = 'ShipmentManagement/archive_shipment';
$route['add_new_shipment'] = 'ShipmentManagement/add_new_shipment';
$route['return_orders'] = 'ShipmentManagement/return_orders';
$route['delivered_shipment'] = 'ShipmentManagement/delivered_shipment';
$route['deleted_shipment'] = 'ShipmentManagement/deleted_shipment';
$route['scanned_not_listed'] = 'ShipmentManagement/scanned_not_listed';
$route['schedule_shipment1'] = 'ShipmentManagement/schedule_shipment1';
$route['import_new_shipment'] = 'ShipmentManagement/import_new_shipment';
$route['import_return_shipment'] = 'ShipmentManagement/import_return_shipment';
$route['bulk_update'] = 'ShipmentManagement/bulk_update';
$route['assigning_shipments'] = 'ShipmentManagement/assigning_shipments';
$route['bulk_print'] = 'ShipmentManagement/bulk_print';
$route['ready_delivery'] = 'ShipmentManagement/ready_delivery';
$route['tracking_parcel'] = 'ShipmentManagement/tracking_parcel';
$route['detail'] = 'ShipmentManagement/detail';

//Bulk Invoice Management
$route['add_bulk_scan'] = 'BulkInvoiceManagement/add_bulk_scan';
$route['cod_invoices'] = 'BulkInvoiceManagement/cod_invoices';
$route['payable_invoices'] = 'BulkInvoiceManagement/payable_invoices';
$route['payable_invoice_cod'] = 'BulkInvoiceManagement/payable_invoice_cod';

//audit
$route['operation_audit'] = 'Audit/operation_audit';
$route['cs_audit'] = 'Audit/cs_audit';
$route['view_audit'] = 'Audit/view_audit';
$route['add_reason'] = 'Audit/add_reason';
$route['view_reason'] = 'Audit/view_reason';
$route['call_record'] = 'Audit/call_record';
$route['personal_call_record'] = 'Audit/personal_call_record';

//Pickup Management
$route['generate_pickup'] = 'PickupManagement/generate_pickup';
$route['scan_new_pickup'] = 'PickupManagement/scan_new_pickup';
$route['bulk_pickup_update'] = 'PickupManagement/bulk_pickup_update';
$route['pickup_list'] = 'PickupManagement/pickup_list';

//Inventory Management
$route['create_location'] = 'InventoryManagement/create_location';
$route['manage_location'] = 'InventoryManagement/manage_location';
$route['print_barcode'] = 'InventoryManagement/print_barcode';
$route['add_shelve'] = 'InventoryManagement/add_shelve';
$route['show_shelve'] = 'InventoryManagement/show_shelve';
$route['inventory'] = 'InventoryManagement/inventory';

//Manifest Management
$route['add_manifest'] = 'ManifestManagement/add_manifest';
$route['show_manifest'] = 'ManifestManagement/show_manifest';
$route['return_manifest'] = 'ManifestManagement/return_manifest';
$route['bulk_manifest'] = 'ManifestManagement/bulk_manifest';
$route['date_update1'] = 'ManifestManagement/date_update1';
$route['line_haul'] = 'ManifestManagement/line_haul';

//Delivery Run Sheet
$route['add_drs'] = 'DeliveryRunSheet/add_drs';
$route['new_drs'] = 'DeliveryRunSheet/new_drs';
$route['show_drs'] = 'DeliveryRunSheet/show_drs';

//Warehouse Management
$route['scan_shipment'] = 'WarehouseManagement/scan_shipment';
$route['hold_shipment'] = 'WarehouseManagement/hold_shipment';
$route['schedule_shipment'] = 'WarehouseManagement/schedule_shipment';
$route['bound_shipment'] = 'WarehouseManagement/bound_shipment';
$route['inventory_report'] = 'WarehouseManagement/inventory_report';
$route['security_check'] = 'WarehouseManagement/security_check';

//Routs Management
$route['add_route'] = 'RoutsManagement/add_route';
$route['show_route'] = 'RoutsManagement/show_route';

//User Management
$route['show_user'] = 'UserManagement/show_user';
$route['edit_agent'] = 'UserManagement/edit_agent';

//Staff Management
$route['add_staff'] = 'StaffManagement/add_staff';
$route['show_staff'] = 'StaffManagement/show_staff';

//Customer Management
$route['add_customer'] = 'CustomerManagement/add_customer';
$route['show_customer'] = 'CustomerManagement/show_customer';
$route['import_rates'] = 'CustomerManagement/import_rates';
$route['account_verification'] = 'CustomerManagement/account_verification';
$route['edit_customer'] = 'CustomerManagement/edit_customer';
$route['payment_information'] = 'CustomerManagement/payment_information';
$route['customer_booking_detail'] = 'CustomerManagement/customer_booking_detail';
$route['add_zone'] = 'CustomerManagement/add_zone';
$route['weight_range'] = 'CustomerManagement/weight_range';

//Couriers Management
$route['add_couriers'] = 'CouriersManagement/add_couriers';
$route['show_couriers'] = 'CouriersManagement/show_couriers';
$route['odometer_details'] = 'CouriersManagement/odometer_details';

//Branch Management
$route['add_branch'] = 'BranchManagement/add_branch';
$route['show_branch'] = 'BranchManagement/show_branch';

//Reports
$route['supplier_report'] = 'Reports/supplier_report';
$route['shipment_report'] = 'Reports/shipment_report';
$route['transaction_report'] = 'Reports/transaction_report';
$route['payment_report'] = 'Reports/payment_report';
$route['client_report'] = 'Reports/client_report';
$route['hold_report'] = 'Reports/hold_report';

//RTO Management
$route['rto_list'] = 'RtoManagement/rto_list';
$route['pending_list'] = 'RtoManagement/pending_list';

//COD Management
$route['confirm_shipment'] = 'CodManagement/confirm_shipment';
$route['pending_shipment'] = 'CodManagement/pending_shipment';

//Coupon Management
$route['new_coupon'] = 'CouponManagement/new_coupon';
$route['valid_coupon'] = 'CouponManagement/valid_coupon';
$route['expire_coupon'] = 'CouponManagement/expire_coupon';

//OFD Reports
$route['ofd_report'] = 'OfdReport/ofd_report';

//Payment Details
$route['payment_details'] = 'PaymentDetails/payment_details';

// Invoice Management
$route['invoice_management'] = 'InvoiceManagement/invoice_management';
$route['cod_report'] = 'InvoiceManagement/cod_report';
// product Type
$route['add_product_type'] = 'ProductType/add_product_type';
$route['show_product_type'] = 'ProductType/show_product_type';
$route['edit_product_type'] = 'ProductType/edit_product_type';
//Content Services
$route['content_services'] = 'ContentServices/content_services';
// CMS Pages
$route['cms_pages'] = 'CmsPages/cms_pages';
// Tickets
$route['tickets'] = 'Tickets/tickets';
// New Feedback
$route['newfeedback'] = 'NewFeedback/newfeedback';
// Show Rating
$route['showrating'] = 'ShowRating/showrating';

//News
$route['add_news'] = 'News/add_news';
$route['show_news'] = 'News/show_news';

//Notification

$route['add_notification'] = 'Notification/add_notification';
$route['show_notification'] = 'Notification/show_notification';

//Pickup Location
$route['show_location'] = 'PickupLocation/show_location';

//Email Setting
$route['email_setting'] = 'EmailTemplates/email_setting';

//SEO
$route['seo'] = 'Seo/seo';
$route['edit_seo'] = 'Seo/edit_seo';
//Featured Partners
$route['featured_partners'] = 'FeaturedPartners/featured_partners';

//Product Category List
$route['category_list'] = 'ProductCategoryList/category_list';

//Set User Privilege
$route['user_privilege'] = 'SetUserPrivilege/user_privilege';

//Home Banner Management
$route['add_banner'] = 'BannerManagement/add_banner';
$route['show_banner'] = 'BannerManagement/show_banner';

//Outsource Management
$route['show_supplier'] = 'OutsourceManagement/show_supplier';
$route['generate_voice'] = 'OutsourceManagement/generate_voice';
$route['add_supplier'] = 'OutsourceManagement/add_supplier';

//AMS
$route['show_address'] = 'Ams/show_address';
$route['shipment_address'] = 'Ams/shipment_address';
$route['new_address'] = 'Ams/new_address';

//Schedule Management
$route['cs_schedule'] = 'ScheduleManagement/cs_schedule';
$route['blind_schedule'] = 'ScheduleManagement/blind_schedule';
$route['bulk_reschedule'] = 'ScheduleManagement/bulk_reschedule';
$route['schedule_remove'] = 'ScheduleManagement/schedule_remove';
$route['date_update'] = 'ScheduleManagement/date_update';
$route['pending_schedule'] = 'ScheduleManagement/pending_schedule';

//FAQ
$route['add_faq'] = 'Faq/add_faq';
$route['show_faq'] = 'Faq/show_faq';

//Profile
$route['my_profile'] = 'MyProfile/my_profile';
