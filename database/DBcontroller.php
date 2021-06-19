<?php
class DBcontroller{
    protected $host ='localhost';
    protected $user ='root';
    protected $password ='';
    protected $database ='shopping';
    public $con= null;
 
    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "fail".$this->con->connect_error;
        }
        echo " connection successful"
    };
}
 
$db = new DBcontroller();


?>