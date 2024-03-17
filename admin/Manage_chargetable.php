<?php 

require "connect.php";

$sql="SELECT * FROM chargetable";

$result= mysqli_query($conn,$sql);
if(isset($_REQUEST['Chargeid_remove']))
{
 $delete_sql="DELETE from chargetable where Chargeid =' ".$_REQUEST['Chargeid_remove']."'";
 $del_result=mysqli_query($conn,$delete_sql);
 if($del_result)
 {
 	echo"<script> alert('record deleted');window.location='Manage_chargetable.php';</script>";
 }
 else{
 	echo"<script> alert('record deleted failed !!');window.location='Manage_chargetable.php';</script>";
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
        <th>Chargeid</th>
        <th>Source</th>
          <th>Destination</th>
          <th>charge</th>
          <th>Remove</th>
         
                             
          </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
                        <tr>
                         
                
                <td>
                <?php echo $row['Chargeid']; ?>
                </td>
                <td>
                <?php echo $row['Source']; ?>
                </td>
                <td>
                <?php echo $row['Destination']; ?>
                </td>
                <td>
                <?php echo $row['charge']; ?>
                </td>
               <td align="center">
					        		<a href="Manage_chargetable.php?Chargeid_remove=<?php echo $row ['Chargeid']?>"><img src  = "icons8-delete-16.png" width="30%" height="50%">
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
