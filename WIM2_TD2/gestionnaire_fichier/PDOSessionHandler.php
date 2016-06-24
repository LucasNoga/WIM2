<?php

class MySessionHandler implements SessionHandlerInterface{
    private $pdo;

   // global $host,$user,$pass,$db,$connect;//toutes les constantes de connexion

    public function open(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=sessionbd','root', 'root');
		return $pdo;
    }

    public function close(){
        unset($this->pdo);
    }

    public function read($sid){
        $resultats = $this->pdo->query("SELECT * FROM session WHERE id = '$sid' "); 
        var_dump($resultats);
        $resultats->setFetchMode(PDO::FETCH_ASSOC);
        var_dump($resultats);
        return $resultats;
    }

    public function write($id, $data){ 
    $data = mysql_real_escape_string($data,$this->connect);//si on veut stocker du code sql 
    $sql = "SELECT COUNT(id) AS total FROM ".session." WHERE id = '$sid' ";
    $query = mysql_query($sql,$this->connect) or exit(mysql_error());
    $return = mysql_fetch_array($query);
   
    if($return['total'] == 0){//si la session n'existe pas encore
        $sql = "INSERT INTO ".session."
        VALUES('$sid','$data','$expire')";//alors on la crée
    }
    else{
        $sql = "UPDATE ".session."
        SET sess_datas = '$data',
        sess_expire = '$expire' 
        WHERE sess_id = '$sid' ";//on la modifie   
    }  
    $query = mysql_query($sql,$this->connect) or exit(mysql_error());
    return $query;

    }

    public function destroy($sid){
        return $pdo->exec("DELETE FROM session WHERE id = '$sid'");
    }

    public function gc($maxlifetime){
        return true;
    }
}
?>