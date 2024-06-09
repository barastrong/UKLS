<?php
include("../../koneksi.php");

// Check if 'id' parameter is present in the URL
if (!isset($_GET['id'])) {
    header('Location: ../Penjelasan/flapybird.php');
    exit;
}

// Get the 'id' parameter from the URL
$id = $_GET['id'];

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Validate the rating input as an integer between 1 and 5
    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT, array(
        "options" => array(
            "min_range" => 1,
            "max_range" => 5
        )
    ));

    // Check if the rating is valid
    if ($rating === false) {
        // If the rating is not valid, display an error message
        echo "Invalid rating. Please submit a rating between 1 and 5.";
    } else {
        // Prepare the SQL query to select the current rating of the image
        $stmt = $mysqli->prepare("SELECT rating FROM images WHERE ID_PIC = ?");
        // Bind the 'id' parameter to the SQL query
        $stmt->bind_param('i', $id);
        // Execute the query
        $stmt->execute();
        // Get the result of the query
        $result = $stmt->get_result();
        
        // Check if the image was found
        if ($row = $result->fetch_assoc()) {
            // Get the current rating from the result
            $current_rating = (int)$row['rating'];
            // Calculate the new rating by adding the submitted rating to the current rating
            $new_rating = $rating + $current_rating;

            // Prepare the SQL query to update the rating of the image
            $update_stmt = $mysqli->prepare("UPDATE images SET rating = ? WHERE ID_PIC = ?");
            // Bind the new rating and the 'id' parameter to the SQL query
            $update_stmt->bind_param('ii', $new_rating, $id);
            // Execute the query
            $update_stmt->execute();
            
            // Close the prepared statements
            $stmt->close();
            $update_stmt->close();

            // Redirect to flapybird.php to avoid form resubmission
            header("Location: ../Penjelasan/flapybird.php");
            exit;
        } else {
            // If the image was not found, display an error message
            echo "Image not found.";
        }
    }
}
?>
