<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen h-screen">
    <div class="max-w-md bg-white p-8 rounded-lg shadow-md border border-black">
        <h2 class="text-xl font-bold mb-4 text-blue-500">Form Submission Result:</h2>
        <?php
        // Check if name and age are set and not empty
            if (isset($_POST['name']) && isset($_POST['age']) && !empty($_POST['name']) && !empty($_POST['age'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                ?>
                <p><span class="font-semibold">My name is:</span> <?php echo $name; ?></p>
                <p><span class="font-semibold">I am:</span> <?php echo $age; ?> <span class="font-semibold">years old</p>
                <?php
            } else {
                echo "<p>Please enter both name and age.</p>";
            }
        ?>
    </div>
</body>
</html>