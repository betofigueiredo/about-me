from os import listdir
from os.path import dirname, isfile, join, realpath

dir_path = dirname(realpath(__file__))
posts_path = f"{dir_path}/../src/posts"
constants_path = f"{dir_path}/../src/constants"

posts_files = [f for f in listdir(posts_path) if isfile(join(posts_path, f))]

result = "<?php\nrequire __DIR__ . '/../utils/utils.php';\n\n$postsList = array(\n"

for post_file in posts_files:
    with open(f"{posts_path}/{post_file}", "r", encoding="utf-8") as reader:
        line_number = 1
        result += "  createPost(\n"

        for line in reader:
            if line_number in [2, 3, 4, 5, 6, 7]:
                division = line.find(" = ")
                key = line[:division].replace("$", "")

                if key == "draft" or key == "tags":
                    value = line[division + 3 :].strip().replace(";", "")
                    result += f"    {value},\n"
                else:
                    value = (
                        line[division + 3 :].strip().replace(";", "").replace('"', "").replace('`', "")
                    )
                    result += f'    "{value}",\n'

            line_number += 1
        result += "  ),\n"

result += ");\n"
result += "\n"
result += "?>"

with open(f"{constants_path}/posts.php", "w", encoding="utf-8") as writer:
    writer.write(result)
