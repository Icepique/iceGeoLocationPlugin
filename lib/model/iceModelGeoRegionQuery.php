<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoRegionQuery.php';


/**
 * Skeleton subclass for performing query and update operations on the 'geo_region' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoRegionQuery extends BaseiceModelGeoRegionQuery
{
  private static $_maxmind_regions = array(
    33 => 12,
    38 => 1,
    39 => 2,
    40 => 8,
    41 => 7,
    42 => 22,
    43 => 25,
    44 => 9,
    45 => 10,
    46 => 11,
    47 => 12,
    48 => 13,
    49 => 14,
    50 => 15,
    51 => 16,
    52 => 17,
    53 => 18,
    54 => 26,
    55 => 19,
    56 => 20,
    57 => 21,
    58 => 22,
    59 => 23,
    60 => 24,
    61 => 3,
    62 => 4,
    63 => 5,
    64 => 6,
    65 => 27
  );

  public function findOneByMaxmindId($id, GeoRegionQuery $q = null)
  {
    if ($q === null)
    {
      $q = $this;
    }

    if (isset(self::$_maxmind_regions[$id]))
    {
      return $q->findOneById(self::$_maxmind_regions[$id]);
    }

    return null;
  }

  public function findOneBySlug($slug, GeoRegionQuery $q = null)
  {
    if ($q === null)
    {
      $q = $this;
    }

    switch (sfPropel::getDefaultCulture())
    {
      case 'en_US':
      case 'en':
        $q->filterBySlugLatin($slug);
        break;
      case 'bg_BG':
      case 'bg':
      default:
        $q->filterBySlugCyrillic($slug);
        break;
    }

    return $q->findOne();
  }
}
