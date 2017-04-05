<?php

namespace JPO\Models;

use JPO\Exceptions\InvalidJsonPatchOperation;

/**
 * Class MoveJsonPatchOperation
 */
class MoveJsonPatchOperation extends JsonPatchOperation
{
    private $from;

    /**
     * MoveJsonPatchOperation constructor.
     * @param string $from The "from" location MUST NOT be a proper prefix of the "path"
     * @param string $path
     * @throws InvalidJsonPatchOperation
     */
    public function __construct($from, $path = "/")
    {
        if (strpos($path, $from) === 0) {
            throw new InvalidJsonPatchOperation("The \"from\" location MUST NOT be a proper prefix of the \"path\"");
        }

        $this->op = "move";
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