<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $allowedOrigin = 'http://localhost:8081';
        header('Access-Control-Allow-Origin: ' . $allowedOrigin);
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];

        if($method == "OPTIONS") {
            header('Access-Control-Allow-Origin: ' . $allowedOrigin);
            header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

            // You might want to set a status code 204 No Content here
            header('HTTP/1.1 204 No Content');
            die();
        }

        $requestOrigin = $_SERVER['HTTP_ORIGIN'] ?? '';

        if ($requestOrigin !== $allowedOrigin) {
            $key = getenv('JWT_SECRET');
            $token = $request->getCookie('token');
            
            if (is_null($token) || empty($token)) {
                $response = service('response');
                $responseBody = [
                    'error' => 'Access denied'
                ];
                $response->setBody(json_encode($responseBody));
                $response->setStatusCode(401);
                return $response;
            }
    
            try {
                $decoded = JWT::decode($token, new Key($key, 'HS256'));
            }
            catch (\Exception $e) {
                $response = service('response');
                $responseBody = [
                    'error' => 'Access denied'
                ];
                $response->setBody(json_encode($responseBody));
                $response->setStatusCode(401);
                return $response;
            }
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }

    private function setCorsHeaders(): ResponseInterface
    {
        $response = service('response');

        $response->setHeader('Access-Control-Allow-Origin', 'http://localhost:8081');
        $response->setHeader('Access-Control-Allow-Headers', 'X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
        $response->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PATCH, DELETE');

        return $response;
    }
}
