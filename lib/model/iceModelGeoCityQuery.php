<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoCityQuery.php';


/**
 * Skeleton subclass for performing query and update operations on the 'geo_city' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoCityQuery extends BaseiceModelGeoCityQuery
{
  public function findOneBySlug($slug, GeoCityQuery $q = null)
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
