<?php
require_once "header.php";
require "connection.php";

// Check if user_id is set in the session
session_start(); // Start the session if not already started
if (isset($_SESSION['role'])) {
    // Cast to integer to prevent SQL injection
    $user_id = (int)$_SESSION['role'];

    // Connect to the database (assuming variables are defined in connection.php)
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query using prepared statement
    $stmt = $conn->prepare("SELECT `users_id`, `roll_id_fk`, `users_name`, `user_email`, `user_contact`, `user_passward`, `user_image` FROM `user` WHERE users_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Assign fetched values to variables
        $id = $row['users_id'];
        $name = $row['users_name'];
        $email = $row['user_email'];
        $contact = $row['user_contact'];
        $userpass = $row['user_passward'];
        $user_image = $row['user_image'];

        // Construct the full path to the image
        $imagePath = "img/" . $user_image;

    } else {
        echo "User not found";
        exit();
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
} else {
    echo "User ID not set in the session";
    exit();
}
?>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center ms-5">
        <div class="col-md-4 text-center mb-4">
            <img src="<?php echo $imagePath; ?>" class="img-fluid rounded-start" alt="User Image" style="margin-top: 20px;">
        </div>
        <div class="col-md-8">
            <div class="card" style="max-width: 540px; border: none;">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p>First Name: <?php echo $name; ?></p>
                    <p>Email: <?php echo $email; ?></p>
                    <p>Contact: <?php echo $contact; ?></p>
                    <p>Password: <?php echo $userpass; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>
