<?php
error_reporting(0);
include 'include/cls.php';
class dbase
{
	    public function get_category_List(){
		include "include/conn.php";
		$c=new cls_category();
		$sql="SELECT * FROM `tbl_category`";
		$sr=1;
		$result=$conn->query($sql);
		if ($result) {
			echo "<table class=\"table table-hover table-bordered\" id=\"sampleTable\">
		<thead>
			<tr>
				<th>SR No</th>
				<th>Category Name</th>
				<th>Category Icon</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>";
		while (($list = $result->fetch_assoc()) !== null)
			{
				echo"<tr>
				<td>".$sr++."</td>
				<td>".$list['category_name']."</td>
				<td><img src=\"caticon/$list[category_icon]\" style='width:100px;height:100px'></td>
				<td>
				  <div class=\"btn-group\">
					<a class=\"btn btn-primary\" href=\"category.php?id=".$list['id']."\">
					  <i class=\"fa fa-edit fa-4x\"></i>
					</a>
					<a class=\"btn btn-primary\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View\">
					  <i class=\"fa fa-lg fa-eye\"></i>
					</a>
					<a class=\"btn btn-primary\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Delete\">
					  <i class=\"fa fa-lg fa-trash\"></i>
					</a>
				  </div>
				</td>
				";
				
			}
			echo "</tbody>
        </table>";
		}
	}
}
?>