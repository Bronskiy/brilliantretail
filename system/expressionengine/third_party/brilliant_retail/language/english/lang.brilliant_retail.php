<?php
/************************************************************/
/*	BrilliantRetail 										*/
/*															*/
/*	@package	BrilliantRetail								*/
/*	@Author		David Dexter 								*/
/* 	@copyright	Copyright (c) 2011, Brilliant2.com 			*/
/* 	@license	http://brilliantretail.com/license.html		*/
/* 	@link		http://brilliantretail.com 					*/
/*															*/
/************************************************************/
/* NOTICE													*/
/*															*/
/* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF 	*/
/* ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED	*/
/* TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 		*/
/* PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT 		*/
/* SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY */
/* CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION	*/
/* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR 	*/
/* IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 		*/
/* DEALINGS IN THE SOFTWARE. 								*/	
/************************************************************/

$lang = array(
//----------------------------------------
// Required for MODULES page
//----------------------------------------

"brilliant_retail_module_name" => "BrilliantRetail",
"brilliant_retail_module_description" => "	Powerful E-commerce system built specifically for ExpressionEngine. 
											For more information and documentation please visit <a href=\"http://www.brilliantretail.com\">BrilliantRetail.com</a>.", 

//----------------------------------------
// General Titles 
	'br_visit_website' 	=> 'Visit Website',
	'br_buy_license'		=> 'Buy License',
	'br_invalid_license' 	=> 'Invalid License',
	'br_days_remain'		=> 'Days Remain',
	'br_menu' 	=> 'Menu', 
	'br_yes' 	=> 'Yes',
	'br_no' 	=> 'No',
	'br_image' => 'Image',
	'br_title' => 'Title',
	'br_url_title' => 'URL Title', 
	'br_large' => 'Large',
	'br_small' => 'Small',
	'br_thumbnail' => 'Thumbnail',
	'br_exclude' 	=> 'Exclude',
	'br_sort' 	=> 'Sort',
	'br_add' 	=> 'Add', 
	'br_hide' 	=> 'Hide',
	'br_show' 	=> 'Show', 
	'br_cancel' => 'Cancel',
	'br_invalid_expired_license' => 'invalid license',
	
// Main Menu Buttons
	'br_dashboard' => 'Dashboard', 
	'br_order' => 'Orders', 
	'br_customer' => 'Customers', 
	'br_customer_customer' => 'Customers',
	'br_customer_group' => 'Group',
	'br_product' 	=> 'Products',
	'br_products' 	=> 'Products',
	'br_promotion' => 'Promotions',
	'br_promo' 	=> 'Promotions',
	'br_subscription' => 'Subscriptions',
	'br_report' => 'Reports', 
	'br_config' => 'Settings',  
	'br_config_checkout' => 'Checkout',
	'br_config_email' => 'Notifications',
	'br_new_tax' 		=> 'Add Tax',
	'br_config_tax' 	=> 'Tax',
	'br_config_permission' => 'Permissions',
	'br_config_catalog' => 'Catalog',
	'br_config_import' => 'Import',
	'br_config_utility' => 'Utilities',
	'br_config_gateway' => 'Payment Gateways',
	'br_config_shipping' => 'Shipping Methods',
	'br_config_attribute' => 'Attributes',
	'br_create_a_new_attribute' => 'Create Attribute',
	'br_config_attributeset' => 'Attribute Sets',
	'br_create_a_new_attribute_set' => 'Create Attribute Set', 
	'br_config_category' => 'Categories',
	'br_config_site' => 'Site',
	'br_config_feeds' => 'Feeds',

// Feeds
	'br_new_config_feeds' => 'Add a New Feed',
	'br_config_no_feeds' => 'No product feeds were found. To create your first product feed click the new feed button above.',
	'br_feed_settings' => 'Feed Settings',
	'br_feed_title' => 'Feed Title',
	'br_feed_code' => 'Feed Code',
	'br_feed_name' => 'Feed Name',
	'br_feed_url' => 'Feed URL',
	'br_feed_description' => 'Feed Description',
	'br_feed_version' => 'Version',
	'br_feed_details'	=> 'Feed Details for : ',
	'br_feed_code_exists' => 'Feed code must be unique',
	'br_feed_create_success'	=> 'Product Feed Created',
	'br_feed_update_failure'	=> 'Product Feed Could Not Be Created',
	'br_feed_update_success'	=> 'Product Feed Updated',
	'br_feed_update_failure'	=> 'Product Feed Could Not Be Updated',
	'br_feed_delete_success'	=> 'Product Feed Deleted',
	'br_confirm_delete_feed'	=> 'Are you sure you would like to delete this feed?',

// Dashboard 
	
	'br_all_orders' 		=> 'All Orders',
	'br_sales_report' 		=> 'Sales Report',
	'br_no_graph_availble' 	=> 'No data available',
	
// Orders 

	'br_orders' => 'Orders', 
	'br_new_order' => 'New Order',
	'br_order_id' => 'ID',
	'br_subtotal' => 'Subtotal',
	'br_order_number' => 'Order Number',
	'br_bill_to' => 'Bill To Address',
	'br_ship_to' => 'Ship To Address',
	'br_item' => 'Item', 
	'br_sku' => 'SKU',
	'br_qty' => 'Qty', 
	'br_attachment' => 'Attachment', 
	'br_order_totals' => 'Order Totals', 
	'br_order_notes' => 'Notes',
	'br_add_note' => 'Add Note',
	'br_order_add_note_success' => 'Order note successfully added',
	'br_order_note' => 'Order Note',
	'br_order_note_file' => 'Attach File',
	'br_status_notify' => 'Nofity Customer',	
	'br_note_notify' => 'Nofity Customer',	
	'br_payment_info' => 'Payment Info', 
	'br_order_date' => 'Date',
	'br_order_customer' => 'Customer',
	'br_order_amount' => 'Amount',
	'br_order_status' => 'Status',
	'br_order_status_success' => 'Order status successfully updated',  
	"method" => "Method",
	"card_type" => "Card Type",
	"card" => "Card",
	"approval_code" => "Approval Code",
	"transaction_id" => "Transaction ID", 
	"label" => "Label",
			
// Products 
	'br_product_id' => 'ID',
	'br_filter_by_category' => 'Filter by Category',
	'br_batch_action_required' => 'Opps...Please Select a Batch Action.',
	'br_delete_selected_products' => 'Delete Selected',
	'br_enable_selected_products' => 'Enable Selected',
	'br_disable_selected_products' => 'Disable Selected',
	'br_confirm_batch_delete'	=> 'Are you sure you want to delete the selected products? This can not be undone.', 
	'br_confirm_batch_enable'	=> 'Are you sure you want to enable the selected products?',
	'br_confirm_batch_disable'	=> 'Are you sure you want to disable the selected products?',
	'br_type_id' => 'Product Type', 
	'br_product_title' => 'Title',
	'br_products' => 'Products', 
	'br_new_product' => 'Create a New Product',
	'br_selected_products' => 'Selected Products',
	'br_product_sort'		=> 'Product Sorting',
	'br_featured' => 'Featured',
	
	// Product types 
	'br_basic' 			=> 'Basic',
	'br_bundle' 		=> 'Bundle',
	'br_configurable' 	=> 'Configurable',
	'br_downloadable' 	=> 'Downloads',
	'br_donation' 		=> 'Donation', 
	'br_giftcard' 		=> 'Gift Card',
	'br_virtual' 		=> 'Service',
	 
	// Buttons 
	'br_clear' => 'Clear',
	'br_add_product' => 'Add Product', 
	'br_add_files' => 'Add Files',
	'br_clear_search' => 'Clear Search', 
	'br_duplicate' => 'Duplicate',
	'br_save_continue' => 'Save & Continue',
	
	// Labels
	'br_required' => 'Required Field', 
	'br_is_required' => 'is required',
	'br_form_error_message' => 'Please correct the following errors:',
	'br_no_product_categories' => 'There are no categories asssigned to your store.',
	'br_category_selection_error' => 'Please select a category for your product',
	
	// Tabs 
	'br_details' 	=> 'Details',
	'br_options' 	=> 'Options',
	'br_pricing' 	=> 'Pricing',
	'br_category' 	=> 'Categories',
	'br_images' 	=> 'Images',
	'br_addon' 		=> 'Add-on Products',
	'br_related' 	=> 'Related Products', 
	'br_seo' 		=> 'SEO',

	// Product New / Edit  
		'br_sku' => 'SKU',
		'br_type' => 'Type', 
		'br_price_adjust' => 'Adjust Price',
		'br_enabled' => 'Enabled',
		'br_disabled' => 'Disabled', 
		'br_product_type' => 'Type',
		'br_product_new' => 'New Product',
		'br_product_edit' => 'Edit Product',
		'br_product_sku' => 'SKU',
		'br_product_weight' => 'Weight', 
		'br_shippable' => 'Shippable', 
		'br_quantity' => 'Qty', 
		'br_select_attributes' => 'Select Attributes',
		'br_file_name' => 'File Name',
		'br_upload_download_message' => 'Select a file to add to add to your downloadable product.',
		'br_product_update_success' => 'Product updated successfully',
		'br_product_delete_success' => 'Product Deleted',
		'br_add_option' => 'Add Option', 
		'br_dropdown_values' => 'Dropdown Options:',
		'br_add_value' => 'Add Value',
		'br_cost' => 'Cost', 
		'br_member_group' => 'Group',
		'br_all_groups' => 'ALL GROUPS', 
		'br_confirm_price_delete' => 'Are you sure you want to delete the selected price option?', 
		
		// Messages 
			'br_confirm_delete_product' => 'Are you sure you want to delete the selected product? Warning: This can not be undone!',
			
		// Configurable Products 
			'br_price_adjust' => 'Adjust',
			'br_create_config_options' => 'Create Configurable Options',
			'br_config_opts_instructions' => 'Configurable products are built with your dropdown attributes. Select the attributes below to build the form to create product options. After adding the options you can drag and drop them to set the order that the options are presented in.',
			'br_create_config_options' => 'Product Options',
			'br_add_config_products' => 'Add Configurable Options',
			'br_configurable_create_error' => 'Please select at least one attribute to build your configurable products',
			'br_configurable_product_required' => 'At least 1 configurable option',
			
		// Subscriptions 
			'br_subscrition_id' 		=> 'ID',
			'br_subscription_status' 	=> 'Status',
			'br_subscrition_product' 	=> 'Product ID',
			'br_subscrib_opt_title' 	=> 'Subscription Options',
			'br_subscrib_disc_price' 	=> 'Subscription Pricing',
			'br_subscrib_price_desc' 	=> 'The price for the subscription is set in the "Price" tab. In this section you can set volume pricing discounts.',
			'br_move_to_group' 			=> 'Move To Group',
			'br_no_change' 				=> 'No Change', 
			'br_subscription_period' 	=> 'Subscription Period',
			'br_next_renewal' 			=> 'Next Renewal', 
			'br_renews' 				=> 'Renews', 
			'br_every' 					=> 'Every', 
			'br_days' 					=> 'Days',
			'br_weeks' 					=> 'Weeks',
			'br_months' 				=> 'Months',	
			'br_daily' 					=> 'Daily',
			'br_monthly' 				=> 'Monthly',
			'br_trial_offer' 			=> 'Offer Trial',
			'br_trial_price' 			=> 'Trial Price',
			'br_trial_length' 			=> 'Trial Length',
			'br_trial_occur' 			=> 'Trial Occurrences',
			'br_length'					=> 'Length', 
			'br_periods'				=> 'Periods', 
			'br_percent_discount' 		=> 'Percentage Discount', 
			'br_first_notice' 			=> 'First Email Notice',
			'br_second_notice' 			=> 'Second Email Notice',
			'br_third_notice' 			=> 'Third Email Notice',
			'br_cancel_subscription' 	=> 'Cancel After',
			'br_cancel_group' 			=> 'Cancel To Group',
			'br_subscription_status_1'	=> 'Active',
			'br_subscription_status_2'	=> 'Cancelled',
			'br_subscription_status_3'	=> 'Cancelled by Admin',
			'br_subscription_status_4'	=> 'Expired',
		
		// Donations 
			'br_donation_opt_title' 		=> 'Donation Options',
			'br_min_donation' 				=> 'Minimum Donation',
			'br_allow_recurring'			=> 'Allow Recurring',
			'br_donation_instructions'		=> '* Automatically creates a subscription',
			
		// Download 
			'br_download_file_required' => 'A downloadable file',
	
	'br_add_options' => 'Add Options',
	'br_add_custom_attributes' => 'Add custom attributes',
	'br_select_attribute_set' => 'Select',
	'br_default_attributes' => 'Default Attributes',
	'br_custom_attributes' => 'Custom Attributes',
	'br_product_detail' => 'Description',
	'br_general_pricing' => 'General Pricing',
	'br_sale_pricing' => 'Sale Pricing',
	'br_price' => 'Price', 	
	'br_taxable' => 'Taxable', 	
	'br_sale_price' => 'Sale Price', 	
	'br_sale_start' => 'Sale Start Date', 
	'br_sale_end' => 'Sale End Date', 
	'br_meta_data' => 'Meta Data', 	
	'br_meta_title' => 'Title', 	
	'br_meta_keyword' => 'Keywords', 	
	'br_meta_descr' => 'Description', 
	'br_option_title' => 'Title',
	'br_option_type' => 'Field Type',
	'br_option_required' => 'Required',
	'br_option_sort' => 'Sort',
	'br_option_drop_title' => 'Title',
	'br_option_drop_type' => 'Adjust',
	'br_option_drop_price' => 'Adjust',
	'br_product_image_desc' => '',
	'br_product_category_desc' => 	'br_',
	'br_add_products' => 'Add Products',
	'br_bundle_products' => 'Selected Products',
	'br_bundle_product_search' => 'Use the search box above to locate products to add to the bundle.',
	'br_related_product_search' => 'Use the search box above to locate products to relate to this product.',
	'br_related_products' => 'Selected Products', 
	'br_download_limit_instruction' => '(0 = unlimited)', 
	
// Promotions 
	'br_new_promo' 				=> 'Add Promotion',
	'br_promo_name' 			=> 'Name',
	'br_promo_code' 			=> 'Code',
	'br_promo_descr' 			=> 'Description',
	'br_promo_start_dt' 		=> 'Start Date',
	'br_promo_end_dt' 			=> 'End Date',
	'br_promo_enabled' 			=> 'Enabled',
	'br_promo_products' 		=> 'Promotion Products',
	'br_all_categories' 		=> 'All Categories',
	'br_all_products' 			=> 'All Products',
	'br_promo_title' 			=> 'Title',
	'br_promo_desc' 			=> 'Description',
	'br_code_type'				=> 'Discount Type',
	'br_amount' 				=> 'Amount', 
	'br_start_dt' 				=> 'Start Date', 
	'br_end_dt' 				=> 'End Date',
	'br_uses_per' 				=> 'Uses Per', 
	'br_min_subtotal' 			=> 'Minimum Subtotal', 
	'br_min_quantity' 			=> 'Minimum Quantity',
	'br_discount_type' 			=> 'Promotion Type',
	'br_cart'					=> 'Cart', 
	'br_fixed' 					=> 'Fixed',
	'br_percent' 				=> 'Percent',
	'br_promo_product_search' 	=> 'Use the search box above to select products.',
	'br_promo_update_success' 	=> 'Promotion Successfully Updated', 
	'br_confirm_delete_promo' 	=> 'Are you sure you want to delete the selected promotion?',
	'br_promo_delete_success' 	=> 'The promotion has been successfully deleted.',
	
// Reports 
	'br_sales' => 'Sales',
	'br_descr' => 'Description',
	'br_sales_for' => 'Sales For', 
	'br_select_date' => 'Select Date', 
	'br_today'	=> 'Today', 
	'br_week' => 'This Week',
	'br_month' => 'This Month',
	'br_quarter' => 'Quarter', 
	'br_year' => 'This Year',
	'br_l_week' => 'Last Week',
	'br_l_month' => 'Last Month',
	'br_l_year' => 'Last Year',
	'br_all' => 'All Time',
	'br_start' => 'Start',
	'br_end' => 'End',
	'br_date' => 'Date', 
	'br_custom' => 'Custom', 
	'br_coupon' => 'Coupon', 
	'br_no_results' => 'Your report returned no results. Please adjust the search criteria.',
	'br_export_csv' => 'Export (csv)',
	'br_base' => 'Base Price', 
	'br_tax' => 'Tax',
	'br_total' => 'Total', 
	'br_discount' => 'Discount',
	'br_search_phrase' => 'Search Phrase', 
	'br_products_found' => 'Products Found',
	'br_search_created' => 'Dated Searched',
	'br_qty_sold' => 'QTY Sold',
	'br_total_value' => 'Total Sales Value',
	'br_download_count' => 'Download Count',	
								
// Customers 
	'br_add_customer' => 'Add Customer', 
	'br_customer_id' => 'ID',
	'br_customer_username' => 'Customer',
	'br_customer_email' => 'Email',
	'br_customer_created' => 'Created', 
	'br_customer_orders' => 'Customer Orders',
	'br_customer_history' => 'Order&nbsp;History',
	'br_order_history'	=> 'Show Orders',
	'br_line_items'	=> 'Line Items in Order',
	'br_order_total'	=> 'Customer Value',
	'br_order_lines'	=> 'Lines in Order',
	'br_back_to_customers' => 'Back to List',

// Configuration
	
	'br_module_install_success'	=> 'The selected  module has been installed.', 
	'br_module_update_success' 	=> 'The selected module has been updated.', 
	'br_module_remove_success' 	=> 'The selected modules has been removed.',
	'br_module_install_error'	=> 'Module Installation Error', 
	'br_config_attribute_instructions'		=> 'Manage product attributes. Dropdown attributes are used to create configurable products.',
	'br_config_attributeset_instructions'	=> 'Group attributes into sets which can be added to products as custom attributes.',
	'br_config_category_instructions'		=> 'Manage your catalog category tree.',
	'br_config_email_instructions'			=> 'Notification templates are used by the system to send a variety of emails to your clients.',
	'br_config_feeds_instructions'			=> 'Create custom feeds for your products.',
	'br_config_gateway_instructions'		=> 'Select and manage your payment gateways.',
	'br_config_permission_instructions'		=> 'Set granular group permissions for restricted access to the module.',
	'br_config_shipping_instructions'		=> 'Select and manage your shipping methods',
	'br_config_site_instructions'			=> 'General configuration settings for your store',
	'br_config_tax_instructions'			=> 'Setup and manage your stores tax rates and rules.',

	// Attributes 
		'br_text' => 'Text',
		'br_file' => 'File',
		'br_textarea' => 'Textarea',
		'br_dropdown' => 'Dropdown', 
		'br_multiselect' => 'Multiselect', 
		'br_attributes' => 'Attributes',
		'br_attribute_settings' => 'Attribute Settings', 
		'br_code' => 'Code',
		'br_field_type' => 'Field Type',
		'br_attribute_update_success' => 'Attribute Updated Successfully',
		'br_attribute_set_update_success' => 'Attribute Set Updated Successfully',
		'br_text_default_instruction' => '',
		'br_multiselect_instruction' => '* Add each value option on its own line',
		'br_dropdown_instruction' => '* Add each value option on its own line',
		'br_filterable' => 'Filterable',
		'br_confirm_delete_attribute' => 'Are you sure you want to delete the selected attribute? Warning: This can not be undone!',
		'br_attribute_delete_success' => 'Attribute Successfully Deleted!', 
	
	// Attribute Sets
		'br_new_attribute' 					=> 'New Attribute',	
		'br_attribute_set' 					=> 'Attribute Sets',
		'br_attribute_set_instruction' 		=> 'Select the attributes you would like to populate when the set is selected.<br />(Hint: You can drag & drop the titles to set the order.)',
		'br_new_attribute_set' 				=> 'New Attribute',
		'br_attribute_set_settings' 		=> 'Attribute Set Settings', 
		'br_confirm_delete_attribute_set' 	=> 'Are you sure you want to delete the selected attribute set? Warning: This can not be undone!',
		'br_attribute_set_delete_success' 	=> 'Attribute Set Successfully Deleted!', 

	// Categories
		'br_categories' => 'Categories', 
		'br_category_settings' => 'Settings',
		'br_level_1' => 'Level 1',
		'br_level_2' => 'Level 2',
		'br_level_3' => 'Level 3',
		'br_level_4' => 'Level 4',
		'br_template_path' => 'Template&nbsp;Path',
		'br_add_category' => 'New Category',
		'br_delete_category' => 'Delete Category',
		'br_remove_image' => 'Remove Image', 
		'br_confirm_delete_category' => 'Are you sure you want to delete this category? All subcategories will be deleted. WARNING: This can not be undone!',

	// Import 
		'br_product_import' => 'Product Import',
		'br_product_import_descr' => 'Product Import Description',
		'br_product_export' => 'Product Export',
		'br_product_export_descr' => 'Product Export Description',
		
	// Permission Settings 
		'br_permission' => 'Permissions',
		'br_permission_update_success' => 'Group Permissions Successfully Updated',
		'br_order_detail' => 'Order Detail',
		'br_promo_new' => 'Promotion Create',
		'br_promo_edit' => 'Promotion Edit',
		'br_report_detail' => 'Report Detail',
		'br_config_feeds_edit' => 'Feeds Edit',
		'br_config_attribute_create' => 'Attribute Create',
		'br_config_attribute_edit' => 'Attriubte Edit',
		'br_config_attributeset_create' => 'Attribute Set Create',
		'br_config_attributeset_edit' => 'Attribute Set Edit',
		'br_config_attributeset_delete' => 'Attribute Set Delete',
		'br_config_category_edit' => 'Category Edit',
		'br_config_email_edit' => 'Email Edit',
		'br_config_gateway_install' => 'Gateway Install',
		'br_config_gateway_edit' => 'Gateway Edit',
		'br_config_gateway_remove' => 'Gateway Remove',
		'br_config_permission_edit' => 'Permission Edit',
		'br_config_shipping_install' => 'Shipping Install',
		'br_config_shipping_edit' => 'Shipping Edit',
		'br_config_shipping_remove' => 'Shipping Remove',
		'br_config_tax_new' => 'Tax Create',
		'br_config_tax_edit' => 'Tax Edit',
		
		
	// Notification Emails 
		'br_email_update_success' 		=> 'Notification Successfully Updated', 
		'br_notifications'				=> 'Notifications', 
		'br_hide_email_vars' 			=> 'Hide Variables',
		'br_show_email_vars' 			=> 'Show Variables',
		'br_from_name'					=> 'From Name', 
		'br_from_email'					=> 'From Email', 
		'br_bcc_list'					=> 'Send Copies To',
		'br_subject' 					=> 'Subject',  
		'br_customer-account-new' 		=> 'New Account Email',
		'br_customer-order-new' 		=> 'New Order Email',
		'br_customer-order-status' 		=> 'Order Status Email',
		'br_customer-password-update' 	=> 'Password Update',
		'br_customer-password-reminder' => 'Password Reminder',
		'br_customer-order-note'		=> 'Order Note Email',
		'br_subscription-cancel'		=> 'Subscription Cancelled',
		'br_subscription-cc-expiration' => 'Subscription Credit Card Expiring',
		'br_subscription-cc-update'		=> 'Subscription Credit Card Updated',
		'br_subscription-payment-failed' => 'Subscription Payment Failed',
		'br_product-low-stock-notice' 	=> 'Product Low Stock Notice',
		
	// Gateway Methods
		'br_gateway_methods' 	=> 'Payment Gateways',
		'br_clear_all' 			=> 'Clear All', 
		'br_ipn_url' 			=> 'IPN Url',
		
	// Shipping 
		'br_shipping' 		=> 'Shipping', 
		'br_shipping_methods' => 'Shipping Methods', 
		'br_country' 		=> 'Country',
		'br_zip_code' 		=> 'Zip Code',
		'br_from_price' 	=> 'From Price',
		'br_to_price' 		=> 'To Price',
		'br_from_weight'	=> 'From Weight',
		'br_to_weight' 		=> 'To Weight',
		'br_add_row' 		=> 'Add Row', 
		'br_label' 			=> 'Label', 
		'rates_matrix' 		=> 'Rates Matrix',
	
	// Site 
		'br_site_name' => 'Site Name',
		'br_site_logo' => 'Logo',	
		'br_site_license' => 'License',	
		'br_site_phone' => 'Phone',	
		'br_site_fax' => 'Fax',	
		'br_site_address1' => 'Address 1',	
		'br_site_address2' => 'Address 2',	
		'br_site_city' => 'City',	
		'br_site_state' => 'State',	
		'br_site_zipcode' => 'Zip Code',	
		'br_site_country' => 'Country',	
		'br_store_update_success' => 'Site Updated Successfully',
		'br_site_currency' => 'Currency', 
		'br_currency_instructions' => '<B>Note:</B> Changing the currency will not automatically adjust product pricing.', 
		'br_guest_checkout' => 'Guest Checkout',
		'br_register_group' => 'Default Member Group',
		'br_general_configuration' => 'General Configuration',
		'br_catalog' => 'Catalog',
		'br_result_limit' => 'Search Result Limit',
		'br_result_per_page' => 'Results Per Page',
		'br_result_paginate' => 'Result Paginate',
		'br_site_secure_url' => 'Secure URL',
		'br_site_media_url' => 'Media URL',
		'br_site_media_dir' => 'Media Directory',
		'br_site_meta_title' => 'Meta Title',	
		'br_site_meta_keywords' => 'Meta Keywords',
		'br_site_meta_descr' => 'Meta Description',
		'br_site_cart_url' => 'Cart Template', 
		'br_site_checkout_url' => 'Checkout Template',	
		'br_site_thankyou_url' => 'Thank You Template',
		'br_site_customer_url' => 'Customer Template',	
		'br_site_product_url' => 'Product Template',
		'br_countries' => 'Countries',
		'br_product_config' => "Global Product Configuration",
		'br_low_stock' => 'Low Stock Threshold (Basic Stock)',

	// Tax Settings 
		'br_state' => 'State',
		'br_rate' => 'Rate', 
		'br_tax_zipcode_instructions' => '* Separate multiple zip codes with a pipe (i.e. 90049|90025|95219)',
		'br_tax_settings' => 'Tax Settings',
		'br_zone' => 'Country',		
		'br_all_zones' => '* All Countries', 
		'br_state' => 'State',		
		'br_all_states' => '* All States', 
		'br_tax_rate' => 'Tax Rate',	
		'br_confirm_delete_tax' => 'Are you sure you want to delete the tax rule? Warning: This can not be undone!',
		'br_tax_update_success' => 'Tax Rule Successfully Updated',	
		'br_tax_delete_success' => 'Tax Rule Successfully Deleted',		

	// Feildtype 
		'br_ft_product_search' => 'Use the search box above to add products.',

	// Front End 
		
		// Customer 
			"br_customer_exists" => "Customer already exists. Please login below.",
			"br_invalid_form_id" => "There was an error processing your registration. Please try again.", 
			"br_sign_up_thankyou" => "Thank you for registering. You can now log in below.", 
			"br_please_login_or_create_an_account_to_checkout" => "Please login below or register a new account to continue",
			"br_profile_updated_successfully" => "Thank you your profile has been updated.",
			"br_password_fields_required" => "All password fields are required.", 
			"br_password_update_success" => "Your password has been updated.",
			"br_password_current_invalid"	=> "Incorrect current password.",
							
			// Customer Downloads 
				'br_download_available' 	=> "Available", 
				'br_download_pending' 		=> "Pending",
				'br_download_limit' 		=> 'Limit',
				'br_download_unlimited' 	=> "Unlimited", 
				'br_download_length' 		=> "Length", 	
				'br_download_version' 		=> "Version",
				
		// Cart Messages 
			'br_checkout_shipping_error' 			=> "An error has occurred with the shipping method you selected. Please try again.", 
			'br_no_shipping_required' 				=> "No shipping required", 
			'br_product_configuration_required' 	=> "Product requires configuration.",
			'br_discount_removed' 					=> "The discount code has been removed.",
			'br_discount_invalid' 					=> "The discount code you entered <b>\"%s\"</b> is invalid.",
			'br_subscription_label'					=> "Subscription",
			'br_stock_inventory_exceeded' 			=> "One or more of your items have exceeded the available quantity",
		
		// Checkout Messages
			'br_the_following_fields_are_required' 	=> "The following address fields are required:", 
			'br_select_a_state' 		=> "Select a State",
			'br_fname' 					=> 'First Name', 
			'br_lname' 					=> 'Last Name', 
			'br_billing_fname' 			=> 'Billing First Name', 
			'br_billing_lname' 			=> 'Billing Last Name', 
			'br_billing_phone' 			=> 'Billing Telephone', 
			'br_billing_address1' 		=> 'Billing Address', 
			'br_billing_city' 			=> 'Billing City', 
			'br_billing_state' 			=> 'Billing State', 
			'br_billing_zip' 			=> 'Billing Zip Code', 
			'br_shipping_fname' 		=> 'Shipping First Name', 
			'br_shipping_lname' 		=> 'Shipping Last Name', 
			'br_shipping_address1' 		=> 'Shipping Address', 
			'br_shipping_state' 		=> 'Shipping State', 
			'br_shipping_zip' 			=> 'Shipping Zip Code', 
			'br_shipping_phone' 		=> 'Shipping Telephone',
		
		// Order Messages 
			'br_order_thank_you' 			=> "Thank you for your order",
			
		// Wishist Messages 
			'br_wishlist_add'				=> 'The product has been added to your wishlist.',
			'br_wishlist_remove'			=> 'The product has been removed from your wishlist.',
			'br_wishlist_update'			=> 'Your wishlist has been updated.',
			'br_wishlist_login'				=> 'You must be logged in to add products to your wishlist.',
			'br_wishlist_duplicate_error'	=> 'The product is already in your wishlist.',
		
		// Price Filters 
			'br_filter_to' 					=> 'to',
			'br_filter_under' 				=> 'Under', 	
		
		// Misc FE
			'br_recurring_donation'			=> 'Recurring Donation',
			'br_every_months'				=> 'Every Month',
			'br_other' 						=> 'Other',
			'br_minimum' 					=> 'Min.',
// End 
	'' 
);

// Doing our own magic to load in any custom language files. 
$local_path = PATH_THIRD.'_local/brilliant_retail/language/';
if(file_exists($local_path)){
	$this->EE =& get_instance();
	$this->EE->load->helper('brilliant_retail');
	$lang_dir = $this->EE->session->userdata["language"];
	if($lang_dir == ''){
		$lang_dir = 'english';
	}
	if(file_exists($local_path.$lang_dir)){
		$path = $local_path.$lang_dir.'/lang.brilliant_retail.php';
		if(file_exists($local_path.$lang_dir.'/lang.brilliant_retail.php')){
			$core_lang = $lang;
			$lang = array();
			include($path);
			$lang = array_merge($core_lang,$lang);
		}
	}
} 