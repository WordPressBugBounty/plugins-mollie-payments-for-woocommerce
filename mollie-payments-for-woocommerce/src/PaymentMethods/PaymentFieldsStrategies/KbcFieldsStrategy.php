<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods\PaymentFieldsStrategies;

class KbcFieldsStrategy implements \Mollie\WooCommerce\PaymentMethods\PaymentFieldsStrategies\PaymentFieldsStrategyI
{
    use \Mollie\WooCommerce\PaymentMethods\PaymentFieldsStrategies\IssuersDropdownBehavior;
    public function execute($gateway, $dataHelper)
    {
        if (!$this->dropDownEnabled($gateway)) {
            return;
        }
        $issuers = $this->getIssuers($gateway, $dataHelper);
        $selectedIssuer = $gateway->getSelectedIssuer();
        $this->renderIssuers($gateway, $issuers, $selectedIssuer);
    }
    public function getFieldMarkup($gateway, $dataHelper)
    {
        if (!$this->dropDownEnabled($gateway)) {
            return "";
        }
        $issuers = $this->getIssuers($gateway, $dataHelper);
        $selectedIssuer = $gateway->getSelectedIssuer();
        $markup = $this->dropdownOptions($gateway, $issuers, $selectedIssuer);
        return $markup;
    }
}
