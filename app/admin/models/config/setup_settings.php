<?php

return [
    'form' => [
        'toolbar' => [
            'buttons' => [
                'back' => [
                    'label' => 'lang:admin::lang.button_icon_back',
                    'class' => 'btn btn-default',
                    'href'  => 'settings',
                ],
                'save' => [
                    'label'                   => 'lang:admin::lang.button_save',
                    'class'                   => 'btn btn-primary',
                    'data-request'            => 'onSave',
                    'data-progress-indicator' => 'admin::lang.text_saving',
                ],
            ],
        ],
        'tabs' => [
            'fields' => [
                'menus_page' => [
                    'label'   => 'lang:system::lang.settings.label_menus_page',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'select',
                    'default' => 'local'.DIRECTORY_SEPARATOR.'menus',
                    'comment' => 'lang:system::lang.settings.help_menus_page',
                ],
                'reservation_page' => [
                    'label'   => 'lang:system::lang.settings.label_reservation_page',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'select',
                    'default' => 'reservation'.DIRECTORY_SEPARATOR.'reservation',
                    'comment' => 'lang:system::lang.settings.help_reservation_page',
                ],
                'guest_order' => [
                    'label'   => 'lang:system::lang.settings.label_guest_order',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'switch',
                    'on'      => 'lang:admin::lang.text_yes',
                    'off'     => 'lang:admin::lang.text_no',
                    'comment' => 'lang:system::lang.settings.help_guest_order',
                ],
                'location_order' => [
                    'label'   => 'lang:system::lang.settings.label_location_order',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'switch',
                    'default' => false,
                    'on'      => 'lang:admin::lang.text_yes',
                    'off'     => 'lang:admin::lang.text_no',
                    'comment' => 'lang:system::lang.settings.help_location_order',
                ],
                'order_email' => [
                    'label'   => 'lang:system::lang.settings.label_order_email',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'checkboxtoggle',
                    'options' => [
                        'customer' => 'lang:system::lang.settings.text_to_customer',
                        'admin'    => 'lang:system::lang.settings.text_to_admin',
                        'location' => 'lang:system::lang.settings.text_to_location',
                    ],
                    'comment' => 'lang:system::lang.settings.help_order_email',
                ],
                'default_order_status' => [
                    'label'   => 'lang:system::lang.settings.label_default_order_status',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'select',
                    'options' => ['Admin\Models\Statuses_model', 'getDropdownOptionsForOrder'],
                    'comment' => 'lang:system::lang.settings.help_default_order_status',
                ],
                'processing_order_status' => [
                    'label'       => 'lang:system::lang.settings.label_processing_order_status',
                    'tab'         => 'lang:system::lang.settings.text_tab_title_order',
                    'type'        => 'select',
                    'multiOption' => true,
                    'options'     => ['Admin\Models\Statuses_model', 'getDropdownOptionsForOrder'],
                    'comment'     => 'lang:system::lang.settings.help_processing_order_status',
                ],
                'completed_order_status' => [
                    'label'       => 'lang:system::lang.settings.label_completed_order_status',
                    'tab'         => 'lang:system::lang.settings.text_tab_title_order',
                    'type'        => 'select',
                    'multiOption' => true,
                    'options'     => ['Admin\Models\Statuses_model', 'getDropdownOptionsForOrder'],
                    'comment'     => 'lang:system::lang.settings.help_completed_order_status',
                ],
                'canceled_order_status' => [
                    'label'   => 'lang:system::lang.settings.label_canceled_order_status',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_order',
                    'type'    => 'select',
                    'options' => ['Admin\Models\Statuses_model', 'getDropdownOptionsForOrder'],
                    'comment' => 'lang:system::lang.settings.help_canceled_order_status',
                ],

                'reservation_email' => [
                    'label'   => 'lang:system::lang.settings.label_reservation_email',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_reservation',
                    'type'    => 'checkboxtoggle',
                    'options' => [
                        'customer' => 'lang:system::lang.settings.text_to_customer',
                        'admin'    => 'lang:system::lang.settings.text_to_admin',
                        'location' => 'lang:system::lang.settings.text_to_location',
                    ],
                    'comment' => 'lang:system::lang.settings.help_reservation_email',
                ],
                'default_reservation_status' => [
                    'label'   => 'lang:system::lang.settings.label_default_reservation_status',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_reservation',
                    'type'    => 'select',
                    'options' => ['Admin\Models\Statuses_model', 'getDropdownOptionsForReservation'],
                    'comment' => 'lang:system::lang.settings.help_default_reservation_status',
                ],
                'confirmed_reservation_status' => [
                    'label'   => 'lang:system::lang.settings.label_confirmed_reservation_status',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_reservation',
                    'type'    => 'select',
                    'options' => ['Admin\Models\Statuses_model', 'getDropdownOptionsForReservation'],
                    'comment' => 'lang:system::lang.settings.help_confirmed_reservation_status',
                ],
                'canceled_reservation_status' => [
                    'label'   => 'lang:system::lang.settings.label_canceled_reservation_status',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_reservation',
                    'type'    => 'select',
                    'options' => ['Admin\Models\Statuses_model', 'getDropdownOptionsForReservation'],
                    'comment' => 'lang:system::lang.settings.help_canceled_reservation_status',
                ],

                'invoice_prefix' => [
                    'label'   => 'lang:system::lang.settings.label_invoice_prefix',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_invoice',
                    'type'    => 'text',
                    'comment' => 'lang:system::lang.settings.help_invoice_prefix',
                ],

                'tax_mode' => [
                    'label'   => 'lang:system::lang.settings.label_tax_mode',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_taxation',
                    'type'    => 'switch',
                    'default' => false,
                    'comment' => 'lang:system::lang.settings.help_tax_mode',
                ],
                'tax_percentage' => [
                    'label'   => 'lang:system::lang.settings.label_tax_percentage',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_taxation',
                    'type'    => 'number',
                    'default' => 0,
                    'comment' => 'lang:system::lang.settings.help_tax_percentage',
                ],
                'tax_menu_price' => [
                    'label'   => 'lang:system::lang.settings.label_tax_menu_price',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_taxation',
                    'type'    => 'select',
                    'options' => [
                        'lang:system::lang.settings.text_menu_price_include_tax',
                        'lang:system::lang.settings.text_apply_tax_on_menu_price',
                    ],
                    'comment' => 'lang:system::lang.settings.help_tax_menu_price',
                ],
                'tax_delivery_charge' => [
                    'label'   => 'lang:system::lang.settings.label_tax_delivery_charge',
                    'tab'     => 'lang:system::lang.settings.text_tab_title_taxation',
                    'type'    => 'switch',
                    'on'      => 'lang:admin::lang.text_yes',
                    'off'     => 'lang:admin::lang.text_no',
                    'comment' => 'lang:system::lang.settings.help_tax_delivery_charge',
                ],
            ],
        ],
        'rules' => [
            ['order_email.*', 'lang:system::lang.settings.label_order_email', 'required|alpha'],
            ['tax_mode', 'lang:system::lang.settings.label_tax_mode', 'required|integer'],
            ['tax_title', 'lang:system::lang.settings.label_tax_title', 'max:32'],
            ['tax_percentage', 'lang:system::lang.settings.label_tax_percentage', 'required_if:tax_mode,1|numeric'],
            ['tax_menu_price', 'lang:system::lang.settings.label_tax_menu_price', 'numeric'],
            ['tax_delivery_charge', 'lang:system::lang.settings.label_tax_delivery_charge', 'numeric'],
            ['processing_order_status', 'lang:system::lang.settings.label_processing_order_status', 'required'],
            ['completed_order_status', 'lang:system::lang.settings.label_completed_order_status', 'required'],
            ['canceled_order_status', 'lang:system::lang.settings.label_canceled_order_status', 'required|integer'],
            ['default_reservation_status', 'lang:system::lang.settings.label_default_reservation_status', 'required|integer'],
            ['confirmed_reservation_status', 'lang:system::lang.settings.label_confirmed_reservation_status', 'required|integer'],
            ['canceled_reservation_status', 'lang:system::lang.settings.label_canceled_reservation_status', 'required|integer'],
            ['menus_page', 'lang:system::lang.settings.label_menus_page', 'required|string'],
            ['reservation_page', 'lang:system::lang.settings.label_reservation_page', 'required|string'],
            ['guest_order', 'lang:system::lang.settings.label_guest_order', 'required|integer'],
            ['location_order', 'lang:system::lang.settings.label_location_order', 'required|integer'],
            ['invoice_prefix', 'lang:system::lang.settings.label_invoice_prefix'],
        ],
    ],
];
