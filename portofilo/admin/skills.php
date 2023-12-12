<!DOCTYPE html>
<html lang="en">
<?php require_once '../config.php'?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include('dashbord.php'); ?>
        </nav>



        <div id="page-wrapper">

            <div class="container-fluid">


                


            <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Add skills

</h1>
</div>
<form action="" method="post" enctype="multipart/form-data">

<div class="col-md-8">

<div class="form-group">
    <label for="product-title">icon for skill </label>
        <input type="text" name="icon" class="form-control">
       
    </div>
    
    <div class="form-group">
        <label for="product-title">skill name</label>
        <input name="skill_name" id=""  class="form-control">
    </div>




    <div class="form-group">
      
      <input type="submit" name="add" class="btn btn-primary btn-lg" value="add">
  </div>
    </form>

  <?php
if(isset($_POST['add'])){
$icon=$_POST['icon'];
$skilldesc=$_POST['skill_name'];

}

if(isset($_POST['add'])){
    if(!empty($icon) && !empty($skilldesc) ){
$q=query("INSERT INTO skills (icon ,name ) VALUES ('$icon','$skilldesc')");

}else{
    echo "failed to save";
    echo $icon;
    echo $skilldesc;
}
}
?>


<h1 class="col-md-12">
   All skills

</h1>

<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>icon</th>
           <th>name</th>
      </tr>
    </thead>
    <tbody>
   
 <?php 
 $w=query("select * from skills ");
 while($row=mysqli_fetch_array($w)){
$q="
    
    <tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
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
    xmlhttp.open("GET", "skills.php?id=" + id, true);
    xmlhttp.send();
  }

</script>
<?php 

if(isset($_GET["id"])){
$id= $_GET["id"];
$q=query("DELETE FROM skills WHERE id = '$id'");
header("Location: dashbord.php");
}

?>

<h1 class="page-header">
   update skills

</h1>
</div>
<form action="" method="post" enctype="multipart/form-data">

<div class="col-md-8">
<div class="col-md-8">
  <div class="form-group">
         <label for="product-title">skills name</label>
          <hr>
        <select name="id" id="" class="form-control col-md-4">
            <option value="">Select skill id</option>
			<?php 
			$res=query("select * from skills");
			while($row=mysqli_fetch_array($res)){
				echo "<option>$row[0] -  $row[1]</option>" ;
				
				
				
			}
			
			
			
			?>
			
           
        </select>


</div>
<div class="form-group">
    <label for="product-title">icon for skill </label>
        <input type="text" name="icon" class="form-control">
       
    </div>
    
    <div class="form-group">
        <label for="product-title">skill name</label>
        <input name="skill_name" id=""  class="form-control">
    </div>




    <div class="form-group">
      
      <input type="submit" name="update" class="btn btn-primary btn-lg" value="update">
  </div>


  <?php
if(isset($_POST['update'])){
$icon=$_POST['icon'];
$skilldesc=$_POST['skill_name'];
$nameid=$_POST['id'];
$id = substr($nameid, 0,1);

}

if(isset($_POST['update'])){
    if(!empty($icon) && !empty($skilldesc) ){
$q=query("UPDATE skills SET icon = '$icon',name ='$skilldesc' WHERE id ='$id'" );

}
}
?>
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
