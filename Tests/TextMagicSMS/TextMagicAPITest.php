<?php
/**
 * @author Artur Magalhães <nezkal@gmail.com>
 */

namespace TextMagicSMS;


class TextMagicAPITest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TextMagicAPI
     */
    protected $api;


    public function setUp()
    {
        $this->api = new TextMagicAPI(array
            (
                'username' => 'username',
                'password' => 'your_api_password'
            )
        );
    }

    /**
     *
     */
    public function testSendSMS()
    {
        $phoneNumber = 554299881234;

        $this->setExpectedException('TextMagicSMS\Exception\AuthenticationException');
        $text = 'Hello World';
        $phones = array($phoneNumber);
        $is_unicode = true;

        $this->api->send($text, $phones, $is_unicode);
    }
}
 