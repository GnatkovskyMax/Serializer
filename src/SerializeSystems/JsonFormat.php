<?php


namespace Systems;


class JsonFormat implements SerializeSystemInterface
{
    public $data;
    public $SerializedData;

public function Serializing()
{
 echo 'Data serialized in Json format: <br>';
    echo '<br>';
 echo $this->SerializedData= json_encode($this->data);
 echo '<br>';

}
public function UnSerializing()
{   echo '<br>';
    echo 'Inputed Data:<br>';
    echo '<br>';
    $decodedData=json_decode($this->SerializedData);
    foreach($decodedData as $key=>$value):
        echo $key.' : '.$value.'<br>';
    endforeach;
    echo '<br>';
}
}