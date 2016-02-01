<?php

foreach ($res as $info){
    if($info->ReturnCodeDetails == 'Success'){
    echo "
      <p>IP: " .$info->IP."</p>
      <p>Country name: " .$info->CountryName."</p>
      <p>Country code: " .$info->CountryCode."</p>";
    }else{
        echo $info->ReturnCodeDetails;
    }
}
