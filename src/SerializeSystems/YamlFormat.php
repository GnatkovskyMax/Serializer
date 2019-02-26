<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.02.2019
 * Time: 16:24
 */
namespace Systems;
use Symfony\Component\Yaml\Yaml;

class YamlFormat implements SerializeSystemInterface
{
    public $data;
    public $SerializedData;

    public function Serializing()
    {
        echo 'Data serialized in Yaml format: <br>';
        echo '<br>';

       var_dump($this->SerializedData= Yaml::dump((array)$this->data));

        echo '<br>';

    }
    public function UnSerializing()
    {   echo '<br>';
        echo 'Inputed Data:<br>';
        echo '<br>';
        $decodedData= Yaml::parse($this->SerializedData);
        var_dump($decodedData);
        echo '<br>';
        echo '<br>';
        foreach($decodedData as $key=>$value):
            echo $key.' : '.$value.'<br>';
        endforeach;
        echo '<br>';
    }
}