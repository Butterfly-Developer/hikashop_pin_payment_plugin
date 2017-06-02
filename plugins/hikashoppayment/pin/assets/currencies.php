<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Hikashop plugin for pin payments
 *
 * A list of accepted currencies, source (3/3/2017): https://pin.net.au/docs/currency-support
 */

$acceptedCurrencies = array(
    'AUD', //$ Australian Dollar
    'USD', //$ United States Dollar
    'NZD', //$ New Zealand Dollar
    'SGD', //$ Singaporean Dollar
    'EUR', //€ Euro
    'GBP', //£ Pound Sterling
    'CAD', //$ Canadian Dollar
    'HKD', //$ Hong Kong Dollar
    'JPY', //¥ Japanese Yen
    'MYR', //RM Malaysian ringgit
    'THB', //฿ Thai baht
    'PHP', //₱ Philippine Peso
    'ZAR', //R South African rand
    'IDR', //Rp Indonesian rupiah
);