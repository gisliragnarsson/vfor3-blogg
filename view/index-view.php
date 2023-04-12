<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex justify-between align-center py-6 px-8 border-b-4 border-gray-200 bg-white">
        <h2 class="text-xl">Simple Blog</h2>

        <div>
            <a href="form.php" class="bg-yellow-500 rounded-lg hover:bg-yellow-600 font-medium px-10 py-3 text-white">New Post</a>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-3/5 mt-8">
            <?php foreach($blogs as $blog): ?>
                <div class="flex items-center bg-white p-8 rounded-lg mb-4 shadow">
                    <div class="">
                        <h3 class="text-xl font-semibold text-gray-700">
                            <?php echo $blog['title']; ?>
                        </h3>
                        <p class="text-sm text-gray-500 ml-4">
                            <span class="text-black">by</span> <?php echo $blog['author']; ?>
                        </p>
                    </div>
                    <div class="flex-1 flex justify-end">
                        <a href="single-blog.php?id=<?php echo $blog['id']; ?>" class="text-blue-500 font-bold">
                            Lesa blogg
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>