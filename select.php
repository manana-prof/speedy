<?php

//fetching data in descending order (latest entry first)

$result = mysqli_query($cser, "SELECT * FROM crud2 ORDER BY id DESC"); // using mysqli_query instead
?>
    <table width='30%' border=0>
        
            <td>Product Name</td>
            <td>Product Code </td>
            <td>Product Price </td>
            
        </tr>
        <?php 
     
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['pname']."</td>";
            echo "<td>".$res['pcode']."</td>";
            echo "<td>".$res['pprice']."</td>";    
                    
        }
        ?>
    </table>