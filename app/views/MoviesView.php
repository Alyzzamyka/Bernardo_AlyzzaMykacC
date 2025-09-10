<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviesView</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Welcome to MoviesView</h1>

    <div class="overflow-x-auto w-full max-w-6xl">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Month</th>
                    <th class="py-2 px-4 border-b">Year Watched</th>
                    <th class="py-2 px-4 border-b">Type</th>
                    <th class="py-2 px-4 border-b">Created_at</th>
                   
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php if (!empty($movies)): ?>
                    <?php foreach($movies as $movie): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b"><?= $movie['id']; ?></td>
                            <td class="py-2 px-4 border-b"><?= $movie['Title']; ?></td>
                            <td class="py-2 px-4 border-b"><?= $movie['Month']; ?></td>
                            <td class="py-2 px-4 border-b"><?= $movie['Year_Watch']; ?></td>
                            <td class="py-2 px-4 border-b"><?= $movie['Type']; ?></td>
                            <td class="py-2 px-4 border-b"><?= $movie['Created_at']; ?></td>
                            
                            <td class="py-2 px-4 border-b space-x-2">
                                <a href="<?= site_url('movies/update/' . $movie['id']) ?>" class="text-blue-500 hover:underline">Update</a>
                                <a href="<?= site_url('movies/delete/' . $movie['id']) ?>" class="text-red-500 hover:underline">Delete</a>
                               
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="py-4 text-center text-gray-500">No movies found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <a href="<?= site_url('movies/create') ?>" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors font-semibold">Create New Movie</a>
</body>
</html>
