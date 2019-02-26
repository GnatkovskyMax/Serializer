<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.02.2019
 * Time: 16:25
 */

namespace Systems;


class XmlFormat implements SerializeSystemInterface
{
    public $data;
    public $xml;
    public $SerializedData;
public function SerializingXml($data, $xml )
{
    /////////////////This part is developing
    foreach ($data as $key => $value) {
    if (is_array($value)) {
       if (is_int($key)) {
           $key = "e";
       }
       $label = $xml->addChild($key);
        $this->SerializingXml($value, $label);
    } else {
       $xml->addChild($key, $value);
       }
   }
}
    public function Serializing()
    {

    }
public function UnSerializing()

{

    return (array)$this->xml;


}

}