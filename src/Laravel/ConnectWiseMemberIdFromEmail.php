<?php

namespace Spinen\ConnectWise\Laravel;

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
