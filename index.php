<?php include './partials/connect.php'; ?>
<?php include './partials/header.php'; ?>


<?php 
  $sql = "SELECT * FROM user"; 
  $result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Users</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    
    <div class="row"> 
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="' . $row["user_image"] . '" class="card-img-top" alt="User Image" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["user_name"] . '</h5>
                            <p class="card-text">' . substr($row["user_problem"],0,50). '.....</p>
                            <a href="stories.php?story_id=' . $row['user_id'] . '" class="btn btn-primary">Continue Reading</a>        
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p class="text-center">No users found!</p>';
        }
        ?>
    </div>
</div>





</body>
</html>

<?php
 include './partials/footer.php'; 
$con->close();
?> 












