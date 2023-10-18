<?php

namespace Directee\Interfaces\Data;


trait HasPlainAttributes
{
    public function getAttribute($name)
    {
        return $this->$name;
    }

    public function setAttribute(string $name, $value): void
    {
        if (\property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function asArray(): array
    {
        $result = [];
        foreach(get_object_vars($this) as $nm => $vl) {
            if ($vl instanceof Arrayable) {
                $result[$nm] = $vl->asArray();
            } else {
                $result[$nm] = $vl;
            }
        }
        return $result;
    }

    public static function fromArray(array $array): static
    {
        $item = new self();
        $item->fillFromArray($array);
        return $item;
    }

    private function fillFromArray(array $data): void
    {
        foreach($data as $nm => $vl) {
            if (\in_array($nm,['type'])) {
                continue;
            }
            if (\property_exists($this, $nm)) {
                $this->$nm = $vl;
            }
        }
    }
}
