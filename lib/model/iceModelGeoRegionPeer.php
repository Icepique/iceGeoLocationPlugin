<?php

require 'plugins/iceGeoLocationPlugin/lib/model/om/BaseiceModelGeoRegionPeer.php';

/**
 * Skeleton subclass for performing query and update operations on the 'geo_region' table.
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model
 */
class iceModelGeoRegionPeer extends BaseiceModelGeoRegionPeer
{
  private static $_regions = array(
    1 => array("Благоевград", "Blagoevgrad"),
    2 => array("Бургас", "Burgas"),
    3 => array("Варна", "Varna"),
    4 => array("Велико-Търново", "Veliko-Tarnovo"),
    5 => array("Видин", "Vidin"),
    6 => array("Враца", "Vratsa"),
    7 => array("Габрово", "Gabrovo"),
    8 => array("Добрич", "Dobrich"),
    9 => array("Кърджали", "Kardzhali"),
    10 => array("Кюстендил", "Kyustendil"),
    11 => array("Ловеч", "Lovech"),
    12 => array("Монтана", "Montana"),
    13 => array("Пазарджик", "Pazardzhik"),
    14 => array("Перник", "Pernik"),
    15 => array("Плевен", "Pleven"),
    16 => array("Пловдив", "Plovdiv"),
    17 => array("Разград", "Razgrad"),
    18 => array("Русе", "Ruse"),
    19 => array("Силистра", "Silistra"),
    20 => array("Сливен", "Sliven"),
    21 => array("Смолян", "Smolyan"),
    22 => array("София", "Sofia"),
    23 => array("Стара-Загора", "Stara-Zagora"),
    24 => array("Търговище", "Targovishte"),
    25 => array("Хасково", "Haskovo"),
    26 => array("Шумен", "Shumen"),
    27 => array("Ямбол", "Yambol")
  );

  public static function retrieveBySlug($slug, $culture = null)
  {
    if ($culture === null)
    {
      $culture = sfPropel::getDefaultCulture();
    }

    $name_field = $culture == 'bg_BG' ? GeoRegionPeer::NAME_CYRILLIC : GeoRegionPeer::NAME_LATIN;

    $c = new Criteria();
    $c->add($name_field, "REPLACE(". $name_field. ", ' ', '-') = '". mysql_escape_string($slug) ."'", Criteria::CUSTOM);

    return GeoRegionPeer::doSelectOne($c);
  }

  public static function getGeoRegionsForSelect($country_id, $culture = null)
  {
    if ($culture === null)
    {
      $culture = sfPropel::getDefaultCulture();
    }

    $name = ($culture == 'bg_BG') ? 'NameCyrillic' : 'NameLatin';

    $q = GeoRegionQuery::create()
       ->filterByGeoCountryId($country_id)
       //->orderBy($name)
       ->setFormatter(ModelCriteria::FORMAT_ARRAY);

    return $q->find()->toKeyValue('Id', $name);
  }

  public static function getGeoRegionsRoutingRegex()
  {
    $regex = null;
    foreach (self::$_regions as $id => $names)
    {
      $regex .= '|'. implode('|', $names);
    }

    return '(?:'. ltrim($regex, '|') .')';
  }
}
