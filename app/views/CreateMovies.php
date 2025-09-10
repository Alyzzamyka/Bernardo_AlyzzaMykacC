<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateMovie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Welcome to CreateMovie View</h1>

        <form action="<?= site_url('movies/create') ?>" method="POST" class="space-y-4">
            <div>
                <label for="Title" class="block text-gray-700 font-medium mb-1">Title:</label>
                <input type="text" id="Title" name="Title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="Year_Watch" class="block text-gray-700 font-medium mb-1">Year Watched:</label>
                <select id="Year_Watch" name="Year_Watch" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php 
                        $currentYear = date("Y");
                        for($year = $currentYear; $year >= 1900; $year--){
                            echo "<option value='$year'>$year</option>";
                        }
                    ?>
                </select>
            </div>

            <div>
                <label for="Month" class="block text-gray-700 font-medium mb-1">Month:</label>
                <select id="Month" name="Month" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>

            <div>
                <label for="Type" class="block text-gray-700 font-medium mb-1">Type:</label>
                <select id="Type" name="Type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="Horror">Horror</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Romcom">Romcom</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Crime">Crime</option>
                    <option value="Documentary">Documentary</option>
                    <option value="Musical">Musical</option>
                    <option value="Animated">Animated</option>
                    <option value="Dark Comedy">Dark Comedy</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors font-semibold">Submit</button>
        </form>
    </div>
</body>
</html>
