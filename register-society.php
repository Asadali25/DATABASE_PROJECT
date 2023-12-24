<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Society Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            max-width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Add your own styling for the logo container */
        #logo-container {
            text-align: center;
        }

        #logo-container img {
            max-width: 100%;
            height: auto;
            max-height: 150px; /* Adjust the max-height as needed */
            margin-bottom: 16px;
        }
    </style>
</head>
<body>

     <form action="process_registration.php" method="post" enctype="multipart/form-data">
        <h2>University Society Registration</h2>

        <label for="s_societyName">Society Name:</label>
        <input type="text" id="societyName" name="s_societyName" required>

        <label for="s_description">Description:</label>
        <textarea id="description" name="s_description" rows="4" required></textarea>

        <label for="s_logo">Society Logo:</label>
        <div id="logo-container">
            <input type="file" id="logo" name="s_logo" accept="image/*" required>
        </div>

        <label for="s_socialMedia">Social Media Links:</label>
        <input type="text" id="socialMedia" name="s_socialMedia">

        <label for="s_contactEmail">Contact Email:</label>
        <input type="email" id="contactEmail" name="s_contactEmail" required>

        <input type="submit" value="Submit">
    </form>


</body>
</html>
