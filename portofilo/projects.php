<div class="heading">
            <h1>projects</h1>
        </div>
        
        <div class="content">
                <?php   $res =query("SELECT * FROM projects");
                
                while ($row = mysqli_fetch_array($res)) {
                    $path=substr($row[2],3);
                    $projects="
            <div class=\"card\"><a href=\"https://github.com/hamzeh-almajali/FBE\" target=\"_blank\">
                    <div class=\"img\">
                    <img src=\"$path\" alt=\"$row[4]\">
                </div>
                <div class=\"detail\">
                    <h3>$row[1]</h3>
                    <p>$row[3]
                    </p>
                </div>
</a>
            </div>

                    
                    
                    
                    
                    
                    ";

echo $projects;


                }
                
                
                
                
                 ?>
             <!--   <div class="img">
                 <img src="img/Screenshot2.png" alt="">
               </div>
               <div class="detail">
                     <h3>pod talk</h3>
                    <p>this project is a podcast 
                       platform that make users follow and subscripe there influncer.
                     </p>
                </div>
 </a>
            </div>

             <div class="card"><a href="#https://github.com/hamzeh-almajali/FBE" target="_blank">
                <div class="img">
                    <img src="img/Screenshot2.png" alt="">
                </div>
                <div class="detail">
                    <h3>pod talk</h3>
                    <p>this project is a podcast 
                        platform that make users follow and subscripe there influncer.
                    </p>
                </div>
</a>
            </div> -->

        </div>
