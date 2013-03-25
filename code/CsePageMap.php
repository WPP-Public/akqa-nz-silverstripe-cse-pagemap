<?php

class CsePageMap
{
    public function getPageMap(CsePageMapInterface $object)
    {
        $data = $this->getPageMapData($object);
        if ($data instanceof ArrayData) {
            return $data->renderWith('PageMap');
        }
    }

    public function getPageMapData(CsePageMapInterface $object)
    {
        $pageMap = $object->getPageMap();
        $data = new ArrayData(
            array(
                'DataObjects' => $dataObjects = new DataObjectSet()
            )
        );
        foreach ($pageMap as $type => $attributes) {
            $data->DataObjects->push(
                $dataObject = new ArrayData(
                    array(
                        'Type' => $type,
                        'Attributes' => new DataObjectSet()
                    )
                )
            );
            foreach ($attributes as $name => $value) {
                $dataObject->Attributes->push(
                    new ArrayData(
                        array(
                            'Name' => $name,
                            'Value' => $value
                        )
                    )
                );
            }
        }

        return $data;
    }
}
