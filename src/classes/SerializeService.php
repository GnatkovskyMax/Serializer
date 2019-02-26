<?php
namespace Service;
use Systems;
class SerializeService
{
public function __construct($format, $data)
{

    switch ($format) {
        case 'xml':
            //This part is developing
            $serialize = new Systems\XmlFormat();
            $serialize->data = (array)$data;
            $serialize->xml = new \SimpleXMLElement('<root/>');
            $serialize->SerializingXml($serialize->data,$serialize->xml);
            echo 'Data serialized in Xml format: <br>';
            echo '<br>';
            var_dump($serialize->xml);
            echo '<br>';
            echo '<br>';
            echo 'Result of nserializing function:';
            echo '<br>';
            echo '<br>';
            var_dump($serialize->UnSerializing());
            break;
        case 'json':
        $serialize= new Systems\JsonFormat();
        $serialize->data = $data;
        $serialize->Serializing() ;
        $serialize->UnSerializing();
            break;
        case 'yaml':
            $serialize= new Systems\YamlFormat();
            $serialize->data= $data;
            $serialize->Serializing();
            $serialize->UnSerializing();
            break;
        default:
            echo 'Not';
    }
}
}