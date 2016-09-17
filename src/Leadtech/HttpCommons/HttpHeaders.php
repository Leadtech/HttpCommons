<?php

namespace Leadtech\HttpCommons;

/**
 * Class HttpHeaders
 * @package Leadtech\HttpCommons
 */
abstract class HttpHeaders
{
    const ACCEPT = "accept";
    const ACCEPT_CHARSET = "accept-charset";
    const ACCEPT_ENCODING = "accept-encoding";
    const ACCEPT_LANGUAGE = "accept-language";
    const ACCEPT_RANGES = "accept-ranges";
    const ACCEPT_PATCH = "accept-patch";
    const ACCESS_CONTROL_ALLOW_CREDENTIALS = "access-control-allow-credentials";
    const ACCESS_CONTROL_ALLOW_HEADERS = "access-control-allow-headers";
    const ACCESS_CONTROL_ALLOW_METHODS = "access-control-allow-methods";
    const ACCESS_CONTROL_ALLOW_ORIGIN = "access-control-allow-origin";
    const ACCESS_CONTROL_EXPOSE_HEADERS = "access-control-expose-headers";
    const ACCESS_CONTROL_MAX_AGE = "access-control-max-age";
    const ACCESS_CONTROL_REQUEST_HEADERS = "access-control-request-headers";
    const ACCESS_CONTROL_REQUEST_METHOD = "access-control-request-method";
    const AGE = "age";
    const ALLOW = "allow";
    const AUTHORIZATION = "authorization";
    const CACHE_CONTROL = "cache-control";
    const CONNECTION = "connection";
    const CONTENT_BASE = "content-base";
    const CONTENT_ENCODING = "content-encoding";
    const CONTENT_LANGUAGE = "content-language";
    const CONTENT_LENGTH = "content-length";
    const CONTENT_LOCATION = "content-location";
    const CONTENT_TRANSFER_ENCODING = "content-transfer-encoding";
    const CONTENT_DISPOSITION = "content-disposition";
    const CONTENT_MD5 = "content-md5";
    const CONTENT_RANGE = "content-range";
    const CONTENT_TYPE = "content-type";
    const COOKIE = "cookie";
    const DATE = "date";
    const ETAG = "etag";
    const EXPECT = "expect";
    const EXPIRES = "expires";
    const FROM = "from";
    const HOST = "host";
    const IF_MATCH = "if-match";
    const IF_MODIFIED_SINCE = "if-modified-since";
    const IF_NONE_MATCH = "if-none-match";
    const IF_RANGE = "if-range";
    const IF_UNMODIFIED_SINCE = "if-unmodified-since";
    const KEEP_ALIVE = "keep-alive";
    const LAST_MODIFIED = "last-modified";
    const LOCATION = "location";
    const MAX_FORWARDS = "max-forwards";
    const ORIGIN = "origin";
    const PRAGMA = "pragma";
    const PROXY_AUTHENTICATE = "proxy-authenticate";
    const PROXY_AUTHORIZATION = "proxy-authorization";
    const PROXY_CONNECTION = "proxy-connection";
    const RANGE = "range";
    const REFERER = "referer";
    const RETRY_AFTER = "retry-after";
    const SEC_WEBSOCKET_KEY1 = "sec-websocket-key1";
    const SEC_WEBSOCKET_KEY2 = "sec-websocket-key2";
    const SEC_WEBSOCKET_LOCATION = "sec-websocket-location";
    const SEC_WEBSOCKET_ORIGIN = "sec-websocket-origin";
    const SEC_WEBSOCKET_PROTOCOL = "sec-websocket-protocol";
    const SEC_WEBSOCKET_VERSION = "sec-websocket-version";
    const SEC_WEBSOCKET_KEY = "sec-websocket-key";
    const SEC_WEBSOCKET_ACCEPT = "sec-websocket-accept";
    const SEC_WEBSOCKET_EXTENSIONS = "sec-websocket-extensions";
    const SERVER = "server";
    const SET_COOKIE = "set-cookie";
    const TE = "te";
    const TRAILER = "trailer";
    const TRANSFER_ENCODING = "transfer-encoding";
    const UPGRADE = "upgrade";
    const USER_AGENT = "user-agent";
    const VARY = "vary";
    const VIA = "via";
    const WARNING = "warning";
    const WEBSOCKET_LOCATION = "websocket-location";
    const WEBSOCKET_ORIGIN = "websocket-origin";
    const WEBSOCKET_PROTOCOL = "websocket-protocol";
    const WWW_AUTHENTICATE = "www-authenticate";
}