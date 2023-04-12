<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
            <div class="mb-5">
                <a href="index.php" class="text-blue-500 font-bold">
                    < Til baka
                </a>
            </div>
            <div class="bg-white p-8 rounded-lg mb-8 shadow">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">
                    <?php echo $blog['title']; ?>
                </h3>
                <p class="text-sm text-gray-500 ml-4 mb-4">
                    <span class="text-black">by</span> <?php echo $blog['author']; ?>
                </p>

                <p class="text-justify leading-8">
                    <?php echo nl2br($blog['content']); ?>
                </p>
            </div>

            <form action="save-comment.php" method="POST">
                <input type="hidden" name="blog_id" value="<?php echo $blog["id"]; ?>">
                <div class="mb-4">
                    <input placeholder="Settu inn nafnið þitt" type="text" id="title" name="author" class="w-full text-sm py-3 px-5 rounded-lg border outline-none focus:border-gray-300">
                </div>    
                <div class="mb-4">
                    <textarea placeholder="Skrifaðu athugsemdina hér..." name="content" id="content" rows="3" class="w-full text-sm py-3 px-5 rounded-lg border outline-none focus:border-gray-300 resize-none"></textarea>
                </div>
                <div class="mb-4">
                    <button class="py-2 px-8 text-sm bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">
                        Vista athugasemd
                    </button>
                </div>
            </form>

            <h3 class="text-lg mb-2 font-semibold">
                Athugasemdir (<?php echo count($comments); ?>)
            </h3>

            <?php foreach($comments as $comment): ?>
                <div class="mb-4 bg-white p-8 rounded-lg">
                    <div class="flex justify-between text-xs">
                        <p>
                            <strong><?php echo $comment["author"]; ?></strong> <span class="text-gray-400">skrifaði</span>
                        </p>
                        <span>
                            <form action="update-like.php" method="POST">
                                <input type="hidden" name="comment_id" value="<?php echo $comment["id"]; ?>">
                                <input type="hidden" name="blog_id" value="<?php echo $blog["id"]; ?>">
                                <button>    
                                    <?php echo $comment["likes"]; ?> likes
                                </button>
                            </form>     
                        </span>
                    </div>
                    <p>
                        <?php echo $comment["content"]; ?>
                    </p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>
</html>