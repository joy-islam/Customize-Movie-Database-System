<?php
session_start();
if (!isset($_SESSION['name'])) {
header("Location: ./adminlogin.php");
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="./view_user.css">
     <title></title>
   </head>
   <body>

     <h1>View User Page</h1>
     <table class="motable" align="center">
       <thead>
         <tr>
           <th>User_ID</th>
           <th>Name</th>
           <th>Password</th>
           <th>E-Mail</th>
           <th>Phone_Number</th>
           <th>Transction_ID</th>
           <th></th>
           <th></th>
         </tr>
       </thead>
      <?php
        include("connect.php");
        $view_users="select * from user";
        $view_query = mysqli_query($conn, $view_users);
        while ($rows=mysqli_fetch_array($view_query)) {
          $user_id = $rows[0];
          $user_Name = $rows[1];
          $user_password = $rows[2];
          $user_email = $rows[3];
          $user_pnum = $rows[4];
          $user_tid = $rows[5];
          ?>
          <tbody>

          <tr>
            <td><?php echo $user_id  ?></td>
            <td><?php echo $user_Name ?></td>
            <td><?php echo $user_password ?></td>
            <td><?php echo $user_email ?></td>
            <td><?php echo $user_pnum ?></td>
            <td><?php echo $user_tid ?></td>
            <td> <a href="./edit.php?id=<?php echo $user_id  ?>"> <button >Edit</button> </a> </td>
            <td> <a href="./delete.php?id=<?php echo $user_id  ?>"> <button onclick="return confirm('Are you sure?')"> Delete </button> </a> </td>

          </tr>

        </tbody>
          <?php
        }
       ?>
     </table>

   </body>
 </html>
