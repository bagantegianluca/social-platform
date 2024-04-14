<?php
class Post
{
    public function __construct(public int $id, public string $title, public DateTime $date, public int $likes, public string $username, public array $tags, public array $media)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->likes = $likes;
        $this->username = $username;
        $this->tags = $tags;
        $this->media = $media;
    }

    // Getters
    public function getPostId()
    {
        return $this->id;
    }

    public function getPostTitle()
    {
        return $this->title;
    }

    public function getPostDate()
    {
        return $this->date;
    }

    public function getPostLikes()
    {
        return $this->likes;
    }

    public function getPostUsername()
    {
        return $this->username;
    }

    public function getPostTags()
    {
        return $this->tags;
    }

    public function getPostMedia()
    {
        return $this->media;
    }
}
