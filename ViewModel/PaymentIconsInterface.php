<?php declare(strict_types=1);

/**
 * Siteation - https://siteation.dev/
 * Copyright © Siteation. All rights reserved.
 * See LICENSE file for details.
 */

namespace Siteation\HyvaIconsPayment\ViewModel;

use Siteation\IconsPayment\ViewModel\PaymentIconsInterface as BasePaymentIconsInterface;

// phpcs:disable Magento2.NamingConvention.InterfaceName.WrongInterfaceName

/**
 * Backwards-compatible interface for the Hyvä payment-icon view models.
 *
 * The per-icon `@method …Html()` hints and the `renderHtml()` contract now live on
 * the framework-agnostic base interface (siteation/magento2-icons-payment), which
 * this extends — so they are maintained in one place and inherited here. Existing
 * type hints against this interface keep working unchanged.
 */
interface PaymentIconsInterface extends BasePaymentIconsInterface
{
}
