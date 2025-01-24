<?php
class Post {
  public $slug;
  public $title;
  public $subtitle;
  public $tags;
  public $publishedAt;
  public $draft;
}

function createPost(
  $slug,
  $title,
  $subtitle,
  $tags,
  $publishedAt,
  $draft,
) {
  $post = new Post();
  $post->slug = $slug;
  $post->title = $title;
  $post->subtitle = $subtitle;
  $post->tags = $tags;
  $post->publishedAt = $publishedAt;
  $post->draft = $draft;
  return $post;
}
?>
