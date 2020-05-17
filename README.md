# Magento2-ProvinceItaliane
Add italian provinces to Italian select region.

## Overview

- Install Magento2-ProvinceItaliane
- How To Active Magento2-ProvinceItaliane

## How to Install

### ✓ #1. Composer method (Recommend)
Install module via composer is never easier.

**Install**:

```
composer require delgraf/magento2-provinceitaliane
php bin/magento cache:clean
php bin/magento cache:flush

```

**Update**:

```
composer require delgraf/magento2-provinceitaliane
php bin/magento indexer:reindex
php bin/magento cache:clean
php bin/magento cache:flush

```

#### Authentication required (Optional)

![Authentication required]

If you have not added this authentication, you can follow [this guide](http://devdocs.magento.com/guides/v2.0/install-gde/prereq/connect-auth.html)

## How to active

Once installed, the module will configure automatically.

## Supported Magento versions

- Magento ver. 2.3.5-p1
