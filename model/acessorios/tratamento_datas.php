<?php

//função para converted data vinda do GITHUB para o formato yyyy-mm-dd hh:mm:ss
function date_to_datetime_mysql($data){
    $data_nova = date("Y-m-d H:m:s", strtotime($data));
    return $data_nova;
}

//função para converted data vinda do GITHUB para o formato dd-mm-yyyy hh:mm:ss
function date_US_to_PTBR($data){
    $data_nova = date("d-m-Y H:m:s", strtotime($data));
    return $data_nova;
}
