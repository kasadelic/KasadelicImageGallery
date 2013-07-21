<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rotem
 * Date: 20/07/13
 * Time: 22:43
 * To change this template use File | Settings | File Templates.
 */
namespace Entities
{
    class Artist
    {
        private $id;
        private $name;

        public function __construct($idVal,$nameVal)
        {
            $this->id=$idVal;
            $this->name=$nameVal;
        }
    }

    class GalleryImage
    {
        private $id;
        private $name;

        public function __construct($idVal,$nameVal)
        {
            {
                $this->id=$idVal;
                $this->name=$nameVal;
            }
        }
        public function getName()
        {
            return $this->name;
        }
    }
}