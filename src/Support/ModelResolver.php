<?php

namespace Spinen\ConnectWise\Support;

/**
 * Class ModelResolver
 *
 * @package Spinen\ConnectWise\Support
 */
class ModelResolver
{
    /**
     * List of Models for each resource endpoint for each used version
     *
     * @var array
     */
    protected $maps = [];

    /**
     * Find the model to fill with the results from the request
     *
     * This is a little more complicated than you would think that it needs to be, but we have to map the response to
     * a model by looking at the URI.  If the URI is for a specific id, then the id has to be converted to the wildcard
     * in the map or it is a single resource & not a collection, then the id has to be removed from the end.
     *
     * @param string $uri
     * @param string $version
     *
     * @return string|null
     */
    public function find($uri, $version)
    {
        $this->loadVersionIfNeeded($version);

        // Pull leading slash off
        $uri = ltrim($uri, '/');

        // Bust the resource into the parts
        $uri_parts = parse_url($uri);

        // Trim "/" off the end
        $pattern = rtrim($uri_parts['path'], '/');

        // Replace /(/)d+(/?)/ with /$1{id}$2/
        $pattern = preg_replace('|(/)\\d+(/?)|u', '$1{id}$2', $pattern);

        // Make regex
        $pattern = '|^/' . $pattern . '$|ui';

        // Search the map for the uri that matches
        return ($uri = $this->maps[$version]->search(
            function ($model, $uri) use ($pattern) {
                return preg_match($pattern, $uri);
            }
        )) ? $this->maps[$version][$uri] : null;
    }

    /**
     * Load in the uri to class for the version if not already loaded
     *
     * @param string $version
     */
    protected function loadVersionIfNeeded($version)
    {
        if (!array_key_exists($version, $this->maps)) {
            $this->maps[$version] = collect(
                json_decode(
                    @file_get_contents(__DIR__ . '/../Models/v' . str_replace('.', '_', $version) . '/map.json'),
                    true
                )
            );
        }
    }
}
