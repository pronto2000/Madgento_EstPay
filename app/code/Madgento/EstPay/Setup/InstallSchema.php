<?php

namespace Madgento\EstPay\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if (!$installer->tableExists('madgento_keys')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('madgento_keys')
            )->addColumn(
                'key_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Key ID'
            )->addColumn(
                    'title',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    128,
                    ['nullable' => false],
                    'Key Title'
            )->addColumn(
                'private_key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '8k',
                ['nullable' => true],
                'Private Key'
            )->addColumn(
                'public_key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '8k',
                ['nullable' => true],
                'Public Key'
            )->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Created At'
            )->addColumn(
                'updated_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                'Updated At'
            )->addIndex(
                $installer->getIdxName('madgento_keys', ['key_id']),
                ['key_id']
            )->setComment(
                'Asymmetric Key Pair Table'
            );
            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
