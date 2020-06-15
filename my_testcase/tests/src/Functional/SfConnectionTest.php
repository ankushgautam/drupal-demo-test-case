<?php

namespace Drupal\Tests\my_testcase\Functional;

use Drupal\Tests\BrowserTestBase;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;


/**
 * Test Salesforce Connection.
 *
 * @group my_testcase
 */
class SfConnectionTest extends BrowserTestBase {

    /**
     * {@inheritdoc}
     */
    protected $defaultTheme = 'stark';

    /**
     * {@inheritdoc}
     */
    protected $client;

    /**
     * {@inheritdoc}
     */
    public static $modules = [
        'my_testcase',
    ];

    /**
     * {@inheritdoc}
     */
    public function setUp(): void {
        $this->client = new Client([
            'base_uri' => 'https://test.salesforce.com'
        ]);
    }

    /**
     * Make sure the site still works. For now just check the front page.
     */
    public function testFrontPage() {
        // Check valid token.
        $response = $this->client->post('/services/oauth2/token', [
            RequestOptions::FORM_PARAMS => [
                'grant_type' => 'password',
                'client_id' => 'salesforce client id',
                'client_secret' => 'salesforce client secret',
                'username' => 'salesforce username',
                'password' => 'salesfroce password',
            ],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('access_token', $data);
    }

    /**
     *  Implements tearDown().
     */
    public function tearDown() : void {
        $this->client = null;
    }
}
