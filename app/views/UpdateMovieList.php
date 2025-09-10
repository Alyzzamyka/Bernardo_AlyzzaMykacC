<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateMovie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Update Movie</h1>

        <form action="<?= site_url('movies/update/' . $movie['id']); ?>" method="POST" class="space-y-4">
            <!-- Title -->
            <div>
                <label for="Title" class="block text-gray-700 font-medium mb-1">Title:</label>
                <input type="text" id="Title" name="Title" 
                       value="<?= html_escape($movie['Title']) ?>" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Year Watched -->
            <div>
                <label for="Year_Watch" class="block text-gray-700 font-medium mb-1">Year Watched:</label>
                <select id="Year_Watch" name="Year_Watch" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php 
                        $currentYear = date("Y");
                        for($year = $currentYear; $year >= 1900; $year--){
                            $selected = ($year == $movie['Year_Watch']) ? "selected" : "";
                            echo "<option value='$year' $selected>$year</option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Month -->
            <div>
                <label for="Month" class="block text-gray-700 font-medium mb-1">Month:</label>
                <select id="Month" name="Month" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php 
                        $months = [
                            "January","February","March","April","May","June",
                            "July","August","September","October","November","December"
                        ];
                        foreach ($months as $m) {
                            $selected = ($m == $movie['Month']) ? "selected" : "";
                            echo "<option value='$m' $selected>$m</option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Type -->
            <div>
                <label for="Type" class="block text-gray-700 font-medium mb-1">Type:</label>
                <select id="Type" name="Type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php 
                        $types = [
                            "Horror","Comedy","Thriller","Romcom","Action","Drama","Adventure",
                            "Fantasy","Sci-fi","Crime","Documentary","Musical","Animated",
                            "Dark Comedy","Romance"
                        ];
                        foreach ($types as $t) {
                            $selected = ($t == $movie['Type']) ? "selected" : "";
                            echo "<option value='$t' $selected>$t</option>";
                        }
                    ?>
                </select>
            </div>

         
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors font-semibold">Update</button>
        </form>
    </div>
</body>
</html>
