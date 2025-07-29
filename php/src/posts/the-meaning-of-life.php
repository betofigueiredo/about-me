<?php
$slug = "the-meaning-of-life";
$title = "The Meaning of Life";
$subtitle = `"He who has a why to live can bear almost any how." Friedrich Nietzsche`;
$tags = ["life"];
$publishedAt = "2025-07-12";
$language = "en-US";
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
    <div class="container px-5 mx-auto text-left">
      <?php include_once "../includes/menu.php"; ?>

      <p class="mt-24 text-center text-sm text-gray-700 tracking-wider">
        <?php echo formatDate($publishedAt); ?>
      </p>
      <h1 class="md:text-8xl md:leading-[1.1] text-5xl mt-8 mb-14 text-[#212830] font-display text-center">
        <?php echo $title; ?>
      </h1>
      <div class="my-12 text-center">
        <em class="relative text-xl leading-7 text-[#212830] font-serif">
          "He who has a why to live can bear almost any how." Friedrich Nietzsche
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        <i class="text-center w-full text-base">🇧🇷 <a href="/blog/o-sentido-da-vida" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">Portuguese version</a></i>
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        A few weeks ago, I watched a documentary about mental health in extreme sports (<a href="https://www.youtube.com/watch?v=zBCxypVJIN8&ab_channel=DirtyHabits" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">here</a>). The story followed a successful American kite surfer — sponsorships, travels, the so-called "dream life" that feeds Instagram feeds. But then, one day, panic attacks and depression arrived. The documentary is interesting, but it only scratches the surface of something much deeper.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        The Illusion of Pleasure
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Just six minutes in, the athlete laments how his favorite sport became work: "You have to perform, you can't just enjoy regardless. Because that's what life is really supposed to be, just enjoying the process."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Here lies the problem. Life isn't just about that.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        As G.K. Chesterton wisely observed: a society that only seeks fun won't have fun for long. It's a truth that cuts deep. When we live only for pleasure, we build sandcastles. True achievements require sacrifice — and it's precisely in sacrifice that we find meaning.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        We all know the good feeling of starting something new. It's exciting, fun. But over time, things start getting difficult. If you really want to build something real, you need to persist when the fun ends.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Pressure
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        In another segment of the documentary, the athlete mentions pressure from sponsors. This reminded me of a story Shaquille O'Neal told about his father. After a loss to the Knicks, Shaq received a call: "Show up at my house at 5 AM."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        His father took him on a car ride until they stopped near an overpass, where a homeless family lived in a makeshift tent.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        "What happened in the game yesterday?" asked the father.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        "I felt the pressure," Shaq replied.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        At that moment, the father pointed to the family: "That's pressure. Losing a game where, even after the defeat, you'll still receive your million-dollar salary, isn't pressure. Not knowing if you'll be able to feed your children — that's pressure."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Real pressure doesn't come from expectations about ourselves, but from responsibilities toward others.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Purpose Beyond Yourself
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        All of this made me think of two other athletes: surfer Adriano de Souza and jiu-jitsu fighter Gutemberg Pereira. In a recent conversation, when asked about his dreams and goals, Gutemberg responded that his greatest dream had already been fulfilled. Surprisingly, it wasn't a world title or professional recognition, but something much deeper: "I bought a house for my mother."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Adriano expressed something similar. After winning a stage of the world tour, when asked what he would do with the prize money, he mentioned having fulfilled his dream of giving his mother a house.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Why don't these men succumb to depression? Why do they remain strong while others, with far more resources and freedom, fall apart?
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The difference is that they've taken on responsibilities that transcend their own interests. We all need this kind of purpose. The fundamental problem with pursuing mere happiness is its fragility — when life's storms appear, happiness disappears. We need something deeper. It's the responsibilities we assume toward others that provide us with the strength to overcome adversities.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        The Power of Sacrifice
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The kite surfer in the documentary was lost because he had only himself as a reference point. Without a "why" that justified the effort, every difficulty became unbearable. When you live only for yourself, every obstacle becomes a personal affront.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I deeply believe in the concept of duty. We live in a society obsessed with rights, but which frequently neglects its duties. We discuss extensively what we like or want to do, but rarely what we ought to do.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        But how do we identify our true duties? Reflecting on this question, I realized that the question was poorly formulated from the start. The crucial point isn't "why" we do something, but "for whom" we do it.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Nietzsche was right, but I would add: the most powerful why isn't an abstract concept, it's a concrete person. It's the mother who needs the house, the child who needs the father, the wife who needs the husband. When we have someone to fight for, every obstacle becomes a test of character. Sacrifice ceases to be suffering and becomes purpose.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The meaning of life isn't about being happy. It's about being useful to someone who matters more than yourself.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        This principle is beautifully illustrated in an episode of The Simpsons. Homer worked at the nuclear plant and deeply hated his job. When he finally managed to save enough money, he decided to fulfill his dream of leaving the plant and working at a bowling alley, where he felt truly happy.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        However, the happiness was short-lived. Marge discovered she was pregnant again, which meant the family would need more money and financial stability. Reluctantly, Homer was forced to leave his dream job at the bowling alley and return to the detested nuclear plant to support the growing family.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        At the end of the episode, Homer is happy with his family, and his children ask: if he's so happy with the new daughter, why doesn't he have any pictures of her? The ending needs to be watched to be fully understood.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Here's a condensed 3-minute version. Watch it, it's worth it: <a href="https://www.youtube.com/watch?v=x2mS3uDqQL4&ab_channel=ThingsICantFindOtherwise" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">https://www.youtube.com/watch?v=x2mS3uDqQL4&ab_channel=ThingsICantFindOtherwise</a>
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
