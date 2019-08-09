<?php

class Post
{
    protected $title;
    protected $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle()
    {
        echo $this->title;
    }

    public function getDescription()
    {
        echo $this->description;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

class Lesson extends Post
{
    private $homework;

    public function __construct($title, $description, $homework)
    {
        parent::__construct($title, $description);
        $this->homework = $homework;
    }

    public function setHomework($homework)
    {
        $this->homework = $homework;
    }

    public function getHomework()
    {
        echo $this->homework;
    }
}

$less1 = new Lesson("Заголовок", "Описание урока и все такое прочее", "Домашка");

$less1->setHomework(" Ни фига не домашка");
$less1->getHomework();