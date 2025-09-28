<?php
// ==== CONFIG ====
$password = "MySecretPassword";   // change this!

// ==== LOGIN CHECK ====
session_start();

if (isset($_POST['password'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['logged_in'] = true;
    } else {
        echo "<p style='color:red;'>Wrong password.</p>";
    }
}

// ==== SHOW LOGIN FORM IF NOT LOGGED IN ====
if (empty($_SESSION['logged_in'])) {
    echo '<form method="post">
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" value="Login">
          </form>';
    exit();
}

// ==== DISPLAY COUNTER ====
$counter_file = "counter.txt";
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 0);
}
$count = (int) file_get_contents($counter_file);

echo "<h1>Site Stats</h1>";
echo "<p>Total visits: $count</p>";
?>
