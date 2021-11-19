<?php 
    
    include("topbit.php");
?>

    <p>
    Hello World!
    </p>

    <div class="wrapper">

        <header class="box">
            <h1> Economic Freedom </h1>
        <header>

        <nav class="box">
            Nav goes here
        </nav>

        <main id="content">

            <?php

                //PHP CODE TO CONNECT TO DATABASE
                require_once 'connect.php';

                //SQL STATEMENT TO FETCH EVERYTHING(*) FROM DATABASE
                $sql = "SELECT * FROM regions, economic details WHERE regions.ID = economic details.RegionID ORDER BY Country_Name";

                //ESTABLISH CONNECTION WITH $conn & QUERY THE $sql STATEMENT
                //$conn is from connect php
            
                $result = $conn -> query($sql);

                echo '<h1 class="countriesHeading"> Country List</h1>'

                echo '<section id="countriesList">';
                    
                    echo '<h2>' . $row["Country"] . '</h2>';
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'
                    echo '<p><span id="title>Artist: </span><span>' . $row ["Artist_Name"] . '</span></p>'


                echo '</section>';

            ?>

</main>


        <aside class="box">
            Side bar
        </aside>

<!-- body ends here // below is the footer file-->
    <div>
        <?php include("bottombit.php")?>
    </div>
</body>

</html>
