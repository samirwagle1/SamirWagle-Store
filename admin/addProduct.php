

<?php
    require "../dbconnect.php";
    
    $statusMsg = "";
// Handle form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") // add <?php echo $_SERVER['PHP_SELF']; in form action if req meth is used
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"];
    // File upload directory
    $targetDir = "../admin/uploads/";

    if (!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Insert data into database
                $sql = "INSERT INTO product_tbl (product_name, price, quantity, image, description)
                        VALUES ('$product_name', $price, $quantity, '$fileName', '$description')";
                
                if ($conn->query($sql) === TRUE) {
                    $statusMsg = "New Product created successfully";
                } else {
                    $statusMsg = "Error: Failed to add product";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
}    


    // Execute the query for the prev code without img
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: Failed to add product";
    // }


?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Insert Product</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce-Samir Wagle</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://kit.fontawesome.com/18e31dbed1.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Main Dashboard -->
    <section id="dashboard">
        <div class="left-dash-sec section-p1">
            <div class="recent-order">
                <div class="order-head">
                    <!-- <h3>Recent Customers</h3>
                    <button>View All</button> -->
                </div>
                
                <div class="add-pro-container">
                    <h3>Insert Product</h3>
                    
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="add-pro-form" name="addProduct">
                        <div class="add-pro-group">
                            <label class="add-pro-label">Product Name:</label>
                            <input type="text" class="add-pro-input" name="product_name" required>
                        </div>
                        
                        <div class="add-pro-group">
                            <label class="add-pro-label">Price:</label>
                            <input type="number" class="add-pro-input" name="price" required>
                        </div>
                        
                        <div class="add-pro-group">
                            <label class="add-pro-label">Quantity:</label>
                            <input type="number" class="add-pro-input qty" name="quantity" required>
                        </div>
                        
                        <div class="add-pro-group">
                            <label class="add-pro-label">Image:</label>
                            <input type="file" class="add-pro-input" name="image" accept=".jpg, .jpeg, .png" value="" required>
                        </div>
                        
                        <div class="add-pro-group">
                            <label class="add-pro-label">Description:</label>
                            <textarea class="add-pro-input" name="description" required></textarea>
                        </div>
                        
                        <div class="add-pro-group">
                            <input type="submit" class="add-pro-submit" value="Submit" name="submit">
                        </div>

                        <div class="status-msg">
                        <?php echo $statusMsg; ?>
                    </div>
                    </form>
                    
                </div>

            </div>
        </div>

        <div class="right-dash-sec">
            <div class="sidebar">
                <figure>
                    <img src="./img/people/upw.jpg" alt="admin">
                    <figcaption>Samir Wagle</figcaption>
                </figure>
                <nav>
                    <ul>
                        <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="#"><i class="fas fa-box-open"></i> Product Management</a></li>
                        <li><a class="active" href="#"><i class="fas fa-tags"></i>Add Product</a></li>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i> Order Management</a></li>
                        <li><a href="#"><i class="fas fa-credit-card"></i> Payment Option Management</a></li>
                        <li><a href="#"><i class="fas fa-file"></i> Page Management</a></li>
                        <li><a href="#"><i class="fas fa-users"></i> User Management</a></li>
                    </ul>
                </nav>
                <div class="setting">
                    <button><i class="fa-solid fa-gear"></i>Setting</button>
                    <button><i class="fa-solid fa-right-from-bracket"></i>Log Out</button>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>