<?php

class ad 
{
    private string $title, $email, $category, $description;

    public function __construct(string $title, string $email, string $category,string $description) 
    {
        $this->title = $title;
        $this->email = $email;
        $this->category = $category;
        $this->description = $description;
    }
    public function getTitle() 
    {
        return $this->title;
    }
    public function getEmail() 
    {
        return $this->email;
    }
    public function getCategory() 
    {
        return $this->category;
    }
    public function getDescription() 
    {
        return $this->description;
    }
}  