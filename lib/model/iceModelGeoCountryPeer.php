<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoCountryPeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'geo_country' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoCountryPeer extends BaseiceModelGeoCountryPeer
{

}

sfPropelBehavior::add(
  'iceModelGeoCountry',
  array(
    'PropelActAsSluggableBehavior' => array(
      'columns' => array(
        'from' => iceModelGeoCountryPeer::NAME,
        'to'   => iceModelGeoCountryPeer::SLUG
      ),
      'separator' => '-',
      'permanent' => false,
      'lowercase' => false
    )
  )
);

if (class_exists('GeoCountry') && class_exists('GeoCountryPeer'))
{
  sfPropelBehavior::add(
    'GeoCountry',
    array(
      'PropelActAsSluggableBehavior' => array(
        'columns' => array(
          'from' => GeoCountryPeer::NAME,
          'to'   => GeoCountryPeer::SLUG
        ),
        'separator' => '-',
        'permanent' => false,
        'lowercase' => false
      )
    )
  );
}
