

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="./viewmovie.css">
     <title>Movie Name</title>
   </head>
   <body style= "background-image : url(./spiderman.jpg) ; background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%">
     <h1>Search Result</h1>
     <table class="motable">
       <thead>
         <tr>
           <th>Movie Name</th>
           <th>Release Date</th>
           <th>Duration</th>
           <th>Language</th>
           <th>Country Name</th>
           <th>Trailer</th>
           <th>Cast</th>
           <th>Description</th>
           <th>Rating</th>
           <th>Genre</th>
         </tr>
       </thead>
 <?php
 include("connect.php");
 if (isset($_POST['Search'])) {
   $search_m = $_POST['moviename'];
   if($search_m  == '')
   {
     echo "<script>alert ('Please Enter Movie Name') </script>";
     echo "<script>window.open('./movie.php','_self') </script>";
     exit();
   }

 }
 $view_movie="CALL search_movie  ( '$search_m' )";
 $view_query = mysqli_query($conn, $view_movie);
 while ($rows=mysqli_fetch_array($view_query)) {
   $movie_Name = $rows[0];
   $movie_rel = $rows[1];
   $movie_Du = $rows[2];
   $movie_lan = $rows[3];
   $movie_cname = $rows[4];
   $movie_Trailer = $rows[5];
   $movie_cast = $rows[6];
   $movie_dis = $rows[7];
   $movie_rate = $rows[8];
   $movie_genre = $rows[9];
  ?>
  <tbody>

    <tr>
      <td><?php echo $movie_Name  ?></td>
      <td><?php echo $movie_rel ?></td>
      <td><?php echo $movie_Du ?></td>
      <td><?php echo $movie_lan ?></td>
      <td><?php echo $movie_cname ?></td>
      <td><a href="<?php echo $movie_Trailer ?>"> Click Here </a></td>
      <td><?php echo $movie_cast  ?></td>
      <td><?php echo $movie_dis ?></td>
      <td><?php echo $movie_rate ?></td>
      <td><?php echo $movie_genre ?></td>
    </tr>
  </tbody>
 <?php } ?>

     </table>
   </body>
 </html>
