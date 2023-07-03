<?php
include_once 'header-profile.php' ;
?>


    
        <div id="news-feed">
            <?php
                require_once 'includes/dbh-inc.php';

                $query = "SELECT id, userId, title, description, image FROM uploads ORDER BY id DESC";

                $result = mysqli_query($conn, $query);
                
                echo "<div class='grid-container'>";
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<div data-aos='zoom-in-up'>";
                echo "<div class='grid-item'>";
                echo "<p>" . $row['userId'] . "</p>";
                echo "<img src='includes/images/" . $row['image'] . "'>";
                echo "<p> Title: " . $row['title'] . "</p>";
                echo "<p> Description: " . $row['description'] . "</p>";
                echo "</div>";
                
                }
            ?>
        </div>
    


<?php
include_once 'footer-profile.php';
?>