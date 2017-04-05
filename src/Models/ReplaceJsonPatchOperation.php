<?php

namespace JPO\Models;

/**
 * Class ReplaceJsonPatchOperation
 */
class ReplaceJsonPatchOperation extends JsonPatchOperation
{
    private $value;

    /**
     * AddJsonPatchOperation constructor.
     * @param $value
     * @param $path
     */
    public function __construct($value, $path = "/")
    {
        $this->op = "replace";
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