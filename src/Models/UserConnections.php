<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class UserConnections implements JsonSerializable
{
    /**
     * If the response is successful or not
     * @var bool|null $success public property
     */
    public $success;

    /**
     * The object of UserConnections
     * @var \Pipedrive\Models\Data20|null $data public property
     */
    public $data;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $success Initialization value for $this->success
     * @param Data20 $data    Initialization value for $this->data
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->success = func_get_arg(0);
            $this->data    = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['success'] = $this->success;
        $json['data']    = $this->data;

        return $json;
    }
}