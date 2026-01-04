<?php
require __DIR__ . "/../utils/utils.php";

$postsList = [
    createPost(
        "take-responsibility",
        "Take Responsibility",
        "What matters is not what happens to us, but how we respond to what happens to us. — Jean-Paul Sartre",
        ["life"],
        "2026-01-02",
        false,
    ),
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
        "throw-away-your-mvp",
        "Throw Away Your MVP",
        "If you are not embarrassed by the first version of your product, you've launched too late. — Reid Hoffman",
        ["work"],
        "2026-01-04",
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
    createPost(
        "reflections-on-reading",
        "Reflections on Reading",
        "A reader lives a thousand lives before he dies. The man who never reads lives only one.",
        ["life"],
        "2025-03-11",
        false,
    ),
];

function cmp($a, $b)
{
    return strcmp($b->publishedAt, $a->publishedAt);
}

usort($postsList, "cmp");
?>
