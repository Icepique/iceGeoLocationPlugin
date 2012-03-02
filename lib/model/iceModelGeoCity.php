<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoCity.php';

/**
 * Skeleton subclass for representing a row from the 'geo_city' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoCity extends BaseiceModelGeoCity
{
  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'name_cyrillic' column
   */
  public function __toString()
  {
    return (string) $this->getName();
  }

  public function preSave(PropelPDO $con = null)
  {
    if ($this->getNameCyrillic() == $this->getGeoRegion()->getNameCyrillic())
    {
      $name = $this->getFullName('bg_BG');
    }
    else
    {
      $name = $this->getFullName('bg_BG') .' '. $this->getGeoRegion()->getFullName('bg_BG');
    }
    $this->setSlugCyrillic(Utf8::slugify($name, '-', false, false, 'n-a'));

    if ($this->getNameLatin() == $this->getGeoRegion()->getNameLatin())
    {
      $name = $this->getFullName('en_US');
    }
    else
    {
      $name = $this->getFullName('en_US') .' '. $this->getGeoRegion()->getFullName('en_US');
    }
    $this->setSlugLatin(Utf8::slugify($name, '-', false, false, 'n-a'));

    return parent::preSave($con);
  }

  public function getName($culture = null)
  {
    $culture = ($culture !== null) ? $culture : sfPropel::getDefaultCulture();

    return ($culture == 'bg_BG') ? $this->getNameCyrillic() : $this->getNameLatin();
  }

  public function getFullName($culture = null)
  {
    $culture = ($culture !== null) ? $culture : sfPropel::getDefaultCulture();

    switch ($this->getType())
    {
      case 'city':
        $abbr = ($culture == 'bg_BG') ? 'град' : 'city of';
        break;
      case 'village':
        $abbr = ($culture == 'bg_BG') ? 'село' : 'village of';
        break;
      case 'resort':
        $abbr = ($culture == 'bg_BG') ? 'к.к.' : 'resort of';
        break;
      case 'camping':
        $abbr = ($culture == 'bg_BG') ? 'камп.' : 'camping of';
        break;
      case 'locality':
        $abbr = ($culture == 'bg_BG') ? 'м-т' : 'locality of';
        break;
      case 'villas':
        $abbr = ($culture == 'bg_BG') ? 'вили' : 'villas of';
        break;
      default:
        $abbr = '';
        break;
    }

    $geo_name = ($culture == 'bg_BG') ? $this->getNameCyrillic() : $this->getNameLatin();

    return $abbr .' '. $geo_name;
  }

  public function getSlug($culture = null)
  {
    $culture = ($culture !== null) ? $culture : sfPropel::getDefaultCulture();

    return ($culture == 'bg_BG') ? $this->getSlugCyrillic() : $this->getSlugLatin();
  }
}
