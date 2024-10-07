<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Sofort extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'sofort', 'defaultTitle' => __('SOFORT Banking', 'mollie-payments-for-woocommerce'), 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \true, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \true, 'SEPA' => \true];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}
