<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Trustly extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'trustly', 'defaultTitle' => __('Trustly', 'mollie-payments-for-woocommerce'), 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \true, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \true, 'SEPA' => \false];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}
