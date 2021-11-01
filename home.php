<!DOCTYPE HTML>
<html>

<head>
    <title>Cinema Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="myStyle.css" />
</head>

<body style="margin: 0;">
    <header class="topnav">
        <img src="pics/logo.png">
        <a href="#contact">Upcoming</a>
        <a href="#news">Now Showing</a>
        <a class="active" href="#home">Home</a>
    </header>
    <div class="wrapper functionArea">
        <div class="searchBox">
            <form class="searchForm">
                <input type="text" placeholder="name" id="movieName">
                <select name="cars" id="cars" aria-placeholder="Time Slot">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
                <select name="cars" id="cars" aria-placeholder="Time Slot">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
                <button type="submit" id="searchButton">Search</button>
            </form>
        </div>
        <div class="advertisement">
            <a href="theMovie.php"><img src="pics/bond-themes.jpg"></a>
        </div>

    </div>


    <div class="wrapper">
        <h1 style="text-align: center; margin-bottom: 20px;">Now Showing</h3>
        <?php
            $servername = "localhost";
            $username = "f32ee";
            $password = "f32ee";
            $dbname = "f32ee";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = " SELECT MovieID,MovieName,Poster FROM Movies";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    if($count%3==0){
                        echo '<div class="row">';
                    }
                    echo '<form id="'.$row["MovieID"].'" class="rowEntry" method="post" action="theMovie.php">';
                    echo '<input type="hidden" name="MovieID" value="'.$row["MovieID"].'"/>';
                    echo '<a onclick="document.getElementById("'.$row["MovieID"].'").submit();" class="entryImage"><img src="'.$row["Poster"].'" alt="" /></a>';
                    echo '<h3>'.$row["MovieName"].'</h3>';
                    echo '</form>';
                    $count = $count + 1;
                    if($count%3==0){
                        echo '</div>';
                    }
                    $movieName = $row["MovieName"];
                    foreach($row as $key=>$val){
                        echo $key.": ".$val."<br>";
                    }
                    
                }
            } else {
                echo "sql error";
            }
            mysqli_close($conn);
        ?>
            <!-- <div class="row">
                <form id="theForm" class="rowEntry" method="post" action="theMovie.php">
                    <input type="hidden" name="name" value="value" /> 
                    <a onclick="document.getElementById('theForm').submit();" class="entryImage"><img src="pics/blackPanther.jpg" alt="" /></a>
                    <h3>No Time To Die</h3>
                </form>
                <section class="rowEntry">
                    <a href="#" class="entryImage"><img src="pics/blackPanther.jpg" alt="" /></a>
                    <h3>No Time To Die</h3>
                </section>
                <section class="rowEntry">
                    <a href="#" class="entryImage"><img src="pics/blackPanther.jpg" alt="" /></a>
                    <h3>No Time To Die</h3>
                </section>
            </div> -->
    </div>
</body>

</html>