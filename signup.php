<?php include './partials/connect.php';?>
<?php
if(isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $user_problem=$_POST['user_problem'];
    $user_image=$_FILES['user_image']['name'];
    $image_tmp=$_FILES['user_image']['tmp_name'];

    $upload_dir="uploads/";
    $image_path=$upload_dir.basename($user_image);

    if((move_uploaded_file($image_tmp,$image_path))){
        $sql="INSERT INTO user (user_name,user_problem,user_image) VALUES('$user_name','$user_problem','$image_path')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Issue submitted successfully!";
        }else{
            echo "Error: ". mysqli_error($con);
        }
    }else{
        echo "Failed to upload image";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="user_name" required><br><br>

        <label for="issue">Describe Your Issue:</label><br>
        <textarea id="issue" name="user_problem" rows="4" cols="40" required></textarea><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="user_image"  accept="image/*" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form> 

</body>
</html> 