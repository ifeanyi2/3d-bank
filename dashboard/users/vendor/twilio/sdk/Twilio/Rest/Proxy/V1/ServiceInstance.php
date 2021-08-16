<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 * 
 * @property string sid
 * @property string uniqueName
 * @property string accountSid
 * @property string callbackUrl
 * @property integer defaultTtl
 * @property string numberSelectionBehavior
 * @property string geoMatchLevel
 * @property string interceptCallbackUrl
 * @property string outOfSessionCallbackUrl
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string url
 * @property array links
 */
class ServiceInstance extends InstanceResource {
    protected $_sessions = null;
    protected $_phoneNumbers = null;
    protected $_shortCodes = null;

    /**
     * Initialize the ServiceInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid A string that uniquely identifies this Service.
     * @return \Twilio\Rest\Proxy\V1\ServiceInstance 
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'callbackUrl' => Values::array_get($payload, 'callback_url'),
            'defaultTtl' => Values::array_get($payload, 'default_ttl'),
            'numberSelectionBehavior' => Values::array_get($payload, 'number_selection_behavior'),
            'geoMatchLevel' => Values::array_get($payload, 'geo_match_level'),
            'interceptCallbackUrl' => Values::array_get($payload, 'intercept_callback_url'),
            'outOfSessionCallbackUrl' => Values::array_get($payload, 'out_of_session_callback_url'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        );

        $this->solution = array('sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Proxy\V1\ServiceContext Context for this ServiceInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new ServiceContext($this->version, $this->solution['sid']);
        }

        return $this->context;
    }

    /**
     * Fetch a ServiceInstance
     * 
     * @return ServiceInstance Fetched ServiceInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the ServiceInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Update the ServiceInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Access the sessions
     * 
     * @return \Twilio\Rest\Proxy\V1\Service\SessionList 
     */
    protected function getSessions() {
        return $this->proxy()->sessions;
    }

    /**
     * Access the phoneNumbers
     * 
     * @return \Twilio\Rest\Proxy\V1\Service\PhoneNumberList 
     */
    protected function getPhoneNumbers() {
        return $this->proxy()->phoneNumbers;
    }

    /**
     * Access the shortCodes
     * 
     * @return \Twilio\Rest\Proxy\V1\Service\ShortCodeList 
     */
    protected function getShortCodes() {
        return $this->proxy()->shortCodes;
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Proxy.V1.ServiceInstance ' . implode(' ', $context) . ']';
    }
}