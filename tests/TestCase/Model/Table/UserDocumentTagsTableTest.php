<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserDocumentTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserDocumentTagsTable Test Case
 */
class UserDocumentTagsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_document_tags',
        'app.user_documents',
        'app.users',
        'app.groups',
        'app.documents',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserDocumentTags') ? [] : ['className' => 'App\Model\Table\UserDocumentTagsTable'];
        $this->UserDocumentTags = TableRegistry::get('UserDocumentTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserDocumentTags);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
