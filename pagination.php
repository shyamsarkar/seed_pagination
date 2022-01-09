<?php
include "connection.php";

if (isset($_GET['page_number'])) {
   $data = trim($_GET['page_number']);
   $start = ($data - 1) * 100;
} else {
   $start = 0;
   $data = 2;
}
?>


<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>Hello, world!</title>
</head>

<body>

   <div class="container">
      <div class="d-flex justify-content-center">
         <h1 class="h1 pt-2">Pagination</h1>
      </div>
   </div>


   <div class="mb-5 pb-5">
      <div class="container">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">SNo.</th>
                  <th scope="col">ID</th>
                  <th scope="col">Currency</th>
                  <th scope="col">In Words</th>
                  <th scope="col">Date</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $sno = 1;
               $sql = "SELECT * FROM `number_word` limit $start,100";
               $result = mysqli_query($con, $sql);
               while ($row = mysqli_fetch_assoc($result)) {
               ?>
                  <tr>
                     <th scope="row"><?php echo $sno++; ?></th>
                     <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['numbr']; ?></td>
                     <td><?php echo $row['in_words']; ?></td>
                     <td><?php echo $row['created_at']; ?></td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>









   <div class="container">
      <div class="row">
         <div class="fixed-bottom">

            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="?page_number=<?php if ($data != 1) {
                                                                                    echo $data - 1;
                                                                                 } else {
                                                                                    echo 1;
                                                                                 }; ?>">Previous</a></li>
                  <?php
                  $sql = "SELECT count(*) FROM `number_word`";
                  $result = mysqli_query($con, $sql);
                  $row = mysqli_fetch_assoc($result);
                  $pages = ceil($row['count(*)'] / 100);
                  for ($i = 1; $i <= $pages; $i++) {
                  ?>
                     <li class="page-item <?php if ($data == $i) {
                                             echo "active";
                                          } ?>"><a class="page-link" href="?page_number=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  <?php } ?>
                  <li class="page-item"><a class="page-link" href="?page_number=<?php if ($data != $pages) {
                                                                                    echo $data + 1;
                                                                                 } else {
                                                                                    echo $pages;
                                                                                 } ?>">Next</a></li>
               </ul>
            </nav>
         </div>
      </div>
   </div>


   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>