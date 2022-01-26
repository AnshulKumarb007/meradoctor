<style>

    table tr td {

        padding:5px;

    }

    table tr th {

        padding:5px;

    }

</style>



 

<?php



function send_mail($category_mail,cls_booking $b,cls_doctor $d)
{

if($category_mail==1){
    $category="Doctor";
}else if($category_mail==2){
    $category="Pathology Center Name";
}else if($category_mail==3){
    $category="Health Center Name";

}else if($category_mail==4){
    $category="Online Consultant Name";

}

$to = "meradoctor1@gmail.com";
//$to = "sk.sarvesh@gmail.com";
$subject = "Booking Mail";
$message = "

<html>
<head>
<title>Mera Doctor Mail</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
</head>
<body>
<table border='1' class='table table-bordered'>
<tr>
<td colspan='2'>
<div style='font-size:50px;color:blue'> <b>
Welcome ,Mera Doctor</b></div>
<hr/>
Gopalganj,Bihar,841428
</td>

</tr>
<tr>

<th colspan='2' class='bg-primary text-white'>Patient Details:</th>
</tr>
<tr>
<th style='text-align:left'>$category</th>
<td></td>
</tr>
<tr>
<th style='text-align:left'> Name</th>
<td>".$b->name."</td>
</tr><tr>
<th style='text-align:left'>Guardian Name</th>
<td>".$b->gname."</td>
</tr><tr>
<th style='text-align:left'> Mobile Number</th>
<td>".$b->mobile."</td>
</tr><tr>
<th style='text-align:left'> Other Mobile Number</th>
<td>".$b->othermobile."</td>
</tr><tr>
<th style='text-align:left'> Age</th>
<td>".$b->age."</td>
</tr><tr>
<th style='text-align:left'> Date</th>
<td>".$b->dob."</td>
</tr>
<tr>
<th style='text-align:left'> Time</th>
<td>".$b->btime."</td>
</tr>
<tr>
<th style='text-align:left'> illness Details</th>
<td>".$b->details ."</td>
</tr>
<tr>
<th style='text-align:left'> Address</th>
<td>".$b->address."</td>
</tr>
<tr>
<th colspan='2' style='background-color:Blue;color:white'>Doctor Details:</th>
</tr>
<tr>
<th style='text-align:left'> Doctor Name:</th>
<td>".$d->dname."</td>
</tr>
<tr>
<th style='text-align:left'> Doctor Category:</th>
<td>".$d->dcategory."</td>
</tr>
<tr>
<th style='text-align:left'> Staff No:</th>
<td>".$d->staffmobile."</td>
</tr>
<tr>
<th style='text-align:left'> Doctor Mobile No:</th>
<td>".$d->mobile."</td>
</tr>
<tr>
<th style='text-align:left'> Doctor Address:</th>
<td>".$d->address."</td>
</tr>
<tr>
<th colspan='2' style='background-color:Blue;color:white'>Take Care,Safe Drive:</th>
</tr>
</table>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <Web@meradoctor>' . "\r\n";
$sendMail=mail($to,$subject,$message,$headers);

if($sendMail){
    echo "<script>document.location=' ../../../index.php?msg=successfully send'</script>";
    }





}

?>