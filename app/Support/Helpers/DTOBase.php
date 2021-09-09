<?php

namespace Support\Helpers;

use Illuminate\Contracts\Support\Arrayable;

abstract class DTOBase implements Arrayable
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

    public function toArray(): array
    {
        $props =  $this->getProps();
        $arr = [];
        foreach ($props as $key => $prop) {
            $arr[$key] = $this->$key;
        }

        return $arr;
    }
}
