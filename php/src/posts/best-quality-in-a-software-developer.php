<?php
$slug = "best-quality-in-a-software-developer";
$title = "Best quality in a software developer";
$subtitle = "If you were hiring a developer today, what would be the primary quality you'd look for in that person?";
$tags = array("work");
$publishedAt = "January 3, 2025";
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
    <meta name="description" content="Senior Software Developer / JavaScript & Python Specialist / Go Enthusiast">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://betofigueiredo.com/blog/best-quality-in-a-software-developer">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Beto Figueiredo">
    <meta property="og:description" content="Senior Software Developer / JavaScript & Python Specialist / Go Enthusiast">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="betofigueiredo.com">
    <meta property="twitter:url" content="https://betofigueiredo.com/blog/best-quality-in-a-software-developer">
    <meta name="twitter:title" content="Beto Figueiredo">
    <meta name="twitter:description" content="Senior Software Developer / JavaScript & Python Specialist / Go Enthusiast">
    <meta name="twitter:image" content="">
    <title><?php echo $title; ?> | Beto Figueiredo</title>
    <?php include_once('../includes/assets.php'); ?>
  </head>

  <body>
    <div class="container mx-auto text-left">
      <?php include_once('../includes/menu.php'); ?>

      <p class="mt-24 text-center text-sm text-gray-700 tracking-wider">
        <?php echo $publishedAt; ?>
      </p>
      <h1 class="md:text-8xl md:leading-[1.1] text-3xl mt-8 mb-14 font-bold text-[#212830] font-display text-center">
        <?php echo $title; ?>
      </h1>
      <div class="my-12 text-center">
        <em class="relative text-xl leading-7 text-[#212830] font-serif">
          "Deciding what not to do is as important as deciding what to do." — Steve Jobs.
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        If you were hiring a developer today, what would be the primary quality
        you'd look for in that person? What characteristic do you consider
        essential?
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Many people emphasize adaptability and the ability to reinvent oneself
        constantly. While that's an important trait, in my view, one of the most
        significant quality in a developer is 
        <strong>the ability to analyze cost versus benefit</strong>. In short,
        the ability to make good decisions.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Consider the following scenario: you come across a completely
        disorganized file, with multiple issues, and full of low-quality code.
        Refactoring that file comes at a cost, but many people calculate this
        cost incorrectly, focusing only on the time it would take them
        personally to complete the task. For instance, if refactoring the code
        would take four hours, is it reasonable to assume the total cost is just
        four hours?
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        No. After the refactoring, other developers will need to review your
        changes. It's likely you'll need to make additional adjustments based on
        their feedback. Moreover, the QA team will have to test all the flows
        affected by the modifications, and there's always the risk of
        introducing a new bug that could impact the end user.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        How is your team doing right now? Do they have the time to handle this
        extra work? Is this the right moment to undertake such a refactor? A
        good developer must be able to assess these factors, considering not
        just their work but the broader context of the team and the company.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Another example is choosing technologies for a new project. Many
        developers pick something they want to work with or whatever is trending
        at the moment. They focus on their preferences rather than the company's
        context. When selecting a technology, various factors need to be taken
        into account: Is it well-established? Is it easy to hire developers to
        work with this technology? Is it truly the best solution for the problem
        your team is currently facing?
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Once again, analyzing the broader context is crucial, yet many
        developers overlook this. I always perform an exercise when I need to
        make a more comprehensive assessment: If this were my company, what
        would I do?
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        We make decisions like these every day. It's critically important to
        evaluate the broader context of each situation. Only then can we make
        better decisions.
      </p>

      <?php
      foreach ($tags as $tag) {
        echo "#" . $tag;
      }
      ?>

      <?php include_once('../includes/footer.php'); ?>
    </div>
  </body>
</html>
