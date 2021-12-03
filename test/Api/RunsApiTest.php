<?php

namespace Qase\Client\Test\Api;

use PHPUnit\Framework\TestCase;
use Qase\Client\Api\RunsApi;
use Qase\Client\Configuration;
use Qase\Client\Model\RunCreate;

/**
 * RunsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RunsApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        foreach (['QASE_PROJECT_CODE', 'QASE_API_BASE_URL', 'QASE_API_TOKEN',] as $parameter) {
            if (!(getenv($parameter))) {
                throw new \RuntimeException($parameter . ' environment variable must be set');
            }
        }
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for completeRun
     *
     * Complete a specific run..
     *
     */
    public function testCompleteRun()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for createRun
     *
     * Create a new run..
     *
     */
    public function testCreateRun()
    {
        $client = new \GuzzleHttp\Client([]);

        $config = Configuration::getDefaultConfiguration()
            ->setHost(getenv('QASE_API_BASE_URL'))
            ->setApiKey('Token', getenv('QASE_API_TOKEN'));

        $runApi = new RunsApi($client, $config);

        $run = $runApi->createRun(getenv('QASE_PROJECT_CODE'), new RunCreate([
            'title' => sprintf('PHPUnit [%F]', microtime(true)),
            'is_autotest' => true,
        ]));

        self::assertIsInt($run->getResult()->getId());
        self::assertGreaterThan(0, $run->getResult()->getId());
    }

    /**
     * Test case for deleteRun
     *
     * Delete run..
     *
     */
    public function testDeleteRun()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRun
     *
     * Get a specific run..
     *
     */
    public function testGetRun()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getRuns
     *
     * Get all runs..
     *
     */
    public function testGetRuns()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateRunPublicity
     *
     * Update publicity of a specific run..
     *
     */
    public function testUpdateRunPublicity()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
