<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>Vega Editor</title>

    <link rel="stylesheet" type="text/css" href="app/editor.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="vendor/topojson.js"charset="utf-8"></script>
    <script src="vendor/d3.min.js" charset="utf-8"></script>
    <script src="vendor/d3.geo.projection.min.js" charset="utf-8"></script>
    <script src="vendor/d3.layout.cloud.js" charset="utf-8"></script>
    <script src="vendor/ace/ace.js" charset="utf-8"></script>
    <script src="vendor/vega.js" charset="utf-8"></script>
    <script src="vendor/vega-embed.js" charset="utf-8"></script>
    <script src="vendor/vega-lite.js" charset="utf-8"></script>
    <script src="vendor/json3-compactstringify.js" charset="utf-8"></script>
    <script>
      JSON3 = JSON3.noConflict();
    </script>
    <script src="app/vega-specs.js" charset="utf-8"></script>
    <script src="app/vl-specs.js" charset="utf-8"></script>
    <script src="app/editor.js" charset="utf-8"></script>
    <style> body { margin: 0px; overflow: hidden; } </style>
  </head>
  <body><?php
    $con=mysqli_connect("localhost","root","","q2a");
    // alter table qa_posts drop column vega
    $deleteQuery="delete FROM vega";
    mysqli_query($con,$deleteQuery);
    $questionDb=$_POST["redirect"];
      // $Globals['question_id']=Globals['questionDb'];
  $query="INSERT INTO `q2a`.`vega` (`question_id`) VALUES ({$questionDb});";
  mysqli_query($con,$query);
?>
    <script> ved.init('body', 'app/'); </script>

  </body>
</html>
