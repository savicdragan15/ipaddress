<?php

$this->set('ipaddress', 'ipaddress');

function ipaddress(){
    $obj =& get_instance();
    echo $obj->load->view('ipaddress_block', true);
}

