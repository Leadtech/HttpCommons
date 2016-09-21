<?php
namespace Leadtech\HttpCommons;

/**
 * Class HttpStatus
 * @package Leadtech\HttpCommons
 */
abstract class HttpStatus
{
    const HTTP_CONTINUE = 100;
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_ACCEPTED = 202;
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    const HTTP_NO_CONTENT = 204;
    const HTTP_RESET_CONTENT = 205;
    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_MOVED_PERMANENTLY = 301;
    const HTTP_MOVED_TEMPORARILY = 302;
    const HTTP_SEE_OTHER = 303;
    const HTTP_NOT_MODIFIED = 304;
    const HTTP_USE_PROXY = 305;
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    const HTTP_REQUESTED_TIMEOUT = 408;
    const HTTP_CONFLICT = 409;
    const HTTP_GONE = 410;
    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    const HTTP_REQUEST_URI_TOO_LARGE = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_EXPECTATION_FAILED = 417;
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    const HTTP_LOCKED = 423;
    const HTTP_FAILED_DEPENDENCY = 424;
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_BAD_GATEWAY = 502;
    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * Gets status text for a http method
     *
     * @param int $statusCode
     * @return string
     */
    public static function getStatusMessage($statusCode)
    {
        switch ($statusCode) {
            case 100: return 'Continue';
            case 101: return 'Switching Protocols';
            case 200: return 'OK';
            case 201: return 'Created';
            case 202: return 'Accepted';
            case 203: return 'Non-Authoritative Information';
            case 204: return 'No Content';
            case 205: return 'Reset Content';
            case 206: return 'Partial Content';
            case 300: return 'Multiple Choices';
            case 301: return 'Moved Permanently';
            case 302: return 'Moved Temporarily';
            case 303: return 'See Other';
            case 304: return 'Not Modified';
            case 305: return 'Use Proxy';
            case 400: return 'Bad Request';
            case 401: return 'Unauthorized';
            case 402: return 'Payment Required';
            case 403: return 'Forbidden';
            case 404: return 'Not Found';
            case 405: return 'Method Not Allowed';
            case 406: return 'Not Acceptable';
            case 407: return 'Proxy Authentication Required';
            case 408: return 'Request Time-out';
            case 409: return 'Conflict';
            case 410: return 'Gone';
            case 411: return 'Length Required';
            case 412: return 'Precondition Failed';
            case 413: return 'Request Entity Too Large';
            case 414: return 'Request-URI Too Large';
            case 415: return 'Unsupported Media Type';
            case 500: return 'Internal Server Error';
            case 501: return 'Not Implemented';
            case 502: return 'Bad Gateway';
            case 503: return 'Service Unavailable';
            case 504: return 'Gateway Time-out';
            case 505: return 'HTTP Version not supported';

            default:
                // Unknown status code
                if ($statusCode >= 500) {
                    return "Unknown Server Error ($statusCode)";
                }
                if ($statusCode >= 400) {
                    return "Unknown Client Error ($statusCode)";
                }
                if ($statusCode >= 300) {
                    return "Unknown Redirection Status ($statusCode)";
                }
                if ($statusCode >= 200) {
                    return "Unknown Success Status ($statusCode)";
                }

                return "Unknown Informational Status ($statusCode)";
        }
    }
}