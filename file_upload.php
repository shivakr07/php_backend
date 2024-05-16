<!-- <?php
// if(isset($_POST['submit'])){
//     echo "<pre>";
//     print_r($_FILES);
//     move_uploaded_file($_FILES['doc']['tmp_name'],'fileupload/'.$_FILES['doc']['name']);
        // file name
        // name by which we want to upload [name : same name]                  
// }
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc" />
    <input type="submit" name="submit" />
</form> -->

<?php
if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_FILES);
    if ($_FILES['doc']['error'] === UPLOAD_ERR_OK) {
        $uploadPath = 'fileupload/' . basename($_FILES['doc']['name']);
        if(move_uploaded_file($_FILES['doc']['tmp_name'], $uploadPath)) {
            echo "File uploaded successfully!";
        } else {
            echo "Error moving file!";
        }
    } else {
        echo "File upload error: " . $_FILES['doc']['error'];
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc" />
    <input type="submit" name="submit" />
</form>
