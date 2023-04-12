<!DOCTYPE html>
<html lang="en">
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
            <a href="index.php" class="rounded-lg border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white text-yellow-600 font-medium px-10 py-3">View All</a>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-3/5 mt-8">
            <div class="bg-white p-8 rounded-lg mb-4 shadow">
                <h3 class="text-2xl mb-8 text-center font-medium">Create Blog</h3>

                <form action="save-blog.php" method="POST">
                    <div class="mb-4">
                        <label for="title" class="text-gray-400 text-xs">Title</label>
                        <input type="text" id="title" name="title" class="w-full py-3 px-5 rounded-lg border outline-none focus:border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="author" class="text-gray-400 text-xs">Author</label>
                        <input type="text" id="author" name="author" class="w-full py-3 px-5 rounded-lg border outline-none focus:border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="text-gray-400 text-xs">Content</label>
                        <textarea name="content" id="content" rows="10" class="w-full py-3 px-5 rounded-lg border outline-none focus:border-gray-300 resize-none"></textarea>
                    </div>
                    <div class="mb-4">
                        <button class="py-3 px-12 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">
                            Save Blog
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>