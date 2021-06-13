<?php

namespace Balhagar\LaravelToc;

class Toc
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function generateContents($content)
    {
    }

    public function getHeadingsArray($content)
    {
    }
    
    public function getFormatedHeadings($content)
    {
    }
}
