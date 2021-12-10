<?php
require_once(__DIR__.'/../settings/connection.php');

class Criminal extends Connection{

    function select_criminals(){
        return $this->fetch("SELECT * FROM `criminals`");
    }

    function select_criminal($s){
        return $this->fetchOne("SELECT * FROM `criminals` WHERE `nationalid`='$s'");
    }

    function select_criminal_by_id($id){
        return $this->fetchOne("SELECT * FROM `criminals` WHERE id='$id'");
    }

    function insert_criminal($sname, $fname, $oname, $dob, $nationalid, $crime, $doc){
        return $this->query("INSERT INTO `criminals`(`surname`, `firstname`, `othernames`, `dob`, `nationalid`, `crime`, `doc`) VALUES ('$sname','$fname','$oname','$dob','$nationalid','$crime','$doc')");
    }

    function edit_criminal($id,$sname,$fname,$oname,$dob,$nationalid,$crime,$doc){
        return $this->query("UPDATE `criminals` SET `surname`='$sname',`firstname`='$fname',`othernames`='$oname',`dob`='$dob',`nationalid`='$nationalid',`crime`='$crime',`doc`='$doc' WHERE id='$id'");
    }

    function delete_criminal($id){
        return $this->query("DELETE FROM `criminals` WHERE id='$id'");
    }
}
?>