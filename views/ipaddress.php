<?php

foreach ($res as $info){
    if($info->ReturnCodeDetails == 'Success' && !empty($info)){
    echo "
      <p>IP: " .$info->IP."</p>
      <p>Country name: " .$info->CountryName."</p>
      <p>Country code: " .$info->CountryCode."</p>";
    }else{
        echo $info->ReturnCodeDetails;
    }
}
