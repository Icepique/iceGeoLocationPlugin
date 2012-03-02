<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoStreet.php';

/**
 * Skeleton subclass for representing a row from the 'ice_geo_street' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoStreet extends BaseiceModelGeoStreet
{
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

  public function getSlug($culture = null)
  {
    $culture = ($culture !== null) ? $culture : sfPropel::getDefaultCulture();

    return ($culture == 'bg_BG') ? $this->getSlugCyrillic() : $this->getSlugLatin();
  }
}
