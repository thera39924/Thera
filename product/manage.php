<div class="container">
    <h2>Product List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
   <body>
      <?php
      require_once('../database/db_connection.php');
      //Fetch all products from the table
      $sql = "SELECT * FROM product";
      $result = mysqli_query($conn, $sql);
 
      //Display the products in the table rows
      if (mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" .$row['name']."</td>";
            echo "<td>" .$row["price"]. "</td>";
            echo "<td><img src='".$row['image']. "' class='img-fluid' style='max-width: 100px;' alt='Product Image'></td>";
            echo "<td>
                    <form method='POST' action='DeleteProductProvider.php' onsubmit='return confirn(\"Are you sure you want to delete this product?\")'>
                       <input type='hidden' name='product_id' value='". $row['id']."'>
                       <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                    </form>
                </td>";
             echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='4'>No products found</td></tr>";
      }    
     //Clean ton database connection
      mysqli_close($conn);
      ?>
   </tbody>
  </table>
</div>
      <div class="container">
      <h2>Add Product</h2>
      <form method="POST" action="AddProductProvider.php" enctype="multipart/form-data"> 
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" name="price" required>
</div>
<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" name="image" required>
 </div>
 <button type="submit" class="btn btn-primary">Add Product</button>
  </form>
</div>