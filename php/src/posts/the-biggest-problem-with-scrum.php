<?php
$slug = "the-biggest-problem-with-scrum";
$title = "The Biggest Problem with Scrum";
$subtitle = `You can do everything right and still feel like you’ve lost.`;
$tags = ["work"];
$publishedAt = "2025-02-09";
$draft = false;

include_once "../constants/posts.php";
include_once "../utils/utils.php";
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
    <meta property="og:image" content="/assets/images/<?php echo $slug; ?>-cover.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="betofigueiredo.com">
    <meta property="twitter:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?> | Beto Figueiredo">
    <meta name="twitter:description" content="<?php echo $subtitle; ?>">
    <meta name="twitter:image" content="/assets/images/<?php echo $slug; ?>-cover.jpg">

    <title><?php echo $title; ?> | Beto Figueiredo</title>
    <?php include_once "../includes/assets.php"; ?>
  </head>

  <body>
    <div class="container mx-auto text-left">
      <?php include_once "../includes/menu.php"; ?>

      <p class="mt-24 text-center text-sm text-gray-700 tracking-wider">
        <?php echo formatDate($publishedAt); ?>
      </p>
      <h1 class="md:text-8xl md:leading-[1.1] text-3xl mt-8 mb-14 font-bold text-[#212830] font-display text-center">
        <?php echo $title; ?>
      </h1>
      <div class="my-12 text-center">
        <em class="relative text-xl leading-7 text-[#212830] font-serif">
          "You can do everything right and still feel like you’ve lost."
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Despite its near-ubiquitous presence in the tech world, Scrum often fails to deliver the promised efficiency in practice. Endless meetings, inaccurate estimates, and relentless pressure—rather than fostering creativity, they drain motivation. These challenges are well known to anyone working with Scrum, but there’s an even more troubling issue, one deeply tied to estimation: <strong>the persistent feeling of failure at the end of nearly every sprint</strong>.
      </p>

      <h2 class="text-4xl mt-16 mb-8 font-bold text-[#212830] font-display">Software Development Estimations are hard</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Estimating the time required for tasks in a small software project is relatively simple. There are fewer features, and the team has a solid understanding of the codebase and business rules. Challenges are easier to predict, and uncertainty is minimal when implementing new features or fixing bugs.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        However, as projects grow, complexity increases exponentially. Many variables come into play—obscure business rules, legacy code written by people who have long since left the company, and uncertainty about the full extent of necessary changes make estimation a daunting task.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        In this environment of uncertainty, teams are expected to precisely estimate the time for each small task and fit everything into the next two-week sprint. The result? <strong>They get the estimates wrong</strong>.
      </p>

      <h2 class="text-4xl mt-16 mb-8 font-bold text-[#212830] font-display">The Feeling of Failure</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        It’s natural to feel disappointed when a project is poorly executed. If there’s a valid reason, you should reflect on it and aim for improvement. However, it’s concerning to see teams that worked tirelessly for two weeks, delivering 95% of the planned work with high quality, yet still feel like they failed—just because the remaining 5% wasn’t completed.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        In most cases, taking an extra day or two to finish that last 5% has no real impact on the end user. But flawed planning does have a significant impact on the team.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I've lost count of how many sprints ended with teams feeling demoralized over minor unfinished tasks, despite having put in tremendous effort. They shouldn’t feel that way. There’s always room for improvement, but it’s equally important to recognize and appreciate the hard work and progress made—even in the face of unexpected challenges.
      </p>

      <h2 class="text-4xl mt-16 mb-8 font-bold text-[#212830] font-display">Focus on outcomes</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        There’s a popular saying: "Focus on the process, not the outcome." This is great advice when building habits, like exercising regularly or learning a new skill. In those cases, sticking to the process naturally leads to results over time.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        But in software development, the opposite is often true. A team's success shouldn’t be measured by how strictly it follows a process, but by the value it delivers. Processes should adapt to the company size, culture, and team structure. What works well in one setting might be a disaster in another.
      </p>

      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The real issue with Scrum isn’t just its meetings or flawed estimates—it’s the way many teams follow it blindly, without questioning whether it actually helps. The goal should never be "doing Scrum correctly." The goal should be delivering meaningful results in a sustainable way.
      </p>

      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        So don’t let rigid processes stifle your team or drain its motivation. Challenge them, adapt them, and most importantly—focus on delivering real value.
      </p>

      <?php foreach ($tags as $tag) {
          echo "#" . $tag;
      } ?>

      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <div class="flex justify-between space-x-4 text-sm uppercase font-sans font-medium tracking-widest">
        <div>
            <?php getPreviousPost($slug, $postsList); ?>
        </div>
        <div>
            <?php getNextPost($slug, $postsList); ?>
        </div>
      </div>

      <?php include_once "../includes/footer.php"; ?>
    </div>
  </body>
</html>
