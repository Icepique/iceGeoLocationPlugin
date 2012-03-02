<?php

class ajaxAction extends IceAjaxAction
{
  protected function getObject(sfWebRequest $request)
  {
    return null;
  }

  public function executeCitiesList(sfWebRequest $request)
  {
    $query = IceStatic::cleanSpaces($request->getParameter('q'));
    $country = $request->getParameter('country', 'bg');
    $culture = $request->getParameter('culture', sfPropel::getDefaultCulture());

    $geo_region_id = (int) $request->getParameter('geo_region_id');

    // We cannot continue without a Region Id or query
    if (empty($geo_region_id) && empty($query))
    {
      return $this->output(array('total' => 0, 'cities' => array()));
    }

    $start = (int) $request->getParameter('start', 0);
    $limit = (int) $request->getParameter('limit', 0);

    // Assume no filters are set
    $filters = false;

    // Set the name field depends on the culture
    $name_field = array(
      'column' => ($culture == 'bg_BG') ? GeoCityPeer::NAME_CYRILLIC : GeoCityPeer::NAME_LATIN,
      'php'    => ($culture == 'bg_BG') ? 'GeoCity.NameCyrillic' : 'GeoCity.NameLatin'
    );

    $q = GeoCityQuery::create()
       ->distinct()
       ->leftJoin('GeoRegion');

    // Filter by country
    if ($country == 'de')
    {
      $q->useQuery('GeoRegion')
          ->filterByGeoCountryId(80)
        ->endUse();
    }
    else
    {
      $q->useQuery('GeoRegion')
          ->filterByGeoCountryId(33)
        ->endUse();
    }

    // Filter by the query parameter if present
    if (!empty($query))
    {
      $q->add($name_field['column'], '%'.$query.'%', Criteria::LIKE);
    }

    // Filter by the geo_region_id if present
    if ($geo_region_id)
    {
      $q->add(GeoCityPeer::GEO_REGION_ID, (string) $geo_region_id);
    }

    // Initialize the array
    $cities = array();

    if (0 < $total = $q->count())
    {
      $q->offset($start);
      $q->limit($limit);

      // Get the PDOStatement object
      $q->orderBy('Type', 'asc')
        ->addDescendingOrderByColumn(sprintf('FIELD(%s, %s)', GeoCityPeer::ID, implode(', ', array($geo_region_id))))
        ->orderBy($name_field['php'], 'asc')
        ->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
      $records = $q->find();

      /**
       * Loop through the results and generate the output array
       *
       * @var  $record  GeoCity
       */
      foreach ($records as $record)
      {
        $cities[] = array(
          'id' => (int) $record->getId(), 'name' => $record->getName(), 'type' => $record->getType(),
          'geo_region_id' => $record->getGeoRegionId(), 'geo_region_name' => (string) $record->getGeoRegion(),
          'culture' => $culture
        );
      }
    }

    return $this->output(array('total' => $total, 'cities' => $cities));
  }
}
