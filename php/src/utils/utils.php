<?php
class Post
{
    public $slug;
    public $title;
    public $subtitle;
    public $tags;
    public $publishedAt;
    public $draft;
}

function createPost($slug, $title, $subtitle, $tags, $publishedAt, $draft)
{
    $post = new Post();
    $post->slug = $slug;
    $post->title = $title;
    $post->subtitle = $subtitle;
    $post->tags = $tags;
    $post->publishedAt = $publishedAt;
    $post->draft = $draft;
    return $post;
}

function getPreviousPost($currentPostSlug, $postsList)
{
    for ($i = 0; $i <= count($postsList) - 1; $i++) {
        if ($postsList[$i]->slug == $currentPostSlug and $i < count($postsList) - 1) {
            echo '
            <a
                href="/blog/' .
                $postsList[$i + 1]->slug .
                '"
                class="hover:text-[#475763] transition-all"
            >
                ← ' .
                $postsList[$i + 1]->title .
                '
            </a>';
        }
    }
}

function getNextPost($currentPostSlug, $postsList)
{
    for ($i = 0; $i <= count($postsList) - 1; $i++) {
        if ($postsList[$i]->slug == $currentPostSlug and $i > 0) {
            echo '
            <a
                href="/blog/' .
                $postsList[$i - 1]->slug .
                '"
                class="hover:text-[#475763] transition-all"
            >
                ' .
                $postsList[$i - 1]->title .
                ' →
            </a>';
        }
    }
}

function formatDate($date)
{
    $data = new DateTime($date);
    return $data->format("F j, Y");
}
?>
