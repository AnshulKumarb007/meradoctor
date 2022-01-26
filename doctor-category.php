
<?php
include "header.php";?>
<div class="container">
    <br/>
  <div class="row">
<?php
 $all_files = glob("doccat/*.*");
  for ($i=0; $i<count($all_files); $i++)
    {
      $image_name = $all_files[$i];
      $supported_format = array('gif','jpg','jpeg','png');
      $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_format))
          {
            echo '<div class="col-sm-4"><img class="img-fluid" src="'.$image_name .'" alt="'.$image_name.'" />'."</div>";
          } else {
              continue;
          }
    }
include "footer.php";
?>
</div>
</div>