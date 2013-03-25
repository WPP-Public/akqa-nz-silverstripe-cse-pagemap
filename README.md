# SilverStripe CSE PageMap

Provides ability to add Google CSE PageMap data to a SilverStripe template

# Installation (with composer)

```bash
$ composer require heyday/silverstripe-cse-pagemap:~0.1
```

# Usage

## Implement the provided interface

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
```

## Add the provided extension to the applicable class

`mysite/_config.php`

```php
Object::add_extension('MyPageType', 'CsePageMapExtension');
```

## Add the PageMap to the head of your html

`Page_Head.ss`

```html
<head>
<!--
$PageMap
-->
</head>
```

# Unit testing

```bash
silverstripe-cse-pagemap/ $ composer install --dev
silverstripe-cse-pagemap/ $ phpunit
```
