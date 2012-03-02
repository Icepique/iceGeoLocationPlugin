<?php


/**
 * Base class that represents a query for the 'ice_geo_country' table.
 *
 * 
 *
 * @method     iceModelGeoCountryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelGeoCountryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     iceModelGeoCountryQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     iceModelGeoCountryQuery orderByIso3166($order = Criteria::ASC) Order by the iso3166 column
 * @method     iceModelGeoCountryQuery orderByCurrency($order = Criteria::ASC) Order by the currency column
 * @method     iceModelGeoCountryQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     iceModelGeoCountryQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     iceModelGeoCountryQuery orderByZoom($order = Criteria::ASC) Order by the zoom column
 *
 * @method     iceModelGeoCountryQuery groupById() Group by the id column
 * @method     iceModelGeoCountryQuery groupByName() Group by the name column
 * @method     iceModelGeoCountryQuery groupBySlug() Group by the slug column
 * @method     iceModelGeoCountryQuery groupByIso3166() Group by the iso3166 column
 * @method     iceModelGeoCountryQuery groupByCurrency() Group by the currency column
 * @method     iceModelGeoCountryQuery groupByLatitude() Group by the latitude column
 * @method     iceModelGeoCountryQuery groupByLongitude() Group by the longitude column
 * @method     iceModelGeoCountryQuery groupByZoom() Group by the zoom column
 *
 * @method     iceModelGeoCountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelGeoCountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelGeoCountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelGeoCountry findOne(PropelPDO $con = null) Return the first iceModelGeoCountry matching the query
 * @method     iceModelGeoCountry findOneOrCreate(PropelPDO $con = null) Return the first iceModelGeoCountry matching the query, or a new iceModelGeoCountry object populated from the query conditions when no match is found
 *
 * @method     iceModelGeoCountry findOneById(int $id) Return the first iceModelGeoCountry filtered by the id column
 * @method     iceModelGeoCountry findOneByName(string $name) Return the first iceModelGeoCountry filtered by the name column
 * @method     iceModelGeoCountry findOneBySlug(string $slug) Return the first iceModelGeoCountry filtered by the slug column
 * @method     iceModelGeoCountry findOneByIso3166(string $iso3166) Return the first iceModelGeoCountry filtered by the iso3166 column
 * @method     iceModelGeoCountry findOneByCurrency(string $currency) Return the first iceModelGeoCountry filtered by the currency column
 * @method     iceModelGeoCountry findOneByLatitude(double $latitude) Return the first iceModelGeoCountry filtered by the latitude column
 * @method     iceModelGeoCountry findOneByLongitude(double $longitude) Return the first iceModelGeoCountry filtered by the longitude column
 * @method     iceModelGeoCountry findOneByZoom(int $zoom) Return the first iceModelGeoCountry filtered by the zoom column
 *
 * @method     array findById(int $id) Return iceModelGeoCountry objects filtered by the id column
 * @method     array findByName(string $name) Return iceModelGeoCountry objects filtered by the name column
 * @method     array findBySlug(string $slug) Return iceModelGeoCountry objects filtered by the slug column
 * @method     array findByIso3166(string $iso3166) Return iceModelGeoCountry objects filtered by the iso3166 column
 * @method     array findByCurrency(string $currency) Return iceModelGeoCountry objects filtered by the currency column
 * @method     array findByLatitude(double $latitude) Return iceModelGeoCountry objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return iceModelGeoCountry objects filtered by the longitude column
 * @method     array findByZoom(int $zoom) Return iceModelGeoCountry objects filtered by the zoom column
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoCountryQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseiceModelGeoCountryQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'iceModelGeoCountry', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new iceModelGeoCountryQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    iceModelGeoCountryQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof iceModelGeoCountryQuery)
    {
      return $criteria;
    }
    $query = new iceModelGeoCountryQuery();
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
   * @return    iceModelGeoCountry|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = iceModelGeoCountryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(iceModelGeoCountryPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(iceModelGeoCountryPeer::ID, $keys, Criteria::IN);
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
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(iceModelGeoCountryPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the name column
   * 
   * Example usage:
   * <code>
   * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
   * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
   * </code>
   *
   * @param     string $name The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByName($name = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($name))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $name))
      {
        $name = str_replace('*', '%', $name);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCountryPeer::NAME, $name, $comparison);
  }

  /**
   * Filter the query on the slug column
   * 
   * Example usage:
   * <code>
   * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
   * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slug The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterBySlug($slug = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slug))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slug))
      {
        $slug = str_replace('*', '%', $slug);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCountryPeer::SLUG, $slug, $comparison);
  }

  /**
   * Filter the query on the iso3166 column
   * 
   * Example usage:
   * <code>
   * $query->filterByIso3166('fooValue');   // WHERE iso3166 = 'fooValue'
   * $query->filterByIso3166('%fooValue%'); // WHERE iso3166 LIKE '%fooValue%'
   * </code>
   *
   * @param     string $iso3166 The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByIso3166($iso3166 = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($iso3166))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $iso3166))
      {
        $iso3166 = str_replace('*', '%', $iso3166);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCountryPeer::ISO3166, $iso3166, $comparison);
  }

  /**
   * Filter the query on the currency column
   * 
   * Example usage:
   * <code>
   * $query->filterByCurrency('fooValue');   // WHERE currency = 'fooValue'
   * $query->filterByCurrency('%fooValue%'); // WHERE currency LIKE '%fooValue%'
   * </code>
   *
   * @param     string $currency The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByCurrency($currency = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($currency))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $currency))
      {
        $currency = str_replace('*', '%', $currency);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCountryPeer::CURRENCY, $currency, $comparison);
  }

  /**
   * Filter the query on the latitude column
   * 
   * Example usage:
   * <code>
   * $query->filterByLatitude(1234); // WHERE latitude = 1234
   * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
   * $query->filterByLatitude(array('min' => 12)); // WHERE latitude > 12
   * </code>
   *
   * @param     mixed $latitude The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByLatitude($latitude = null, $comparison = null)
  {
    if (is_array($latitude))
    {
      $useMinMax = false;
      if (isset($latitude['min']))
      {
        $this->addUsingAlias(iceModelGeoCountryPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($latitude['max']))
      {
        $this->addUsingAlias(iceModelGeoCountryPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoCountryPeer::LATITUDE, $latitude, $comparison);
  }

  /**
   * Filter the query on the longitude column
   * 
   * Example usage:
   * <code>
   * $query->filterByLongitude(1234); // WHERE longitude = 1234
   * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
   * $query->filterByLongitude(array('min' => 12)); // WHERE longitude > 12
   * </code>
   *
   * @param     mixed $longitude The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByLongitude($longitude = null, $comparison = null)
  {
    if (is_array($longitude))
    {
      $useMinMax = false;
      if (isset($longitude['min']))
      {
        $this->addUsingAlias(iceModelGeoCountryPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($longitude['max']))
      {
        $this->addUsingAlias(iceModelGeoCountryPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoCountryPeer::LONGITUDE, $longitude, $comparison);
  }

  /**
   * Filter the query on the zoom column
   * 
   * Example usage:
   * <code>
   * $query->filterByZoom(1234); // WHERE zoom = 1234
   * $query->filterByZoom(array(12, 34)); // WHERE zoom IN (12, 34)
   * $query->filterByZoom(array('min' => 12)); // WHERE zoom > 12
   * </code>
   *
   * @param     mixed $zoom The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function filterByZoom($zoom = null, $comparison = null)
  {
    if (is_array($zoom))
    {
      $useMinMax = false;
      if (isset($zoom['min']))
      {
        $this->addUsingAlias(iceModelGeoCountryPeer::ZOOM, $zoom['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($zoom['max']))
      {
        $this->addUsingAlias(iceModelGeoCountryPeer::ZOOM, $zoom['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoCountryPeer::ZOOM, $zoom, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     iceModelGeoCountry $iceModelGeoCountry Object to remove from the list of results
   *
   * @return    iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function prune($iceModelGeoCountry = null)
  {
    if ($iceModelGeoCountry)
    {
      $this->addUsingAlias(iceModelGeoCountryPeer::ID, $iceModelGeoCountry->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  // ice_model behavior
  
  /**
   * @return iceModelGeoCountryQuery The current query, for fluid interface
   */
  public function __call($name, $arguments)
  {
    if (method_exists('iceModeliceModelGeoCountryQuery', $name))
    {
      $q = new iceModeliceModelGeoCountryQuery();
      $arguments[] = $this;
  
      return call_user_func_array(array($q, $name), $arguments);
    }
  
    return parent::__call($name, $arguments);
  }

}
