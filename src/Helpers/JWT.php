<?php declare(strict_types=1);

/**
 * Spin\Helper\JWT
 *
 * JSON Web Token Class
 *
 * @link     https://github.com/firebase/php-jwt
 * @package  Spin
 */

namespace Spin\Helpers;

use Firebase\JWT\JWT;
use Spin\Helpers\JWTInterface;

class JWT extends JWT implements JWTInterface
{
}
