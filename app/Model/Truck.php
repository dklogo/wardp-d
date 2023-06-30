<?php
class Truck extends AppModel
{
    

    function getAllTrucks()
    {
        return $this->find('all',array(
            'recursive'=>-1
        ));
    }

}