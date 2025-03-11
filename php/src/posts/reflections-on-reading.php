<?php
$slug = "reflections-on-reading";
$title = "Reflections on Reading";
$subtitle = `A reader lives a thousand lives before he dies. The man who never reads lives only one.`;
$tags = ["life"];
$publishedAt = "2025-03-11";
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
            "A reader lives a thousand lives before he dies. The man who never reads lives only one." — George R.R. Martin.
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I live in Brazil. We are a country that doesn't read much. According to a recent survey, 53% of people haven't read even part of a book — whether printed or digital — of any genre, including textbooks, the Bible, and religious books, in the three months prior to the survey. And it gets worse: we lost about 6.7 million readers in the past year.
      </p>

      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I used to be part of that statistic. I hated books when I was younger. It wasn't until I turned 20 that I began cultivating a reading habit, a shift that profoundly transformed my life.
      </p>

      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">Why we don't read</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Our educational system is terrible. The way reading is presented to children is one of the main obstacles. During school, we read some classics of Brazilian literature. I'll never forget the first time I read "Vidas Secas" by Graciliano Ramos. I finished the book determined never to read again.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        The book isn't bad; it's fantastic. I read it again as an adult and loved it. However, it requires maturity to understand the conflicts and pain present in it. It's like reading Dostoevsky at the age of 12. Everything that makes the work a classic will go unnoticed, and the reading experience will probably be bad.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Experience matters, especially at the beginning. I like to make an analogy with sports: imagine taking your 12-year-old daughter surfing. Think of two scenarios:
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        In the first, you take her to the beach in the middle of winter, with dark water and strong waves. She'll get cold, suffer several falls, and come out of the water thinking she'll never surf again.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Now imagine taking her to a paradisiacal beach in the summer, with warm and clear water, and small, gentle waves (perfect for learning to surf). She'll definitely end the day counting the hours until she can return to the sea.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        We're talking about the same sport, but completely different experiences.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        At the beginning, the only goal should be to instill a joy for reading. Show that it can be both pleasurable and engaging. In this way, the habit is developed much more easily. And at the right time, that person will probably reach the classics.
      </p>

      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">Reading, like writing, demands practice</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I remember when I started reading "The Age of Assassins" by Vladimir Pribylovisky for the first time. At that time, my reading was limited to fiction thrillers, authors like Harlan Coben and Michael Connelly. But I found this book at my mother's house and started reading it.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        It's a dense book, difficult to read. I remember getting halfway through and giving up. However, after about a year, I started reading it again and finished it.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        What changed between one attempt and another? My reading changed. My ability to concentrate, analyze, and focus improved. All this was due to practice. Reading, like writing, demands practice. The fact that you know how to write doesn't mean you'll be able to write a good article. The fact that you know how to read doesn't mean you'll be able to finish a complex book.
      </p>

      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">The number of books you read doesn't matter</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Don't let reading become a fetish. In a country with few readers, reading five books is already considered a great achievement. If you read 40, 50 books in a year, you're practically considered an intellectual. And this affects your ego. When you realize it, you're reading just to tell others that you've read many books.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Anyone who likes to read, picking up only simple suspense books, can easily read 50, 60 books in a year. It's a lot, but what do you learn from those books? Nothing! You don't become smarter with their content.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I'm not against reading suspense books; I also read them, but they're just entertainment. You don't acquire knowledge from them. It's better to read two excellent books in a year than to read 50 mediocre ones that are currently popular. Nobody will praise you for it, nor will you be considered a great intellectual, but you'll become a better person by the end of that year.
      </p>

      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">Impact of reading on your development</h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        I don't know where I would be without the books I've read. With all my flaws, I'm proud of the person I've become, and looking back, that person wouldn't exist without the knowledge I acquired through reading. Reading deepens our knowledge and perspective on the world and about ourselves. It allows us to see things from different angles, understand the complexities of life better, and reflect on our own experiences.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Recently, I re-read "Crime and Punishment" by Dostoevsky. Talking to a friend, the question arose about why I had read the same book again. Of course, we always want to revisit great books, especially as our memories fade over time. However, the main reason is that reading Dostoevsky at 20 is different from reading Dostoevsky at 40. Although the book remains the same, you are no longer the same person. You have changed, and so has the way you perceive and reflect on its events.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        This ability to evolve and reflect is even more valuable when considering the improvement in our critical analysis and reflective thinking. By reading about various experiences and ideas, we are able to question and evaluate the information presented to us better. This helps us navigate the world with more wisdom and discernment.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        In a world increasingly dominated by social media, where information is abundant but often superficial, reading has become a necessity. It is not merely a pastime but a journey of self-discovery and intellectual growth. It empowers us to navigate an increasingly complex world with clarity and wisdom, offering a refuge from the noise and a path to deeper understanding.
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
