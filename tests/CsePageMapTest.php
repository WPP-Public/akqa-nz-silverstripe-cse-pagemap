<?php

require_once __DIR__ . '/DummyCsePageMapDataObject.php';

class CsePageMapTest extends \PHPUnit_Framework_TestCase
{
    protected $csePageMapService;

    protected function setUp()
    {
        $this->csePageMapService = new CsePageMap();
    }
    public function testPageMapData()
    {
        $this->assertEquals(
            new ArrayData(
                array(
                    'DataObjects' => new DataObjectSet(
                        array(
                            new ArrayData(
                                array(
                                    'Type' => 'page',
                                    'Attributes' => new DataObjectSet(
                                        array(
                                            new ArrayData(
                                                array(
                                                    'Name' => 'type',
                                                    'Value' => 'DummyCsePageMapDataObject'
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            $this->csePageMapService->getPageMapData(new DummyCsePageMapDataObject)
        );
    }

    public function testPageMap()
    {
        $this->assertEquals(
            <<<XML
<PageMap>
<DataObject type="page">
    <Attribute name="type">DummyCsePageMapDataObject</Attribute>
</DataObject>
</PageMap>

XML
            ,
            $this->csePageMapService->getPageMap(new DummyCsePageMapDataObject)
        );
    }
}
