from os import listdir
from os.path import dirname, isfile, join, realpath

dir_path = dirname(realpath(__file__))
posts_path = f"{dir_path}/../src/posts"
constants_path = f"{dir_path}/../src/constants"

posts_files = [f for f in listdir(posts_path) if isfile(join(posts_path, f))]

result = '<?php\nrequire __DIR__ . "/../utils/utils.php";\n\n$postsList = [\n'


def read_lines(r):
    line_number = 1
    current_result = "    createPost(\n"

    for line in r:
        # break the loop
        # does not save pt-br files on the list
        if line_number == 7:
            language = line
            if "pt-BR" in language:
                return ""

        if line_number in [2, 3, 4, 5, 6, 8]:
            division = line.find(" = ")
            key = line[:division].replace("$", "")

            if key == "draft" or key == "tags":
                value = line[division + 3 :].strip().replace(";", "")
                current_result += f"        {value},\n"
            else:
                value = (
                    line[division + 3 :]
                    .strip()
                    .replace(";", "")
                    .replace('"', "")
                    .replace("`", "")
                )
                current_result += f'        "{value}",\n'

        line_number += 1

    current_result += "    ),\n"
    return current_result


for post_file in posts_files:
    with open(f"{posts_path}/{post_file}", "r", encoding="utf-8") as reader:
        current_result = read_lines(reader)
        result += current_result

result += "];\n"
result += "\n"
result += "function cmp($a, $b)\n"
result += "{\n"
result += "    return strcmp($b->publishedAt, $a->publishedAt);\n"
result += "}\n"
result += "\n"
result += 'usort($postsList, "cmp");\n'
result += "?>\n"

with open(f"{constants_path}/posts.php", "w", encoding="utf-8") as writer:
    writer.write(result)
