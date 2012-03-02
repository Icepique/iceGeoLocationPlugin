<?php


/**
 * Base class that represents a query for the 'ice_geo_area' table.
 *
 * 
 *
 * @method     iceModelGeoAreaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelGeoAreaQuery orderByGeoRegionId($order = Criteria::ASC) Order by the geo_region_id column
 * @method     iceModelGeoAreaQuery orderByGeoCityId($order = Criteria::ASC) Order by the geo_city_id column
 * @method     iceModelGeoAreaQuery orderByNameCyrillic($order = Criteria::ASC) Order by the name_cyrillic column
 * @method     iceModelGeoAreaQuery orderByNameLatin($order = Criteria::ASC) Order by the name_latin column
 * @method     iceModelGeoAreaQuery orderBySlugCyrillic($order = Criteria::ASC) Order by the slug_cyrillic column
 * @method     iceModelGeoAreaQuery orderBySlugLatin($order = Criteria::ASC) Order by the slug_latin column
 *
 * @method     iceModelGeoAreaQuery groupById() Group by the id column
 * @method     iceModelGeoAreaQuery groupByGeoRegionId() Group by the geo_region_id column
 * @method     iceModelGeoAreaQuery groupByGeoCityId() Group by the geo_city_id column
 * @method     iceModelGeoAreaQuery groupByNameCyrillic() Group by the name_cyrillic column
 * @method     iceModelGeoAreaQuery groupByNameLatin() Group by the name_latin column
 * @method     iceModelGeoAreaQuery groupBySlugCyrillic() Group by the slug_cyrillic column
 * @method     iceModelGeoAreaQuery groupBySlugLatin() Group by the slug_latin column
 *
 * @method     iceModelGeoAreaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelGeoAreaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelGeoAreaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelGeoArea findOne(PropelPDO $con = null) Return the first iceModelGeoArea matching the query
 * @method     iceModelGeoArea findOneOrCreate(PropelPDO $con = null) Return the first iceModelGeoArea matching the query, or a new iceModelGeoArea object populated from the query conditions when no match is found
 *
 * @method     iceModelGeoArea findOneById(int $id) Return the first iceModelGeoArea filtered by the id column
 * @method     iceModelGeoArea findOneByGeoRegionId(int $geo_region_id) Return the first iceModelGeoArea filtered by the geo_region_id column
 * @method     iceModelGeoArea findOneByGeoCityId(int $geo_city_id) Return the first iceModelGeoArea filtered by the geo_city_id column
 * @method     iceModelGeoArea findOneByNameCyrillic(string $name_cyrillic) Return the first iceModelGeoArea filtered by the name_cyrillic column
 * @method     iceModelGeoArea findOneByNameLatin(string $name_latin) Return the first iceModelGeoArea filtered by the name_latin column
 * @method     iceModelGeoArea findOneBySlugCyrillic(string $slug_cyrillic) Return the first iceModelGeoArea filtered by the slug_cyrillic column
 * @method     iceModelGeoArea findOneBySlugLatin(string $slug_latin) Return the first iceModelGeoArea filtered by the slug_latin column
 *
 * @method     array findById(int $id) Return iceModelGeoArea objects filtered by the id column
 * @method     array findByGeoRegionId(int $geo_region_id) Return iceModelGeoArea objects filtered by the geo_region_id column
 * @method     array findByGeoCityId(int $geo_city_id) Return iceModelGeoArea objects filtered by the geo_city_id column
 * @method     array findByNameCyrillic(string $name_cyrillic) Return iceModelGeoArea objects filtered by the name_cyrillic column
 * @method     array findByNameLatin(string $name_latin) Return iceModelGeoArea objects filtered by the name_latin column
 * @method     array findBySlugCyrillic(string $slug_cyrillic) Return iceModelGeoArea objects filtered by the slug_cyrillic column
 * @method     array findBySlugLatin(string $slug_latin) Return iceModelGeoArea objects filtered by the slug_latin column
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoAreaQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseiceModelGeoAreaQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'iceModelGeoArea', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new iceModelGeoAreaQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    iceModelGeoAreaQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof iceModelGeoAreaQuery)
    {
      return $criteria;
    }
    $query = new iceModelGeoAreaQuery();
    if (null !== $modelAlias)
    {
      $query->setModelAlias($modelAlias);
    }
    if ($criteria instanceof Criteria)
    {
      $query->mergeWith($criteria);
    }
    return $query;
  }

  /**
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    iceModelGeoArea|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = iceModelGeoAreaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    else
    {
      // the object has not been requested yet, or the formatter is not an object formatter
      $criteria = $this->isKeepQuery() ? clone $this : $this;
      $stmt = $criteria
        ->filterByPrimaryKey($key)
        ->getSelectStatement($con);
      return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }
  }

  /**
   * Find objects by primary key
   * <code>
   * $objs = $c->findPks(array(12, 56, 832), $con);
   * </code>
   * @param     array $keys Primary keys to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
   */
  public function findPks($keys, $con = null)
  {
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    return $this
      ->filterByPrimaryKeys($keys)
      ->find($con);
  }

  /**
   * Filter the query by primary key
   *
   * @param     mixed $key Primary key to use for the query
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(iceModelGeoAreaPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(iceModelGeoAreaPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * Example usage:
   * <code>
   * $query->filterById(1234); // WHERE id = 1234
   * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
   * $query->filterById(array('min' => 12)); // WHERE id > 12
   * </code>
   *
   * @param     mixed $id The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the geo_region_id column
   * 
   * Example usage:
   * <code>
   * $query->filterByGeoRegionId(1234); // WHERE geo_region_id = 1234
   * $query->filterByGeoRegionId(array(12, 34)); // WHERE geo_region_id IN (12, 34)
   * $query->filterByGeoRegionId(array('min' => 12)); // WHERE geo_region_id > 12
   * </code>
   *
   * @param     mixed $geoRegionId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterByGeoRegionId($geoRegionId = null, $comparison = null)
  {
    if (is_array($geoRegionId))
    {
      $useMinMax = false;
      if (isset($geoRegionId['min']))
      {
        $this->addUsingAlias(iceModelGeoAreaPeer::GEO_REGION_ID, $geoRegionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($geoRegionId['max']))
      {
        $this->addUsingAlias(iceModelGeoAreaPeer::GEO_REGION_ID, $geoRegionId['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::GEO_REGION_ID, $geoRegionId, $comparison);
  }

  /**
   * Filter the query on the geo_city_id column
   * 
   * Example usage:
   * <code>
   * $query->filterByGeoCityId(1234); // WHERE geo_city_id = 1234
   * $query->filterByGeoCityId(array(12, 34)); // WHERE geo_city_id IN (12, 34)
   * $query->filterByGeoCityId(array('min' => 12)); // WHERE geo_city_id > 12
   * </code>
   *
   * @param     mixed $geoCityId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterByGeoCityId($geoCityId = null, $comparison = null)
  {
    if (is_array($geoCityId))
    {
      $useMinMax = false;
      if (isset($geoCityId['min']))
      {
        $this->addUsingAlias(iceModelGeoAreaPeer::GEO_CITY_ID, $geoCityId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($geoCityId['max']))
      {
        $this->addUsingAlias(iceModelGeoAreaPeer::GEO_CITY_ID, $geoCityId['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::GEO_CITY_ID, $geoCityId, $comparison);
  }

  /**
   * Filter the query on the name_cyrillic column
   * 
   * Example usage:
   * <code>
   * $query->filterByNameCyrillic('fooValue');   // WHERE name_cyrillic = 'fooValue'
   * $query->filterByNameCyrillic('%fooValue%'); // WHERE name_cyrillic LIKE '%fooValue%'
   * </code>
   *
   * @param     string $nameCyrillic The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterByNameCyrillic($nameCyrillic = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($nameCyrillic))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $nameCyrillic))
      {
        $nameCyrillic = str_replace('*', '%', $nameCyrillic);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::NAME_CYRILLIC, $nameCyrillic, $comparison);
  }

  /**
   * Filter the query on the name_latin column
   * 
   * Example usage:
   * <code>
   * $query->filterByNameLatin('fooValue');   // WHERE name_latin = 'fooValue'
   * $query->filterByNameLatin('%fooValue%'); // WHERE name_latin LIKE '%fooValue%'
   * </code>
   *
   * @param     string $nameLatin The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterByNameLatin($nameLatin = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($nameLatin))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $nameLatin))
      {
        $nameLatin = str_replace('*', '%', $nameLatin);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::NAME_LATIN, $nameLatin, $comparison);
  }

  /**
   * Filter the query on the slug_cyrillic column
   * 
   * Example usage:
   * <code>
   * $query->filterBySlugCyrillic('fooValue');   // WHERE slug_cyrillic = 'fooValue'
   * $query->filterBySlugCyrillic('%fooValue%'); // WHERE slug_cyrillic LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slugCyrillic The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterBySlugCyrillic($slugCyrillic = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slugCyrillic))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slugCyrillic))
      {
        $slugCyrillic = str_replace('*', '%', $slugCyrillic);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::SLUG_CYRILLIC, $slugCyrillic, $comparison);
  }

  /**
   * Filter the query on the slug_latin column
   * 
   * Example usage:
   * <code>
   * $query->filterBySlugLatin('fooValue');   // WHERE slug_latin = 'fooValue'
   * $query->filterBySlugLatin('%fooValue%'); // WHERE slug_latin LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slugLatin The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function filterBySlugLatin($slugLatin = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slugLatin))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slugLatin))
      {
        $slugLatin = str_replace('*', '%', $slugLatin);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoAreaPeer::SLUG_LATIN, $slugLatin, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     iceModelGeoArea $iceModelGeoArea Object to remove from the list of results
   *
   * @return    iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function prune($iceModelGeoArea = null)
  {
    if ($iceModelGeoArea)
    {
      $this->addUsingAlias(iceModelGeoAreaPeer::ID, $iceModelGeoArea->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  // ice_model behavior
  
  /**
   * @return iceModelGeoAreaQuery The current query, for fluid interface
   */
  public function __call($name, $arguments)
  {
    if (method_exists('iceModeliceModelGeoAreaQuery', $name))
    {
      $q = new iceModeliceModelGeoAreaQuery();
      $arguments[] = $this;
  
      return call_user_func_array(array($q, $name), $arguments);
    }
  
    return parent::__call($name, $arguments);
  }

}
