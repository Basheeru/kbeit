<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "kbeit");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $subject = $conn->real_escape_string($_POST["subject"]);
    $message = $conn->real_escape_string($_POST["message"]);

    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $success = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-xl mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
    <?php if (isset($success) && $success): ?>
      <div class="bg-green-100 text-green-700 p-3 rounded mb-4">Message sent successfully!</div>
    <?php endif; ?>
    <form method="POST" class="space-y-4">
      <input name="name" type="text" placeholder="Your Name" required class="w-full p-2 border rounded" />
      <input name="email" type="email" placeholder="Your Email" required class="w-full p-2 border rounded" />
      <input name="subject" type="text" placeholder="Subject" class="w-full p-2 border rounded" />
      <textarea name="message" placeholder="Your Message" required class="w-full p-2 border rounded h-32"></textarea>
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Send</button>
    </form>
  </div>
</body>
</html>
