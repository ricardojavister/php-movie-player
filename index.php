<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
</head>
  
<body>
  <?php include 'navbar.php' ?>
  <div class="container">
    <div class="columns">
        <?php
                $strJsonFileContents = file_get_contents("clips.json");
                $json = json_decode($strJsonFileContents, true);
                foreach ($json as $key => $row) {
                    echo "<div class=column>";
                    echo '<video src='.  $row['url']  .' id='.  $row['id']  .' type=video/mp4 class=vid loop ></video>';
                    echo "</div>";
                }
                
        ?>
    </div>
    <div class="columns">
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="5" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="6" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="7" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="8" type="video/mp4" class="vid" loop ></video>
        </div>
    </div>
    <div class="columns">
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="9" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="10" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="11" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="12" type="video/mp4" class="vid" loop ></video>
        </div>
    </div>
    <div class="columns">
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="13" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="14" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="15" type="video/mp4" class="vid" loop ></video>
        </div>
        <div class="column">
        <video src="assets/vids/passengers.mkv" id="16" type="video/mp4" class="vid" loop ></video>
        </div>
    </div>
  </div>  
    <script>
        let clip =  document.getElementsByClassName("vid");
        for (c of clip){
            let ele = document.getElementById(c.id);
            
            ele.addEventListener("mouseover", function (e) {
                ele.classList.add('zoom');
                ele.play();
            })
            ele.addEventListener("mouseout", function (e) {
                ele.classList.remove('zoom');
                ele.pause();
            })
        }
    </script>
</body>
  
</html>