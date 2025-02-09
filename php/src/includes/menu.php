<?php
$location = $_SERVER["REQUEST_URI"]; ?>

<div class="text-center mb-14">
  <?php if ($location != "/") {
      echo '<div class="mt-8 mb-5 font-display text-center text-xl text-[#575757]">Beto Figueiredo</div>';
  } else {
      echo '<div class="h-20"></div>';
  } ?>
  <ul class="flex justify-center space-x-1 md:space-x-4 text-xs md:text-sm uppercase font-sans font-medium tracking-widest">
    <li class="relative">
      <a href="/" class={homeClass}>
        Home
      </a>
      <?php if ($location == "/") {
          echo '<div class="absolute w-full h-2 bg-[#FFFF81] -mt-2 -z-10"></div>';
      } ?>
    </li>
    <li class="text-[#C7C7C7]">/</li>
    <li class="relative">
      <a href="/blog" class={blogClass}>
        blog
      </a>
      <?php if (str_starts_with($location, "/blog")) {
          echo '<div class="absolute w-full h-2 bg-[#FFFF81] -mt-2 -z-10"></div>';
      } ?>
    </li>
    <li class="text-[#C7C7C7]">/</li>
    <li class="relative">
      <a href="/about" class={aboutClass}>
        About
      </a>
      <?php if (str_starts_with($location, "/about")) {
          echo '<div class="absolute w-full h-2 bg-[#FFFF81] -mt-2 -z-10"></div>';
      } ?>
    </li>
    <li class="text-[#C7C7C7]">/</li>
    <li>
      <a
        href="https://github.com/betofigueiredo"
        target="_blank"
        rel="noopener"
        class={`${baseClass} text-[#48515A]`}
      >
        Github
      </a>
    </li>
    <li class="text-[#C7C7C7]">/</li>
    <li>
      <a
        href="https://www.linkedin.com/in/betof/"
        target="_blank"
        rel="noopener"
        class={`${baseClass} text-[#48515A]`}
      >
        LinkedIn
      </a>
    </li>
  </ul>
</div>
