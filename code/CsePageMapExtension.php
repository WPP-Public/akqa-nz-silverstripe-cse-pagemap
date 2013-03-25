<?php

class CsePageMapExtension extends Extension
{
    protected $pageMapService;

    public function PageMap()
    {
        return $this->getPageMapService()->getPageMap($this->owner);
    }

    protected function getPageMapService()
    {
        if (null == $this->pageMapService) {
            $this->pageMapService = new CsePageMap;
        }

        return $this->pageMapService;
    }
}
