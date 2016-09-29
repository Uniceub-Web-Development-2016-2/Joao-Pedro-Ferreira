
<?php
class DBConnector extends PDO {
   
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    private $connector;	
   
    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'bd_combustivel';
        $this->user = 'root';
        $this->pass = '';
        $dns = $this->engine.':host='.$this->host;'dbname='.$this->database;
        parent::__construct( $dns, $this->user, $this->pass );
    }	
		
}
