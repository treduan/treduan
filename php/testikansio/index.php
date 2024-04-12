<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script>
        // JavaScript function to validate the form
        function validateForm() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;

            if (name.trim() === '') {
                alert('Please enter your name.');
                return false;
            }

            if (email.trim() === '') {
                alert('Please enter your email.');
                return false;
            }

            // Additional email validation (basic format)
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            return true; // Form is valid
        }
    </script>
</head>
<body>
    <h2>Form Validation Example</h2>
    <form action="process_form.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>