<?php

/**
 * Links
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Links extends BaseLinks
{
    public function getSeasonEpisode() {
        return 's'.$this->getSeason().'e'.$this->getEpisode();
    }

}