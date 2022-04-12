<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      const xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST","userdata.php");
      xmlhttp.send();
      xmlhttp.onload = function(){
        const myobj = JSON.parse(this.responseText);
        console.log(myobj);
      }
    </script>
  </body>
</html>
