
  
  <html>
  <head>
  <script type="text/javascript">
  function showUser(str)
  {
  if (str=="")
    {
    document.getElementById("txtHint").innerHTML="";
    return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
      }
    }
  xmlhttp.open("GET","getuser1.php?q="+str,true);
  xmlhttp.send();
  }
  </script>
  </head>
  <body>
   
  <form>
  <select name="users" onchange="showUser(this.value)">
  <option value="">Sélectionner un modele:</option>
  <option value="toyota">toyota</option>
  <option value="audi">audi</option>
  <option value="bmw">bmw </option>
  <option value="mercedez">mercedez</option>
  </select>
  </form>
  <br />
  <div><b>Tableau résultats trouvés :</b><br /><br />
  <span id="txtHint"></span>
  </div>
   
  </body> 
</html>
