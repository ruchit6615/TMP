<?php 

require "connect.php";

$sql="SELECT * FROM admintable";

$result= mysqli_query($conn,$sql);
if(isset($_REQUEST['Aid_remove']))
{
 $delete_sql="DELETE from admintable where Aid =' ".$_REQUEST['Aid_remove']."'";
 $del_result=mysqli_query($conn,$delete_sql);
 if($del_result)
 {
 	echo"<script> alert('record deleted');window.location='Manage_adminTable.php';</script>";
 }
 else{
 	echo"<script> alert('record deleted failed !!');window.location='Manage_adminTable.php';</script>";
 }
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
        <body>
        <table class="table table-hover" id="dev-table">

<thead>
                        <tr bgcolor=#66FFCC>
        <th>Admin ID</th>
        <th>Admin name</th>
          <th>Admin contact </th>
          <th>Admin email</th>
          <th>Remove</th>
         
                             
          </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
                        <tr>
                         
                
                <td>
                <?php echo $row['Aid']; ?>
                </td>
                <td>
                <?php echo $row['Aname']; ?>
                </td>
                <td>
                <?php echo $row['Acontact']; ?>
                </td>
                <td>
                <?php echo $row['Aemail']; ?>
                </td>
               <td align="center">
					        		<a href="Manage_adminTable.php?Aid_remove=<?php echo $row ['Aid']?>"><img src  = "icons8-delete-16.png" width="30%" height="50%">
						</img></a>
						</td>
                
            
               
                </td>

            </tr>
        <?php
                        }
            ?>
				
				</tbody>
			</table>
         
</body>
 </html>
