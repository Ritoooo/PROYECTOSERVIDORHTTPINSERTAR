<?php
class ConexionBD 
{    const SERVER = "localhost";                                  
     const USER = "root";
     const PASS = "";
     const DATABASE = "BDTAREASSEGUNDOPLANO";
     private $cn = null;
     public function getConexionBD()
     {   try
         {
            $this->cn = new mysqli(self::SERVER, self::USER, self::PASS, self::DATABASE);
          }catch(Exception $e)
          {
          }
        return $this->cn;
    }      
}
?>