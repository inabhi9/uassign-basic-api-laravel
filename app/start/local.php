<?php

Response::macro('apiResponse', function($status, $resource, $data, $httpCode=200)
{
    return Response::json(array('status' => $status, $resource => $data), $httpCode);
});