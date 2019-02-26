    <?php 

    require_once __DIR__."/../vendor/autoload.php";
     //var_dump( __DIR__."/../vendor/autoload.php");
    //require_once __DIR__."/../src/classes/SerializeService.php";
     $person = new App\Person();
    $r= new Service\SerializeService('xml',$person);
    //$serialize= new Systems\JsonFormat();
    //var_dump($serialize->Serializing());