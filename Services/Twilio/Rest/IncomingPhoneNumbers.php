<?php
defined( '_JEXEC' ) or die;


class Services_Twilio_Rest_IncomingPhoneNumbers
    extends Services_Twilio_ListResource
{
    function create(array $params = array())
    {
        return parent::_create($params);
    }
}
