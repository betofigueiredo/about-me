import re
from os import listdir
from os.path import dirname, isfile, join, realpath

dir_path = dirname(realpath(__file__))

raw_posts_path = f"{dir_path}/../src/raw-posts"
raw_posts_files = [
    f.replace(".md", "")
    for f in listdir(raw_posts_path)
    if isfile(join(raw_posts_path, f))
]

processed_posts_path = f"{dir_path}/../src/posts"
processed_posts_files = [
    f.replace(".php", "")
    for f in listdir(processed_posts_path)
    if isfile(join(processed_posts_path, f))
]

new_posts = [f for f in raw_posts_files if f not in processed_posts_files]


for raw_post_file in new_posts:
    with open(
        f"{raw_posts_path}/{raw_post_file}.md", "r", encoding="utf-8"
    ) as reader:
        line_number = 1
        slug = ""
        result = "<?php\n"

        for line in reader:
            # title and slug
            if line_number == 1:
                title = line[2:-1]
                slug = title.replace(" ", "-").lower()
                result += f'$slug = "{slug}";\n'
                result += f'$title = "{title}";\n'

            # subtitle
            elif line_number == 3:
                subtitle = line[:-1]
                result += f"$subtitle = `{subtitle}`;\n"

            # tags
            elif line_number == 5:
                tags = line[:-1]
                result += f"$tags = {tags};\n"

            # publishedAt
            elif line_number == 7:
                published_at = line[:-1]
                result += f'$publishedAt = "{published_at}";\n'

            # language
            elif line_number == 9:
                language = line[:-1]
                result += f'$language = "{language}";\n'

            # add html and php tags
            elif line_number == 10:
                result += "$draft = false;\n"
                result += "\n"
                result += 'include_once "../constants/posts.php";\n'
                result += 'include_once "../utils/utils.php";\n'
                result += "?>\n\n"
                result += "<!doctype html>\n"
                result += '<html lang="en">\n'
                result += "  <head>\n"
                result += '    <meta charset="UTF-8" />\n'
                result += '    <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32" />\n'
                result += (
                    '    <link rel="apple-touch-icon" href="/favicon.png">\n'
                )
                result += '    <meta name="viewport" content="width=device-width, initial-scale=1.0" />\n'
                result += (
                    '    <meta name="author" content="Beto Figueiredo" />\n'
                )
                result += '    <meta name="description" content="<?php echo $subtitle; ?>">\n'
                result += "\n"
                result += '    <meta property="og:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">\n'
                result += '    <meta property="og:type" content="website">\n'
                result += '    <meta property="og:title" content="<?php echo $title; ?> | Beto Figueiredo">\n'
                result += '    <meta property="og:description" content="<?php echo $subtitle; ?>">\n'
                result += '    <meta property="og:image" content="/assets/images/<?php echo $slug; ?>-cover.jpg">\n'
                result += "\n"
                result += '    <meta name="twitter:card" content="summary_large_image">\n'
                result += '    <meta property="twitter:domain" content="betofigueiredo.com">\n'
                result += '    <meta property="twitter:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">\n'
                result += '    <meta name="twitter:title" content="<?php echo $title; ?> | Beto Figueiredo">\n'
                result += '    <meta name="twitter:description" content="<?php echo $subtitle; ?>">\n'
                result += '    <meta name="twitter:image" content="/assets/images/<?php echo $slug; ?>-cover.jpg">\n'
                result += "\n"
                result += "    <title><?php echo $title; ?> | Beto Figueiredo</title>\n"
                result += (
                    '    <?php include_once "../includes/assets.php"; ?>\n'
                )
                result += "  </head>\n"
                result += "\n"
                result += "  <body>\n"
                result += '    <div class="container px-5 mx-auto text-left">\n'
                result += (
                    '      <?php include_once "../includes/menu.php"; ?>\n'
                )
                result += "\n"
                result += '      <p class="mt-24 text-center text-sm text-gray-700 tracking-wider">\n'
                result += "        <?php echo formatDate($publishedAt); ?>\n"
                result += "      </p>\n"
                result += '      <h1 class="md:text-8xl md:leading-[1.1] text-5xl mt-8 mb-14 text-[#212830] font-display text-center">\n'
                result += "        <?php echo $title; ?>\n"
                result += "      </h1>\n"

            # quote
            elif line_number == 11:
                quote = line[2:-1]
                result += '      <div class="my-12 text-center">\n'
                result += '        <em class="relative text-xl leading-7 text-[#212830] font-serif">\n'
                result += f"          {quote}\n"
                result += '          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>\n'
                result += "        </em>\n"
                result += "      </div>\n"
                result += '      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>\n'

            else:
                content = line[:-1]
                # replace links
                content = re.sub(
                    r"\[([^\]]+)\]\(([^)]+)\)",
                    r'<a href="\2" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">\1</a>',
                    content,
                )
                is_paragraph = content != "" and content[0] != "#"
                is_subtitle = content != "" and content[0] == "#"
                if is_subtitle:
                    result += '      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">\n'
                    result += f"        {content[3:]}\n"
                    result += "      </h2>\n"
                elif is_paragraph:
                    result += '      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">\n'
                    result += f"        {content}\n"
                    result += "      </p>\n"

            line_number += 1

        result += "\n"
        result += "      <?php foreach ($tags as $tag) {\n"
        result += '        echo "#" . $tag;\n'
        result += "      } ?>\n"
        result += "\n"
        result += '      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>\n'
        result += '      <div class="flex justify-between space-x-4 text-sm uppercase font-sans font-medium tracking-widest">\n'
        result += "        <div>\n"
        result += "          <?php getPreviousPost($slug, $postsList); ?>\n"
        result += "        </div>\n"
        result += "        <div>\n"
        result += "          <?php getNextPost($slug, $postsList); ?>\n"
        result += "        </div>\n"
        result += "      </div>\n"
        result += "\n"
        result += '      <?php include_once "../includes/footer.php"; ?>\n'
        result += "    </div>\n"
        result += "  </body>\n"
        result += "</html>\n"

        constants_path = f"{dir_path}/../src/posts"
        with open(
            f"{constants_path}/{slug}.php", "w", encoding="utf-8"
        ) as writer:
            writer.write(result)
