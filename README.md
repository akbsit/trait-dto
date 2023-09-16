# trait-dto, [Packagist](https://packagist.org/packages/akbsit/trait-dto)

## Install

To install package, you need run command:

```bash
composer require akbsit/trait-dto
```

## Example

Create DTO class with trait `DtoTrait`:

```php
<?php namespace App\Classes;

use Akbsit\TraitDto\DtoTrait;

/**
 * Class ExampleDto
 * @package App\Classes
 */
class ExampleDto
{
    use DtoTrait;

    /* @var int */
    public $iIntProperty;

    /* @var string */
    public $sStringProperty;

    /* @var array */
    public $arArrayProperty;
}
```

Create object:

```php
$oExampleDto = ExampleDto::instance()->create([
    'iIntProperty'    => 10,
    'sStringProperty' => 'string',
    'arArrayProperty' => [
        'key1' => 'value1',
        'key2' => 'value2',
    ],
]);
```

```text
object(App\Classes\ExampleDto)#208 (3) {
  ["iIntProperty"]=>
  int(10)
  ["sStringProperty"]=>
  string(6) "string"
  ["arArrayProperty"]=>
  array(2) {
    ["key1"]=>
    string(6) "value1"
    ["key2"]=>
    string(6) "value2"
  }
}
```
