<div class='row'>
    <h1 class="page-header">Twitch Portfolio</h1>
    <?php include 'log.php'; 
        if (!empty($_GET['id'])){
            $id = $_GET['id'];
        }
        else{
            $id=1;
        }

        $sql = "SELECT * FROM tport WHERE autoID = '".  mysql_real_escape_string($id)."'";
        $sql_all = "SELECT * FROM tport";
        $result = $conn->query($sql) or die();
        $rAll = $conn->query($sql_all) or die();

        if ($result->num_rows >0){
            $row = $result->fetch_assoc();
                echo "<div class='col-md-8'>";                                    
                    echo "<h4 class='lead'> <b>COVER BANNER / OFFLINE BANNER</b> </h4>";
                    if (!empty($row["banner"])){
                            echo "<img class='img-responsive img-zoom' src='img/".$row["userName"]."/". $row["banner"] . "'/>";
                    }
                    if (!empty($row["offline"])){
                            echo "<img class='img-responsive img-zoom' src='img/".$row["userName"]."/". $row["offline"] . "'/>";
                    }
                echo "</div>";

                echo "<div class='col-md-4 text-justify'>";
                    echo "<h3>". $row["userName"]. "</h3>";
                    echo "<h4> <b>Date Created: </b>". $row["dateCreated"]. "</h3>";
                    echo "<h5> <b>Theme: </b>". $row["theme"] . "</h5>";
                    echo "<p>" . $row["des"]. "</p>";
                    echo "<a href='".$row["tLink"]."' class='btn btn-primary' role='button' target='_blank'><i class='fa fa-twitch'></i> Go To Twitch Page</a>";
                echo "</div>";
    ?>
</div>
<div class='row img-zoom'>
<?php
    echo "<h4 class='lead'> <b>BUTTONS</b> </h4>";
        echo "<div class='col-sm-4'>";
            if (!empty($row["button1"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button1"] . "'/>";
            } 
            if (!empty($row["button2"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button2"] . "'/>";
            } 
            if (!empty($row["button3"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button3"] . "'/>";
            }
        echo "</div>";

        echo "<div class='col-sm-4'>";                            
            if (!empty($row["button4"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button4"] . "'/>";
            }                                        
            if (!empty($row["button5"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button5"] . "'/>";
            } 
            if (!empty($row["button6"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button6"] . "'/>";
            }
        echo "</div>";

        echo "<div class='col-sm-4'>";
            if (!empty($row["button7"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button7"] . "'/>";
            } 
            if (!empty($row["button8"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button8"] . "'/>";
            }
            if (!empty($row["button9"])){
                    echo "<img class='img-responsive center-block' src='img/".$row["userName"]."/". $row["button9"] . "'/>";
            }
        echo "</div>";
            }                    
?>
</div>