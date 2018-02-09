<?php
/**
 * Created by PhpStorm.
 * User: oluwapelumi.olaoye
 * Date: 2/9/18
 * Time: 1:48 AM
 */

namespace App\FluentI;

class Movies
{
    public $name;
    public $author;
    public $director;
    public $abstract;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function setAbstract($abstract) {

        $this->abstract = $abstract;
        return $this;
    }

    public function setDirector($director)
    {
        $this->director = $director;
        return $this;
    }

    public function save()
    {
        // save movie author
        return $this->author;
    }

}