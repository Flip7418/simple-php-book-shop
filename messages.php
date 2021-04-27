<?php
  session_start();
  
  $title = "Messages";
  require_once "./header.php";
  require_once "./database_functions.php";
  $conn = db_connect();

  $query = "SELECT * from contact ORDER BY date";
  $result = mysqli_query($conn, $query);
  if(!$result){
      echo "Can't retrieve data " . mysqli_error($conn);
      exit;
    }

    

?>


<div class="container">
  <div class=" py-3">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12 mb-0 "><a class="text-dark h5" href="admin_book.php">Admin Page</a> <span class="mx-2 mb-0">/</span> <strong class="text-black h5"> <?php echo $title; ?></strong></div>
        </div>
      </div>
    </div>
  <div class="col-md-5 mb-5 mb-md-0 mt-5">
            <h2 class="h3 mb-3 text-black">Messages from customers</h2>
        </div>
<table class="table table-striped mt-5">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Text</th>
    </tr>
  </thead>
  <tbody>
    <?php
     
     while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
      
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['text']; ?></td>

      
      <td><a href="deletem.php?name=<?php echo $row['name']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</div>

<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./footer.php";
?>
