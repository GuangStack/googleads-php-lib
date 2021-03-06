<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getActivityGroupsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201802\ActivityGroupPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201802\ActivityGroupPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\ActivityGroupPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\ActivityGroupPage $rval
     * @return \Google\AdsApi\Dfp\v201802\getActivityGroupsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
