<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

class Ipaddress extends Controller {
    function __construct() {
       parent::Controller();
        $this->template['module'] = 'ipaddress';
        $this->template['admin']  =  false;
    }
    
    function index(){
        $ip = $this->input->post('ipaddress', true);
        trim($ip);
       if (!filter_var($ip, FILTER_VALIDATE_IP) === false){
        $c = new SoapClient('http://www.webservicex.net/geoipservice.asmx?WSDL');
        $data = $c->GetGeoIP(array('IPAddress'=>$ip));
        $this->template['res'] = $data;
        $this->layout->load($this->template,'ipaddress');
       }else{
            $this->layout->load($this->template,'invalid_ip');
       }
       
    }
    
}