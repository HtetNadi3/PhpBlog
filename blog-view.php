<?php include "component/header.php" ?>


<a href="blog-index.php">Back to home...</a>
<h1>Title</h1>
<p>
Form Method: Change the form method from get to post to properly handle file uploads.
SQL Injection: Your code is vulnerable to SQL injection attacks. Consider using prepared statements or parameterized queries to prevent this.
Error Handling: You're only displaying errors on the page. Consider adding CSS styling or JavaScript validation for a better user experience.
File Handling: Ensure you have proper permissions set for the directory where you're storing uploaded images.
Security: Sanitizing input is good, but it's not enough. You should also validate the data to ensure it meets your expectations (e.g., title not too long, about not empty, etc.).
Consistency: It's a good practice to consistently use either single quotes or double quotes for HTML attributes and PHP string literals throughout your codebase.
</p>

<img src="photo/289jpXiaomi-VR.jpg" alt="img" class="img-fluid w-50">

<?php include "component/footer.php"?>