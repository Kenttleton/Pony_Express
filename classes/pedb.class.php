//create a class to handle inputs to the DB and scrub the text
<?php

class pedb{

    private function connect(){
        global $pedb = mysql_connect();
        if(!$pedb){
            die('Could not connect: '. mysql_error());
        }
    }

    private function scrubadub($query){
        //scrub the query here

        //return a cleaned query
        return;
    }

    public function query($query){
     $res = $this->scrubabub($query);
     $this->connect();
     $retval = mysql_query($res);
     if(!$retval){
         die('Could not complete query: ' . mysql_error());
     }
     mysql_close($pedb);
    }
}