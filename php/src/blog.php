<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Beto Figueiredo" />
    <meta name="description" content="Senior Software Developer / JavaScript & Python Specialist / Go Enthusiast" />
    <meta name="keywords" content="software, developer, programing, javascript, python, go, senior, react, node" />
    <meta property="og:title" content="Beto Figueiredo" />
    <meta property="og:description" content="Senior Software Developer / JavaScript & Python Specialist / Go Enthusiast" />
    <meta property="og:url" content="https://betofigueiredo.com" />
    <meta name="twitter:title" content="Beto Figueiredo" />
    <meta name="twitter:description" content="Senior Software Developer / JavaScript & Python Specialist / Go Enthusiast" />
    <title>Blog | Beto Figueiredo</title>

    <?php include_once "includes/assets.php"; ?>

  </head>
  <body>
    <div class="container px-5 mx-auto text-left">
      <?php include_once "includes/menu.php"; ?>

      <div class="mt-20">
        <?php
        // TODO: pagination
        include_once "constants/posts.php";
        include_once "utils/utils.php";

        foreach ($postsList as $post): ?>
        <div class="mb-12">
          <p class="mb-1 text-sm text-gray-600 tracking-wider">
            <?php echo formatDate($post->publishedAt); ?>
          </p>
          <p class="mb-1 text-4xl font-bold text-[#212830] font-display">
            <a href="/blog/<?php echo $post->slug; ?>" class="hover:text-[#475763] transition-all">
              <?php echo $post->title; ?>
            </a>
          </p>
          <p class="mb-1 text-gray-600 font-serif">
            <?php echo $post->subtitle; ?>
          </p>
          <p class="font-serif">
            <?php foreach ($post->tags as $tag): ?>
              <span>#<?php echo $tag; ?></span>
            <?php endforeach; ?>
          </p>
        </div>
        <?php endforeach;
        ?>
      </div>

      <?php include_once "includes/footer.php"; ?>
    </div>
  </body>
</html>
