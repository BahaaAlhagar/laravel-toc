<?php

namespace Balhagar\LaravelToc;

use Balhagar\LaravelToc\Helpers\ContentHandler;

class Toc
{
    protected $app;
    protected $contentHandler;

    public function __construct($app)
    {
        $this->app = $app;
        $this->contentHandler = new ContentHandler($app);
    }

    public function generateContents($content)
    {
    }

    public function getHeadingsArray($content)
    {
    }
    
    public function setTags(array $tags)
    {
        $this->contentHandler->setTags($tags);

        return $this;
    }

    public function setMinLength(int $length)
    {
        $this->contentHandler->setMinLength($length);

        return $this;
    }
}
