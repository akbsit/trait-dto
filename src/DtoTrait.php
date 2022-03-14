<?php namespace Falbar\TraitDto;

use Falbar\TraitSingleton\SingletonTrait;
use DusanKasan\Knapsack\Collection;

/**
 * Class DtoTrait
 * @package Falbar\TraitDto
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
