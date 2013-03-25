# SilverStripe CSE PageMap

Provides ability to add Google CSE PageMap data to a SilverStripe template

# Installation (with composer)

```bash
$ composer require heyday/silverstripe-cse-pagemap:~0.1
```

# Usage

```php

class MyPageType extends Page implements CsePageMapInterface
{
    public function getPageMap()
    {
        return array(
            'page' => array(
                'type' => get_class($this)
            )
        );
    }
}

# Unit testing

```bash
silverstripe-cse-pagemap/ $ composer install --dev
silverstripe-cse-pagemap/ $ phpunit
```
