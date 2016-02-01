<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<form action="ipaddress" method="post" name="ipaddress" id="ip"> 
    <input type="text" placeholder="ipaddress" name="ipaddress" id="ipaddress">
    <input type="submit" name="btn_ipaddress" value="search">
</form>

<script> 
   $('#ip').submit(function(e){
       e.preventDefault();
      if($('#ipaddress').val() === ''){
          alert('Upisite ip adresu!');
      }else{
          $(this).submit();
      } 
   });
</script>