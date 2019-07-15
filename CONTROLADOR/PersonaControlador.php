
<?php
require_once "../DAO/PersonaDAO.php";
require_once '../BEAN/PersonaBean.php';
$codigo = $_REQUEST['TXTCODIGO'];        
$nombre = $_REQUEST['TXTNOMBRE']; 
$apellido = $_REQUEST['TXTAPELLIDO']; 
        $objpersobean=new PersonaBean();
        $objpersobean->setCODPERSO($codigo);
        $objpersobean->setNOMBPERSO($nombre);
        $objpersobean->setAPELLIPERSO($apellido);
        $objeto=new PersonaDAO();
        $LISTA=$objeto->InsertarPersonas($objpersobean ); 
         header('Content-type: application/json');
        echo json_encode($LISTA)  ;
    
?>


