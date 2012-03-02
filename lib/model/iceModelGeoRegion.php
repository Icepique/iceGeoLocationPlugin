<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoRegion.php';


/**
 * Skeleton subclass for representing a row from the 'geo_region' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoRegion extends BaseiceModelGeoRegion
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
    $slug = Utf8::slugify($this->getNameCyrillic(), '-', false, false, 'n-a');
    $this->setSlugCyrillic($slug);

    $slug = Utf8::slugify($this->getNameLatin(), '-', false, false, 'n-a');
    $this->setSlugLatin($slug);

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

    $name = $this->getName($culture);
    $abbr = ($culture == 'bg_BG') ? 'област' : 'region of';

    return $abbr .' '. $name;
  }

  public function getSlug($culture = null)
  {
    $culture = ($culture !== null) ? $culture : sfPropel::getDefaultCulture();

    return ($culture == 'bg_BG') ? $this->getSlugCyrillic() : $this->getSlugLatin();
  }
}
