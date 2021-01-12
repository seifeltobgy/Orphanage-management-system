
			<?php
            include 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
                //$query = "SELECT * FROM donation_items ORDER BY id ASC";
                $result = mysqli_query($conn,"SELECT * FROM donation_items ORDER BY Item_id ASC");
                echo "<table border=6 ;align=center ;style=width:70% ; cellpadding =3 ;cellspacing=3>
                <tr>
                <th>Donation type</th>
                  <th>Amount</th>
                  <th>   </th> " ;
                while($row = mysqli_fetch_array($result))
                {

                    ?>
                    <?php 
               echo " <tr bgcolor=white > 
               <td>   $row[Item_id] $row[Item_Name] </td>
                 <td> <h> <input type= number name=type-id id=type-id pattern= > </h> </td>
                 <td><h><a href='UseDonatecon.php?rn=$row[Item_id]'> Donate</h> </td>
               </tr>
               ";
                    ?>
        
              
                    <?php
                
                }
                echo "</table>";
                ?>


