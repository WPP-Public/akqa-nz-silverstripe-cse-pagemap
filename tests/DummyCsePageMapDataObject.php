<?php

class DummyCsePageMapDataObject extends DataObject implements CsePageMapInterface
{
    public function getPageMap()
    {
        return array(
            'page' => array(
                'type' => get_class($this)
            )
        );
    }
}
