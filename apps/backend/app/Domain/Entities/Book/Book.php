<?php

namespace App\Domain\Entities\Book;


class Book
{
    private string $id;
    private string $title;
    private string $author;
    private ?string $description;

    public function __construct(string $id, string $title, string $author, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
