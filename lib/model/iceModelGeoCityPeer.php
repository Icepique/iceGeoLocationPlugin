<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoCityPeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'geo_city' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoCityPeer extends BaseiceModelGeoCityPeer
{
  public static function retrieveBySlug($slug, $culture = null)
  {
    if ($culture === null)
    {
      $culture = sfPropel::getDefaultCulture();
    }

    $city_slug = $slug;
    $region_slug = null;
    
    foreach (array('град', 'city', 'област', 'region') as $separator)
    {
      $parts = explode($separator.'-', $city_slug);
      $parts = array_filter($parts);
      $parts = array_values($parts);
      
      $city_slug = trim($parts[0], '-');
      $region_slug = isset($parts[1]) ? trim($parts[1], '-') : $region_slug;
    }

    $name_field = $culture == 'bg_BG' ? self::NAME_CYRILLIC : self::NAME_LATIN;

    $c = new Criteria();
    $c->add($name_field, "REPLACE(". $name_field. ", ' ', '-') = '". mysql_escape_string($city_slug) ."'", Criteria::CUSTOM);
    
    if ($region_slug !== null && $geo_region = GeoRegionPeer::retrieveBySlug($region_slug, $culture))
    {
      $c->add(self::GEO_REGION_ID, $geo_region->getId());
    }

    return self::doSelectOne($c);
  }
}
