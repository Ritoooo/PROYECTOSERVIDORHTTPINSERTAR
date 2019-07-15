<?php
require_once "../CONEXION/ConexionBD.php";
require_once '../BEAN/PersonaBean.php';
class    PersonaDAO
{    
  public static   function   ListarPersonas( )
   {  try {
           $sql="select *  from persona ; ";
           $objc = new ConexionBD();
           $cn=$objc->getConexionBD();   
           $rs= $cn->query($sql);
           $LISTA['PERSONA']= array();
           $cursor=  mysqli_fetch_all($rs,MYSQLI_ASSOC);
           foreach ($cursor as $cur) {
              array_push($LISTA['PERSONA'], array('CODPERSO'=>$cur["CODPERSO"],'NOMBPERSO'=>$cur["NOMBPERSO"],'APELLIPERSO'=>$cur["APELLIPERSO"]));
           }      
       } catch (Exception $e) {                 
       }     
     return  $LISTA;       
   }  
   
   public  function InsertarPersonas(PersonaBean  $obj)
   {  try {
	   
			$cod = strval($obj->getCODPERSO());
			$nom = $obj->getNOMBPERSO();
			$ape = $obj->getAPELLIPERSO();
            $sql="INSERT INTO PERSONA(CODPERSO,NOMBPERSO,APELLIPERSO)VALUES('$cod','$nom','$ape');";
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD(); 
			if($cn->connect_error){
				die($cn->connect_error);
			}
			mysqli_query($cn,$sql);
            /*$prepared = $cn->prepare($sql);
            $result=$prepared->bind_param("sss",$cod,$nom,$ape);
            $result=$prepared->execute();   */ 
            $LISTA=  self::ListarPersonas( );
                 
       } catch (Exception $e)
       {                 
       }     
        return  $LISTA;       
       
   }
}
?>