<?php

namespace SlugBundle\Service;


/**
 * Class Slug
 * @package SlugBundle\Service
 */
class Myservice
{
    /**
     * Retourne le titre en slug
     * @return String
     */
    public function getSlug (string $title):string
    {
         $lowerTitle = strtolower($title);
         $slug = str_replace(' ', '-', $lowerTitle);
         return $slug;
    }
}

