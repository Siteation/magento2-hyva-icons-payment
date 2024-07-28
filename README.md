# Siteation - Hyva Icon Pack - Payment

[![Packagist Version](https://img.shields.io/packagist/v/siteation/magento2-hyva-icons-payment?style=for-the-badge)](https://packagist.org/packages/siteation/magento2-hyva-icons-payment)
![Supported Magento Versions](https://img.shields.io/badge/magento-%202.4-brightgreen.svg?logo=magento&longCache=true&style=for-the-badge)
[![Hyva Themes Module](https://img.shields.io/badge/Hyva_Themes-Module-3df0af.svg?longCache=true&style=for-the-badge)](https://hyva.io/)
![License](https://img.shields.io/github/license/siteation/magento2-hyva-icons-payment?color=%23234&style=for-the-badge)

This Magento 2 module adds the option to use Payment Icons in your Hyva frontend.

This requires that you have a working Hyva frontend,
this icon pack was made specifically for Hyva Themes and will not work out of the box with any other frontend.

## Installation

Install the package via;

```bash
composer require siteation/magento2-hyva-icons-payment
bin/magento setup:upgrade
```

> **Warning** This Module requires Magento 2.4 or higher and requires Hyva!
> For more requirements see the `composer.json`.

## How to use

By default this module loads nothing.

To use this icon pack instead of the default Hyva icons, add the following to your phtml file;

```php
<?php
use Hyva\Theme\Model\ViewModelRegistry;
use Siteation\HyvaIconsPayment\ViewModel\PaymentIcons;

/** @var ViewModelRegistry $viewModels */

/** @var PaymentIcons $paymentIcons */
$paymentIcons = $viewModels->require(PaymentIcons::class);
```

and use the PaymentIcons just as the HeroIcons in Hyva;

```php
<?= $paymentIcons->idealHtml('p-1', 64, 48, ["aria-label" => "Pay with iDeal"]) ?>
```

### Preview of each style

We offer this icon pack in 3 styles:

#### Default

![ideal-logo] ![maestro-logo] ![paypal-logo]

[ideal-logo]: ./assets/preview/default/ideal.svg
[maestro-logo]: ./assets/preview/default/maestro.svg
[paypal-logo]: ./assets/preview/default/paypal.svg

#### Flat

![ideal-logo-flat] ![maestro-logo-flat] ![paypal-logo-flat]

[ideal-logo-flat]: ./assets/preview/flat/ideal.svg
[maestro-logo-flat]: ./assets/preview/flat/maestro.svg
[paypal-logo-flat]: ./assets/preview/flat/paypal.svg

#### Mono

<picture>
  <source media="(prefers-color-scheme: dark)" srcset="./assets/preview/mono/ideal-dark.svg?v=1.1.0">
  <img alt="" src="./assets/preview/mono/ideal.svg?v=1.1.0">
</picture>
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="./assets/preview/mono/maestro-dark.svg?v=1.1.0">
  <img alt="" src="./assets/preview/mono/maestro.svg?v=1.1.0">
</picture>
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="./assets/preview/mono/paypal-dark.svg">
  <img alt="" src="./assets/preview/mono/paypal.svg">
</picture>

### Using SVG icons in CMS content

You can now also use the SVG icons in your CMS content.

Bringing svg icon support to you CMS pages, Blocks and Widgets.

```txt
{{icon "payment/default/ideal" classes="inline-block" width=64 height=48}}
{{icon "payment/flat/ideal" classes="inline-block" width=64 height=48}}
{{icon "payment/mono/ideal" classes="inline-block" width=64 height=48}}
```

[For more information on how and what see the Hyva Docs](https://docs.hyva.io/hyva-themes/writing-code/working-with-view-models/svgicons.html#using-svg-icons-in-cms-content)

> This feature is supported since Hyva v1.1.12

## Payment options offered in this Icon Pack

ABN B2B Afterpay • Alipay • Amazon Pay • Amex • Apple Pay • Bancontact • Banktransfer • Belfius • Biller • Billink • Creditcard • Direct Debit • EPS • Giftcard • Giropay • Google Pay • iDeal • in3 • kbc • Klarna • Maestro • Mastercard • MultiBanco • MyBank • payconiq • PayPal • paysafecard • Przelewy24 • Riverty • Sepa • Sofort • Stripe • Trustly • Visa • vPay • WeChatpay

## Other Icon packs for Hyva

- For Icons packs see https://github.com/topics/hyva-icons

_If you are looking for a Luma based option [checkout this icon pack instead](https://github.com/GrimLink/magento2-icon-packs)._

## Icon License

The payment icons used in this module were created by Siteation under a MIT License

## Disclaimer

All used trademarks, brands and/or names are the property of their respective owners.

The use of these trademarks,
brands and/or names does not indicate endorsement of the property holder by us,
nor vice versa.
