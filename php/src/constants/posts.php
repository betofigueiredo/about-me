<?php
require __DIR__ . "/../utils/utils.php";

$postsList = [
    createPost(
        "best-quality-in-a-software-developer",
        "Best Quality in a Software Developer",
        "If you were hiring a developer today, what would be the primary quality you'd look for in that person?",
        ["work"],
        "2025-01-03",
        false,
    ),
    createPost(
        "the-biggest-problem-with-scrum",
        "The Biggest Problem with Scrum",
        "You can do everything right and still feel like you’ve lost.",
        ["work"],
        "2025-02-09",
        false,
    ),
    createPost(
        "reflections-on-reading",
        "Reflections on Reading",
        "A reader lives a thousand lives before he dies. The man who never reads lives only one.",
        ["life"],
        "2025-03-11",
        false,
    ),
    createPost(
        "the-meaning-of-life",
        "The Meaning of Life",
        "He who has a why to live can bear almost any how. Friedrich Nietzsche",
        ["life"],
        "2025-07-12",
        false,
    ),
    createPost(
        "be-careful-about-your-dependencies",
        "Be Careful About Your Dependencies",
        "The tragedy of an old Node project and the trap of dependencies in JavaScript projects.",
        ["work"],
        "2025-01-18",
        false,
    ),
];

function cmp($a, $b)
{
    return strcmp($b->publishedAt, $a->publishedAt);
}

usort($postsList, "cmp");
?>
