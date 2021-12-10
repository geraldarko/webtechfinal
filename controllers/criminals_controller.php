<?php
require_once(__DIR__."/../classes/criminals_class.php");

function select_criminals(){
    $criminal_instance = new Criminal();
    return $criminal_instance->select_criminals();
}

function select_criminal($s){
    $criminal_instance = new Criminal();
    return $criminal_instance->select_criminal($s);
}

function select_criminal_by_id($id){
    $criminal_instance = new Criminal();
    return $criminal_instance->select_criminal_by_id($id);
}

function insert_criminal($sname, $fname, $oname, $dob, $nationalid, $crime, $doc){
    $criminal_instance = new Criminal();
    return $criminal_instance->insert_criminal($sname, $fname, $oname, $dob, $nationalid, $crime, $doc);
}

function edit_criminal($id,$sname,$fname,$oname,$dob,$nationalid,$crime,$doc){
    $criminal_instance = new Criminal();
    return $criminal_instance->edit_criminal($id, $sname, $fname, $oname, $dob, $nationalid, $crime, $doc);
}

function delete_criminal($id){
    $criminal_instance = new Criminal();
    return $criminal_instance->delete_criminal($id);
}


?>