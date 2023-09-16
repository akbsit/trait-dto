<?php namespace Akbsit\TraitDto;

use Akbsit\TraitSingleton\SingletonTrait;
use DusanKasan\Knapsack\Collection;

/**
 * Class DtoTrait
 * @package Akbsit\TraitDto
 */
trait DtoTrait
{
    use SingletonTrait;

    /**
     * @param array $arParameters
     *
     * @return $this|null
     */
    public function create(array $arParameters = []): ?self
    {
        $oParameterList = Collection::from($arParameters);
        if ($oParameterList->isEmpty()) {
            return null;
        }

        foreach ($oParameterList->toArray() as $sName => $value) {
            $this->{$sName} = $value;
        }

        return $this;
    }
}
