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

    <?php include_once('includes/assets.php'); ?>

  </head>
  <body>
    <div class="container mx-auto text-left">
      <?php include_once('includes/menu.php'); ?>

      <div>
        <h1 class="md:text-8xl md:leading-[1.1] text-3xl mt-40 mb-7 font-bold text-[#212830] font-display text-center">
          Beto Figueiredo
        </h1>
        <div class="relative text-center text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
          Senior Software Developer / <strong>JavaScript</strong> &
          <strong>Python</strong> Specialist / <strong>Go</strong> Enthusiast
          <div class="absolute top-3 left-[360px] w-52 h-2 bg-[#ffffa8] -z-10"></div>
          <div class="absolute top-3 left-[674px] w-10 h-2 bg-[#ffffa8] -z-10"></div>
        </div>
      </div>
      <div class="mt-40">
        <h4 class="mb-10 text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
          Blog
        </h4>

        <?php
        // limit 5
        include_once('constants/posts.php');
        foreach ($postsList as $post) {
          echo $post->title;
          echo "<br>";
        }
        ?>
      </div>

      <?php include_once('includes/footer.php'); ?>
    </div>
  </body>
</html>
