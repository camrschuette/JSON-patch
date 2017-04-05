<?php

namespace JPO\Models;

/**
 * Class CopyJsonPatchOperation
 */
class CopyJsonPatchOperation extends JsonPatchOperation
{
    private $from;

    /**
     * CopyJsonPatchOperation constructor.
     * @param string $from
     * @param string $path
     */
    public function __construct($from, $path = "/")
    {
        $this->op = "copy";
        $this->path = $path;
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'op' => $this->getOp(),
            'path' => $this->getPath(),
            'from' => $this->getPath()
        ];
    }
}