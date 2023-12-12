<!DOCTYPE html>
<html lang="en">
<?php include_once '../config.php' ?>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		            

            <?php include('dashbord.php'); ?>
        </nav>
      


        <div id="page-wrapper">

            <div class="container-fluid">
<div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Add Project

</h1>
</div>
<form action="" method="post" enctype="multipart/form-data">

<div class="col-md-8">

<div class="form-group">
    <label for="product-title">project name </label>
        <input type="text" name="project_name" class="form-control">
       
    </div>
    
    <div class="form-group">
        <label for="product-title">project Description</label>
        <textarea name="project_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    
    
    <div class="form-group row">
        
        <div class="col-xs-3">
            <label for="product-price">project image</label>
            <input type="file" accept="image/*" name="project_img" class="form-control" size="60">
        </div>
    </div>
    
    
    <div class="form-group">
        <label for="product-title">image Description </label>
            <input type="text" name="imgdesc" class="form-control">
           
       </div>


    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-8">

     
     <div class="form-group">
      
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>


<?php
if(isset($_POST['publish'])){
$projectname=$_POST['project_name'];
$projectdesc=$_POST['project_description'];
$imgdesc=$_POST['imgdesc'];
$target_dir = "../img/";  // Specify the folder where you want to store uploaded images
$target_file = $target_dir . basename($_FILES["project_img"]["name"]);
move_uploaded_file($_FILES["project_img"]["tmp_name"], $target_file);
}
if(isset($_POST['publish'])){
    if(!empty($projectname) && !empty($projectdesc) && !empty($target_file) && !empty($imgdesc)){
$q=query("INSERT INTO projects (name ,image,prodesc , imgdesc) VALUES ('$projectname','$target_file','$projectdesc','$imgdesc')");

}}



?>





</aside><!--SIDEBAR-->


    
</form>
<h1 class="col-md-12">
   All Projects

</h1>

<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>name</th>
           <th>img_path</th>
           <th>img_desc</th>
           <th>description</th>

      </tr>
    </thead>
    <tbody>
   
 <?php 
 $w=query("select * from projects ");
 while($row=mysqli_fetch_array($w)){
$q="
    
    <tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td><button onclick='deleteproject($row[0])'>Delete </button></td>
    </tr>
";
echo $q;
 }
//       ?>


</tbody>
</table>

<script>

function deleteproject(id){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        
      }
    };
    xmlhttp.open("GET", "addproject.php?id=" + id, true);
    xmlhttp.send();
  }

</script>
<?php 

if(isset($_GET["id"])){
$id= $_GET["id"];
$q=query("DELETE FROM projects WHERE id = '$id'");
header("Location: dashbord.php");
}

?>

<h1 class="col-md-12">
   update project

</h1>


<form action="" method="post" enctype="multipart/form-data">

<div class="col-md-8">
  <div class="form-group">
         <label for="product-title">project name</label>
          <hr>
        <select name="id" id="" class="form-control col-md-4">
            <option value="">Select project id</option>
			<?php 
			$res=query("select * from projects");
			while($row=mysqli_fetch_array($res)){
				echo "<option>$row[0] -  $row[1]</option>" ;
				
				
				
			}
			
			
			
			?>
			
           
        </select>


</div>




<div class="form-group">
    <label for="product-title">project name </label>
        <input type="text" name="project_name" class="form-control">
       
    </div>
    
    <div class="form-group">
        <label for="product-title">project Description</label>
        <textarea name="project_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    
    
    <div class="form-group row">
        
        <div class="col-xs-3">
            <label for="product-price">project image</label>
            <input type="file" accept="image/*" name="project_img" class="form-control" size="60">
        </div>
    </div>
    
    
    <div class="form-group">
        <label for="product-title">image Description </label>
            <input type="text" name="imgdesc" class="form-control">
           
       </div>

       <?php
if(isset($_POST['update'])){
$projectname=$_POST['project_name'];
$projectdesc=$_POST['project_description'];
$imgdesc=$_POST['imgdesc'];
$target_dir = "../img/";  // Specify the folder where you want to store uploaded images
$target_file = $target_dir . basename($_FILES["project_img"]["name"]);
move_uploaded_file($_FILES["project_img"]["tmp_name"], $target_file);
$nameid=$_POST['id'];
$id = substr($nameid, 0,1);


}
if(isset($_POST['update'])){
    if(!empty($projectname) && !empty($projectdesc) && !empty($target_file) && !empty($imgdesc) && !empty($id)){
$q=query("UPDATE projects SET name ='$projectname' ,image='$target_file' , prodesc= '$projectdesc' , imgdesc=  '$imgdesc' where id ='$id'");
}else {
    echo '<h1> make sure adding all inputs </h1>';
}
}



?>

     
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
      
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="update">
    </div>


</aside><!--SIDEBAR-->


    
</form> 




            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>












                
                 

