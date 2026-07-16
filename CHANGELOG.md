# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased

## 2.0.0

### Changed

- **The SVG library moved to the new framework-agnostic package
  `siteation/magento2-icons-payment`** (now a required dependency). This package
  becomes a thin **Hyvä adapter**: its `SvgIcons`-based view models and the `payment`
  prefix mapping now resolve their assets from `Siteation_IconsPayment::svg`. No change
  to the view-model API or the Hyvä-CMS icon picker.
- `PaymentIconsInterface` now extends the base interface in
  `siteation/magento2-icons-payment`, so the per-icon `@method` hints are maintained in
  one place.

### Removed

- `view/frontend/web/svg/*` (moved to `siteation/magento2-icons-payment`).
- `bin/generate-icons-signatures` (moved to `siteation/magento2-icons-payment`).

### Migration

- Run `composer update` to pull in `siteation/magento2-icons-payment`, then
  `bin/magento setup:upgrade`. Any code referencing the asset path
  `Siteation_HyvaIconsPayment::svg/...` directly must switch to
  `Siteation_IconsPayment::svg/...`. The `PaymentIcons`/`Flat`/`Mono` view models and
  the `{{icon "payment/…"}}` tag are unchanged.

## 1.2.6 - 2026-04-01

### Changed

- Documented `payment` prefix mapping behavior and collision considerations in README.
- Removed deprecated `setup_version` from `etc/module.xml`.
- Updated Billie logo
- Updated Bancontact logo

### Fixed

- Missing interface for wero logos

## 1.2.5 - 2026-02-14

### Added

- iDeal - Wero Logo
- Wero Logo

## 1.2.4 - 2024-12-29

### Added

- Cash on Delivery Logo

## 1.2.3 - 2024-10-11

### Fixed

- iDeal stoke color in the flat version
- Moved `SvgIcons` argument from global scope to frontend and adminthtml scope,
  this was overwritten by other icons arguments that are set on the frontend and adminthtml scope (Thanks to @woutk88)

## 1.2.2 - 2024-07-28

### Added

- Billink Logo, (Thanks to @ThijmenKort)

### Fixed

- Interface with missing icons from last release

## 1.2.1 - 2024-06-02

### Added

- alias for `przelewy24` and `in3` for calling it directly (the default method)

## 1.2.0 - 2024-06-02

### Added

- mbway/multibanco logo
- Trustly logo
- Payconiq logo
- WeChatPay logo
- vpay logo
- Stripe logo
- Billie logo

### Changed

- Updated Giropay logo
- Updated Riverty logo

## 1.1.0 - 2024-01-30

### Added

- ABN B2B afterpay logo
- Amex logo
- MasterCard logo
- Stripe logo

### Changed

- Maestro Mono Logo to a version that is more inline with the other versions

### Removed

- Old iDeal fallback version

## 1.0.3 - 2023-10-12

### Changed
- Updated iDeal logo

## 1.0.2 - 2023-08-18

### Fixed
- Location for iconPathPrefix

## 1.0.1 - 2023-04-28

### Changed
- bg color for default

## 1.0.0 - 2023-04-28

Initial release 🎉
