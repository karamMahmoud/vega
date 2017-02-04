<div class="vega-editor">
  <div class="mod_spec module">
    <div class="mod_header">
      <div class="mod_ctrls">
        <select class="sel_vega_spec hide-vl"></select>
        <select class="sel_vega-lite_spec hide-vg"></select>
        <input type="button" class="btn_spec_format" value="Format"></input>
        <input type="button" class="btn_vg_parse hide-vl" value="Parse"></input>
        <input type="button" class="btn_vl_parse hide-vg" value="Parse"></input>
      </div>
      <div class="mod_title">
        <select class="sel_mode">
          <option value="vega-lite">Vega-lite</option>
          <option value="vega">Vega</option>
        </select>
      </div>
    </div>
    <div class="mod_body spec vl-spec hide-vg" spellcheck="false"></div>
    <div class="vg_pane mod_subheader hide-vg">
      <div class="mod_ctrls">
        <input type="button" class="btn_to_vega" value="Edit Vega spec"></input>
      </div>
      Vega compiled from Vega-Lite (read-only)
      <span class="click_toggle_vega" title="Expand/Collapse Vega editor"></span>
    </div>
    <div class="" style="max-width:400px" spellcheck="false"><?php
    	$con=mysqli_connect("localhost","root","","q2a");

    $selectQuery="SELECT question_id FROM vega WHERE 1";
    $questionDb=mysqli_query($con,$selectQuery);
    while ($row=mysqli_fetch_array($questionDb,MYSQL_ASSOC)) {
  // echo $row['test'];
  $questionDb_id=$row['question_id'];
}
    echo $questionDb_id;
    $query="SELECT test FROM qa_posts WHERE postid={$questionDb_id}";
$res=mysqli_query($con,$query);
if($res)
  echo "";
else
  echo "".mysql_error();
$path="";
while ($row=mysqli_fetch_array($res,MYSQL_ASSOC)) {
  // echo $row['test'];
  $path=$path.$row['test'];
}
// echo $path;
$myfile=fopen("../../Vaqua-master/".$path,"r");
$data=fread($myfile,filesize("../../Vaqua-master/".$path));
  echo $data;
fclose($myfile);
    ?></div>
  </div>
  <div class="mod_vis module">
    <div class="mod_header">
      <div class="mod_ctrls">
        Renderer <select class="sel_render"></select>
        <input type="button" class="btn_export" value="Export"></input>
      </div>
      <div class="mod_title">Visualization</div>
    </div>
    <div class="vis"></div>
    <div class="mod_params"></div>
    <div class="spec_desc"></p>
  </div>
</div>
