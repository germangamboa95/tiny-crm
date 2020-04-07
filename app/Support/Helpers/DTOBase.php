<?php

namespace Support\Helpers;

abstract class DTOBase
{

    public static function fromArray(array $arr)
    {
        $callingClass =  get_called_class();

        $instance = new $callingClass;

        $instance->mapToValues($arr);

        return $instance;
    }

    protected function mapToValues($arr): void
    {
        $props =  $this->getProps();

        foreach ($props as $key => $prop) {
            $this->$key = $arr[$key];
        }
    }

    protected function getProps(): array
    {
        return get_class_vars(get_class($this));
    }
}
