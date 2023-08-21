<?php

namespace Pasha\Mvcproject\Collections;

class Collection
{
    protected $items = [];

    public function get($key, $default = null)
    {
        if (array_key_exists($key, $this->items))
        {
            return $this->items[$key];
        }
        return $default;
    }

    public function all()
    {
        return $this->items;
    }
}
