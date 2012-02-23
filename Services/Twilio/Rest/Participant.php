<?php
defined( '_JEXEC' ) or die;


class Services_Twilio_Rest_Participant
    extends Services_Twilio_InstanceResource
{
    public function mute()
    {
        $this->update('Muted', 'true');
    }
}
