<?php declare(strict_types=1);

/**
 * HTTP Request Factory
 *
 * This factory produces PSR-7 compliant objects using
 * the Guzzle framework.
 *
 * @link     https://github.com/guzzle/guzzle
 * @package  Spin
 */

namespace Spin\Factories\Http;

use InvalidArgumentException;
use Spin\Factories\AbstractFactory;

# Guzzle
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\LazyOpenStream;

# PSR-7
use Psr\Http\Message\RequestInterface;

# PSR-17
// use Psr\Http\Message\RequestFactoryInterface;
use Interop\Http\Factory\RequestFactoryInterface;

class RequestFactory extends AbstractFactory implements RequestFactoryInterface
{
  /**
   * Create a new request.
   *
   * @param string $method
   * @param UriInterface|string $uri
   *
   * @return RequestInterface
   */
  public function createRequest($method, $uri)
  {
    $request = new Request($method, $uri);

    logger()->debug('Created PSR-7 Request("'.$method.'","'.$uri.'"") (Guzzle)');

    return $request;
  }

}
