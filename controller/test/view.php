<?php
/**
 * Created by PhpStorm.
 * User: TuanTran
 * Date: 2/13/2019
 * Time: 3:42 PM
 */
class Customer{
    public $dns;
    public $username;
    public $password;
    function __construct($dns, $username, $password)
    {
        $this->dns = $dns;
        $this->username;
        $this->password;
    }
    function connect(){
        $conn = new PDO($this->dns, $this->username, $this->password);
        return $conn;
    }
}
