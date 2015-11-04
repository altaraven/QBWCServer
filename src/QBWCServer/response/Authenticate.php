<?php
namespace QBWCServer\response;

/**
 * Result container object for the SOAP ->authenticate() method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */
class Authenticate
{
    /**
     * A two element array indicating the result of the call to ->authenticate()
     *
     * @var array
     */
    public $authenticateResult;

    /**
     * Create a new result object
     *
     * @param string $ticket The ticket of the new login session
     * @param string $status The status of the new login session (blank, a company file path, or "nvu" for an invalid login)
     */
    public function __construct($ticket, $status, $wait_before_next_update = null, $min_run_every_n_seconds = null)
    {
        $this->authenticateResult = [$ticket, $status];

        if ((int)$wait_before_next_update) {
            $this->authenticateResult[] = (int)$wait_before_next_update;
        }

        if ((int)$min_run_every_n_seconds) {
            $this->authenticateResult[] = (int)$min_run_every_n_seconds;
        }
    }
}

