<?php
/**
 * Template Name: Digital Marketing Agency
 */
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<script async src="//44625.tctm.co/t.js"></script>
<!-- Global site tag (gtag.js) - Google Ads: 778286214 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-778286214"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-778286214');
</script>
<script>

    function getParameterByName(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
      var results = regex.exec(location.search);
      return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    $preview = getParameterByName("preview");
    if( $preview == "" ){
      // do nothing
    } else if( $preview == "control" ){
      document.cookie = "lander-ab-tests-25790262=lander_control";
    } else{
      document.cookie = "lander-ab-tests-25790262=lander_" + $preview;
    }

  </script>
<link rel="stylesheet" media="screen" href="https://www.clickfunnels.com/assets/lander.css" />
<script type="text/javascript" src="https://static.clickfunnels.com/clickfunnels/landers/tmp/vwrz462c19ladw2r.js" charset="UTF-8"></script>
<style>
    #IntercomDefaultWidget{
      display: none;
    }
    #Intercom{
      display:none;
    }
  </style>
<meta name="nodo-proxy" content="html" />
</head>
<body>
</body>
</html>
