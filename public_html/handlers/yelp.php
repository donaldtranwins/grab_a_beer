<?php

/**
 * Yelp API v2.0 code sample.
 *
 * This program demonstrates the capability of the Yelp API version 2.0
 * by using the Search API to query for businesses by a search term and location,
 * and the Business API to query additional information about the top result
 * from the search query.
 *
 * Please refer to http://www.yelp.com/developers/documentation for the API documentation.
 *
 * This program requires a PHP OAuth2 library, which is included in this branch and can be
 * found here:
 *      http://oauth.googlecode.com/svn/code/php/
 *
 * Sample usage of the program:
 * `php sample.php --term="bars" --location="San Francisco, CA"`
 */

// OAuth library for use to login to Yelp API v2.0
require_once('../../resources/lib_yelpv2/OAuth.php');

// OAuth credentials obtained from the 'Manage API Access' page in the
// developers documentation (http://www.yelp.com/developers)
require_once('../../resources/yelp.config.php');

// Base URL and default search parameters
$API_HOST = 'api.yelp.com';
$SEARCH_PATH = '/v2/search/';
//$SEARCH_LIMIT = 5;
$DEFAULT_TERM = 'beer';
$DEFAULT_LOCATION = 'Irvine, CA';

// Load the request file containing all the functions
require '../../resources/yelp_request.php';


/**
 * User input received from the AJAX call is pushed into an array, to be used in the Yelp query
 */
$filters = array();
foreach($_GET as $filterName => $filterValue){
    $filters[$filterName] = $filterValue;
}

query_api($filters);

?>
