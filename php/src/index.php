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
    <title>Beto Figueiredo</title>

    <?php include_once "includes/assets.php"; ?>

  </head>
  <body>
    <div class="container px-5 mx-auto text-left">
      <?php include_once "includes/menu.php"; ?>

      <div>
        <h1 class="md:text-8xl md:leading-[1.1] text-5xl mt-40 mb-7 text-[#212830] font-display text-center">
          Beto Figueiredo
        </h1>
        <div class="relative text-center text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
          Senior Software Developer / <span class="relative inline-block">
            <strong>JavaScript</strong> & <strong>Python</strong>
            <div class="absolute top-3 left-0 w-48 h-2 bg-[#ffffa8] -z-10"></div>
          </span> Specialist / <span class="relative"><strong>Go<div class="absolute top-3 left-0 w-6 h-2 bg-[#ffffa8] -z-10"></div></strong></span> Enthusiast
        </div>
      </div>
      <div class="mt-40">
        <h4 class="mb-10 text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
          Blog
        </h4>
        <?php
        // TODO: limit 5
        include_once "constants/posts.php";
        include_once "utils/utils.php";

        foreach ($postsList as $post): ?>
        <div class="mb-12">
          <p class="mb-1 text-sm text-gray-600 tracking-wider">
            <?php echo formatDate($post->publishedAt); ?>
          </p>
          <p class="mb-1 text-4xl text-[#212830] font-display">
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
