<?php
class Media
{
    public function __construct(public int $id, public string $type, public string $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }

    // Getters
    public function getMediaId()
    {
        return $this->id;
    }

    public function getMediaType()
    {
        return $this->type;
    }
    public function getMediaPath()
    {
        return $this->path;
    }
}
