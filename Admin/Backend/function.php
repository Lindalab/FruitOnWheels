<?php

require ("dbconnection.php");

function Insert($sqlInsert){
  require ("dbconnection.php");
  $insertResuilt=$conn->query($sqlInsert);
  if($insertResuilt === True){
      echo "<script>
              alert('Product upload sucessful');
          </script>";
  }
  else{
      echo "Unsuccessfull";
  }
}

function ItemTable($prdtname,$prdtprice,$prdtquantity,$prdtdescription){
  echo "
  <tbody>
      <tr>
          <th scope='row'>$prdtname</th>
          <td>$prdtprice</td>
          <td>$prdtquantity</td>
          <td>$prdtdescription</td>
          <td>
              <form action='Registrationpage.php'>
                  <input type = 'hidden' value = '$prdtname' name = 'name'>
                  <input type='submit' name= 'Available' class='btn btn-success' value = ' Available'>
              </form>
          </td>
          <td>
              <form action='Registrationpage.php'>
                  <input type = 'hidden' value = '$prdtname' name = 'tv_name' >
                  <input type='submit' name= 'Remove Product' class='btn btn-danger' value= 'Remove Product'>
              </form>
          </td>
      </tr>
  </tbody>";
}



?>