<?php
class PersonaBean
{  public $CODPERSO;
   public $NOMBPERSO;
   public $APELLIPERSO;
   public function getCODPERSO() {
       return (string)$this->CODPERSO;
   }
   public function setCODPERSO($CODPERSO) {
       $this->CODPERSO = $CODPERSO;
   }
   public function getNOMBPERSO() {
       return $this->NOMBPERSO;
   }
   public function setNOMBPERSO($NOMBPERSO) {
       $this->NOMBPERSO = $NOMBPERSO;
   }
   public function getAPELLIPERSO() {
       return $this->APELLIPERSO;
   }
   public function setAPELLIPERSO($APELLIPERSO) {
       $this->APELLIPERSO = $APELLIPERSO;
   }
}
?>
