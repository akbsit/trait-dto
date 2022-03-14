# trait-dto, [Packagist](https://packagist.org/packages/falbar/trait-dto)

## Установка

Для установки пакета нужно:

```bash
composer require falbar/trait-dto
```

## Пример использования

Создаем класс DTO с подключенным трейтом `DtoTrait`:

```php
<?php namespace App\Classes;

use Falbar\TraitDto\DtoTrait;

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

Создаем объект:

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
