<?php
namespace QBWCServer\response;

/**
 * QuickBooks response object for responses to the ->interactiveDone() SOAP method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class InteractiveDone
{
    /**
     * A string indicating the interactive session is done
     *
     * @var string
     */
    public $interactiveDoneResult;

    /**
     * Create a new result object
     *
     * @param string $str
     */
    public function __construct($str)
    {
        $this->interactiveDoneResult = $str;
    }
}
