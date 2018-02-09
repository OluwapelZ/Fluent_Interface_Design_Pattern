<?php
/**
 * Created by PhpStorm.
 * User: oluwapelumi.olaoye
 * Date: 2/9/18
 * Time: 1:51 AM
 */

use \App\FluentI\Movies;

class Ventura
{
    /**
     * GEt and instance of Movies and build in your details.
     * Then save the author of the movie.
     */
    public function getAuthor()
    {

        $movie = new Movies('The Foreigner');

        $saveAuthor = $movie->setAuthor('Pelumi')
            ->setDirector('I think I aslo directed the movie')
            ->setAbstract('Jackie Chan was the lead role of the movie and it was lit')
            ->save();

        /**
         * Based on you preference, you can then var_dump saveAuthor
         * And exit;
         * Thanks for following.
         * If you have any question please add an issue and I'll get back to you as soon as I'm back from the jungle.
         */
    }

}