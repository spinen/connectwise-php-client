<?php

namespace Spinen\ConnectWise\Laravel;

/**
 * Trait to build connect_wise_member_id from email
 *
 * @property string $connect_wise_member_id The Id used to impersonate the user on ConnectWise server
 */
trait ConnectWiseMemberIdFromEmail
{
    /**
     * Accessor for ConnectWiseMemberId.
     *
     * @return string
     */
    public function getConnectWiseMemberIdAttribute()
    {
        return str_replace('.', '', explode('@', $this->email)[0]);
    }
}
