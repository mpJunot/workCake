<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProduitsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProduitsTable Test Case
 */
class ProduitsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProduitsTable
     */
    protected $Produits;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Produits',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Produits') ? [] : ['className' => ProduitsTable::class];
        $this->Produits = $this->getTableLocator()->get('Produits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Produits);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProduitsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
