<?php

namespace JPO\Models;

/**
 * Class RemoveJsonPatchOperation
 */
class RemoveJsonPatchOperation extends JsonPatchOperation
{
    /**
     * RemoveJsonPatchOperation constructor.
     * @param string $path
     */
    public function __construct($path = "/")
    {
        $this->op = "remove";
        $this->path = $path;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'op' => $this->getOp(),
            'path' => $this->getPath()
        ];
    }
}