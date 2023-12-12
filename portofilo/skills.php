<?php include_once ('config.php') ?>
<div class="heading">
            <h1>skills </h1>
        </div>
        <div class="content">
            <div class="icons">
                <?php $res=query("SELECT * FROM skills");
                
                while($row=mysqli_fetch_array($res)){
                    $skills="
                    <i $row[1]>
                        $row[2]</i>
                    ";
                    echo $skills;
                }
                
                ?>
            
           
        </div>
        
    <hr>