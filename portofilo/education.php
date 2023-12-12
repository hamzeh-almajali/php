<div class="heading">
            <h1>education</h1>
          
        </div>
        <div class="content">



        <?php 

        $res=query("SELECT * FROM education");
        while($row=mysqli_fetch_array($res)){
            $path=substr($row[2],3);
            $edu="
            <div class=\"card\">
                <img src=\"$path\" alt=\"$row[4] \">
                <h2>$row[1]</h2>
                <p>$row[3]</p>
            </div>";
            echo $edu;
        }

?>




        </div>