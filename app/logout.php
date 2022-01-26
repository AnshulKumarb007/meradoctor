<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header('location:index.php?msg=Logout Successfully');
exit;
?>


//select * from tbl_student as a left join tbl_subscribe as b on a.admno=b.admno INNER JOIN tbl_fee_name as c on c.id=b.feeid INNER JOIN tbl_feemaster as d on c.id=d.feeid LEFT JOIN tbl_payment as e on a.admno=e.student_id LEFT JOIN tbl_class as f on a.cclass=f.cid INNER JOIN tbl_session as g on a.session=g.id