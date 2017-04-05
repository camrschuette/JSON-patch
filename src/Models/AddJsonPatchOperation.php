<?php

namespace JPO\Models;

/**
 * Class AddJsonPatchOperation
 */
class AddJsonPatchOperation extends JsonPatchOperation
{
    private $value;

    /**
     * AddJsonPatchOperation constructor.
     * @param $value
     * @param $path
     */
    public function __construct($value, $path = "/")
    {
        $this->op = "add";
        $this->path = $path;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'op' => $this->getOp(),
            'path' => $this->getPath(),
            'value' => $this->getValue()
        ];
    }
}