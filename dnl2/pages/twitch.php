<div class="container-fluid xyz">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-8 text-center">
                <div class='well well-bk'>
                    <h1 class="page-header">Twitch Portfolio</h1>
                        <?php include 'log.php'; 

                            $sql = "SELECT * FROM tport";
                            $sql_all = "SELECT * FROM tport";
                            $result = $conn->query($sql) or die();
                            $rAll = $conn->query($sql_all) or die();

                            if ($result->num_rows >0){
                                
                                $count = 1;
                                while($row = $result->fetch_assoc()){
                                    
                                    if($count == 1){
                                    echo "<div id='".$row["userName"]."' class='tUser'>";
                                        $count++;
                                    }
                                    else{
                                    echo "<div id='".$row["userName"]."' class='tUser hide'>";                                        
                                    }
                                    echo "<div class='row'>";
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
                                    echo "</div>";
                                    
                                    
                                    echo "<div class='row img-zoom twitch'>";

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
                                    echo "</div>";
                                echo "</div>";
                               }
                            }
                    ?>
                </div>
                <div class='well well-bk'>
                    <div id='tNav' class='row'>
                        <div class='col-md-12'>
                            <h3 class='page-header text-left'>All Twitch Works</h3>
                        </div>
                            <?php 
                                while($row = $rAll->fetch_assoc()){
                                    if ($row["banner"] != ""){
                                        echo "<div class='col-sm-3'>";
                                            echo "<h5 class='lead'><b>".$row["userName"]."</b>";
                                            echo "<a href='javascript: toggleUser(".$row["userName"].")'><img class='img-responsive img-zoom' src='img/".$row["userName"]."/". $row["banner"] . "'/></a>";
                                        echo "</div>";
                                    }
                                    else{
                                        echo "<div class='col-sm-3'>";
                                            echo "<img class='img-responsive img-zoom' src='img/".$row["userName"]."/". $row["button1"] . "'/>";
                                        echo "</div>";
                                    }
                                }
                                $conn->close();
                            ?>
                    </div>
                </div>
                    <?php include_once 'bottomNav.html'?>                
            </div>
        <?php include_once 'side-obj.php';?>
        </div>
    </div>
</div>
