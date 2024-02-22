<?php
/**
 * Payrexx Payment Gateway
 *
 * Copyright © 2022 PAYREXX AG (https://www.payrexx.com)
 * See LICENSE.txt for license details.
 *
 * @copyright   2022 PAYREXX AG
 * @author      Payrexx <support@payrexx.com>
 * @package     magento2
 * @subpackage  payrexx_payment_gateway
 * @version     1.0.0
 */
namespace Payrexx\PaymentGateway\Model\Config\Source;

/**
 * Platform update for payrexx
 *
 * @codeCoverageIgnore
 * @api
 * @since 100.0.2
 */
class Platform implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'payrexx.com' => __('Payrexx'),
            'zahls.ch' => __('zahls.ch'),
        ];
    }
}
