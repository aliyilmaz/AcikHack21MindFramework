<?php

class Test2Controller extends Mind
{

    public function __construct($conf = array())
    {
        parent::__construct($conf);
    }

    public function listele()
    {
        //
        echo '<h4>Selamlar ben app/controller/rotalar/Test2Controller.php içindeki listele()</h4>';
    }

    public function ekle()
    {
        //
        echo '<h4>Selamlar ben app/controller/rotalar/Test2Controller.php içindeki ekle()</h4>';
        $this->print_pre($this->post);

    }

}