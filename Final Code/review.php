
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="./pviewmovie.css">
     <title>Movie Name</title>
   </head>
   <body>
     <h1>Review of
     <?php echo $_GET['name'] ?></h1>
     <table class="motable">
       <thead>
         <tr>
           <th>User_Email</th>
           <th>Movie Name</th>

           <th>Comment</th>
           <th>Time</th>
         </tr>
       </thead>
 <?php
 include("connect.php");
 $mname=$_GET['name'];
 $view_review="select * from review where Movie_name ='$mname'";
 $view_query = mysqli_query($conn, $view_review);
 while ($rows=mysqli_fetch_array($view_query)) {
   $user_email = $rows[1];
   $movie_name = $rows[2];
   $movie_comment = $rows[3];
   $time = $rows[4];
  ?>
  <tbody>
    <tr>
      <td><?php echo $user_email  ?></td>
      <td><?php echo $movie_name ?></td>
      <td><?php echo $movie_comment ?></td>
      <td><?php echo $time ?></td>

    </tr>
  </tbody>
 <?php } ?>
     </table>
     <center>
     <form action="insert_review.php?name=<?php echo $movie_name?>" method="post">
       <input type="text" name="comment" placeholder="comment">
       <input type="submit" name="review" value="review">
     </form>
   </center>
   </body>
 </html>
