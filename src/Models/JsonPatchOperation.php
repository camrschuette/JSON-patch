<?php

namespace JPO\Models;

/**
 * Class JsonPatchOperation
 */
abstract class JsonPatchOperation implements \JsonSerializable
{
    protected $op;
    protected $path;

    /**
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}