<?php
$slug = "be-careful-about-your-dependencies";
$title = "Be careful about your dependencies";
$subtitle =
    "The tragedy of an old Node project and the trap of dependencies in JavaScript projects.";
$tags = ["work"];
$publishedAt = "January 18, 2025";
$draft = false;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Beto Figueiredo" />
    <meta name="description" content="<?php echo $subtitle; ?>">

    <meta property="og:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title; ?> | Beto Figueiredo">
    <meta property="og:description" content="<?php echo $subtitle; ?>">
    <meta property="og:image" content="<?php echo $slug; ?>-cover.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="betofigueiredo.com">
    <meta property="twitter:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?> | Beto Figueiredo">
    <meta name="twitter:description" content="<?php echo $subtitle; ?>">
    <meta name="twitter:image" content="<?php echo $slug; ?>-cover.jpg">

    <title><?php echo $title; ?> | Beto Figueiredo</title>
    <?php include_once "../includes/assets.php"; ?>
  </head>

  <body>
    <div class="container mx-auto text-left">
      <?php include_once "../includes/menu.php"; ?>

      <p class="mt-24 text-center text-sm text-gray-700 tracking-wider">
        <?php echo $publishedAt; ?>
      </p>
      <h1 class="md:text-8xl md:leading-[1.1] text-3xl mt-8 mb-14 font-bold text-[#212830] font-display text-center">
        <?php echo $title; ?>
      </h1>
      <div class="my-12 text-center">
        <em class="relative text-xl leading-7 text-[#212830] font-serif">
          "The strength of a building lies in its foundation; without a solid base, even the grandest structure is destined to crumble."
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        At the company where I currently work, we have a project developed many
        years ago that almost no one dares to update. It uses outdated
        technologies like Backbone and Gulp. It's the kind of project everyone
        avoids, always finding an excuse not to put it on the priority list. But
        what's the real problem? Just outdated technologies? Poorly written
        code?
      </p>

      <h2 class="text-3xl mt-16 mb-8 font-bold text-[#212830] font-display">The tragedy of an old Node project</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        When I first saw the code, I was surprised: it's well-organized code.
        It's not perfect — no codebase is — but it's possible to navigate it
        without major difficulties, even without knowing all the libraries used.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The real problem lies in the structure of the development environment.
        The project is divided into several different repositories, each with
        its own technologies: some use npm, others Gulp, others Grunt. Certain
        repositories require Node version 10 to install dependencies, while
        others need version 12 or 14. One of the repositories doesn't even
        install dependencies anymore! There's a ZIP file with the old
        node_modules folder to download from Google Drive. During installation,
        you find out you need a specific version of Ruby installed. It's
        chaotic, to say the least.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        You might wonder how it got to this point. Honestly, I’m not entirely sure —
        likely a combination of numerous developers cycling in and out of the project
        and, without a doubt, some management missteps along the way. And
        this is, obviously, an extreme case. However, dependency-related
        problems are incredibly common in JavaScript projects.
      </p>

      <h2 class="text-3xl mt-16 mb-8 font-bold text-[#212830] font-display">The trap of dependencies in JavaScript projects</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Keeping dependencies up to date is a constant challenge in large
        projects. Often, this task is postponed. It's hard to find time for it
        and even harder to justify the effort to other areas of the company, as
        it's rarely a deliverable that brings visible benefits to the client.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        However, sooner or later, this problem becomes unavoidable. In large
        JavaScript projects, everything seems to work fine until it doesn't.
        Then you find out you need to update a dependency, and that breaks
        another dependency. The infamous “callback hell” is nothing compared to
        “dependency update hell.” Even minor versions can break everything just
        as often as major versions — and the worst part is: you have no idea
        what broke.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The longer you take to confront this problem, the worse it gets and the
        greater the cost of fixing it.
      </p>

      <h2 class="text-3xl mt-16 mb-8 font-bold text-[#212830] font-display">Don't neglect the foundation of your software</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Many developers worry about code quality—and they should. However,
        refactoring code isn’t as difficult as it may seem. With a solid
        understanding of the business logic and a reliable suite of tests,
        you can refactor significant portions of your code with confidence.
        Even changing a project's architecture is often more straightforward
        than dealing with dependency updates in a poorly organized environment.
        Dependencies are always a challenge.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Don't neglect them. Take care of your dependencies from the start. Keep
        them organized, updated, and well-documented. They form the foundation
        of your software, and like any foundation, they must be strong enough to
        support the weight of what you build on top of it.
      </p>

      <?php foreach ($tags as $tag) {
          echo "#" . $tag;
      } ?>

      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <div class="flex justify-between space-x-4 text-sm uppercase font-sans font-medium tracking-widest">
        <div>
            <?php
            include_once "../constants/posts.php";
            include_once "../utils/utils.php";
            getPreviousPost($slug, $postsList);
            ?>
        </div>
        <div>
            <?php getNextPost($slug, $postsList); ?>
        </div>
      </div>

      <?php include_once "../includes/footer.php"; ?>
    </div>
  </body>
</html>
