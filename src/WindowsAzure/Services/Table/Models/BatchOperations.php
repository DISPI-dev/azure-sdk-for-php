<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   PEAR2\WindowsAzure\Services\Table\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
 
namespace PEAR2\WindowsAzure\Services\Table\Models;

/**
 * Holds batch operation change set.
 *
 * @category  Microsoft
 * @package   PEAR2\WindowsAzure\Services\Table\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class BatchOperations
{
    /**
     * @var array
     */
    private $_operations;
    
    public function __construct()
    {
        $this->_operations = array();
    }
    
    /**
     * Gets the batch operations.
     * 
     * @return array
     */
    public function getOperations()
    {
        return $this->_operations;
    }
    
    /**
     * Sets the batch operations.
     * 
     * @param array $operations The batch operations.
     * 
     * @return none
     */
    public function setOperations($operations)
    {
        $this->_operations = $operations;
    }
    
    /**
     * Adds operation to the batch operations.
     * 
     * @param mix $operation The operation to add.
     * 
     * @return none
     */
    public function addOperation($operation)
    {
        $this->_operations[] = $operation;
    }
    
    /**
     * Adds insertEntity operation.
     * 
     * @param string $table  The table name.
     * @param Entity $entity The entity instance.
     * 
     * @return none
     */
    public function addInsertEntity($table, $entity)
    {
        $operation = new BatchOperation();
        $type      = BatchOperationType::INSERT_ENTITY_OPERATION;
        $operation->setType($type);
        $operation->addParam(BatchOperationParamName::BP_TABLE, $table);
        $operation->addParam(BatchOperationParamName::BP_ENTITY, $entity);
        $this->addOperation($operation);
    }
    
    /**
     * Adds updateEntity operation.
     * 
     * @param string $table  The table name.
     * @param Entity $entity The entity instance.
     * 
     * @return none
     */
    public function addUpdateEntity($table, $entity)
    {
        $operation = new BatchOperation();
        $type      = BatchOperationType::UPDATE_ENTITY_OPERATION;
        $operation->setType($type);
        $operation->addParam(BatchOperationParamName::BP_TABLE, $table);
        $operation->addParam(BatchOperationParamName::BP_ENTITY, $entity);
        $this->addOperation($operation);
    }
    
    /**
     * Adds mergeEntity operation.
     * 
     * @param string $table  The table name.
     * @param Entity $entity The entity instance.
     * 
     * @return none
     */
    public function addMergeEntity($table, $entity)
    {
        $operation = new BatchOperation();
        $type      = BatchOperationType::MERGE_ENTITY_OPERATION;
        $operation->setType($type);
        $operation->addParam(BatchOperationParamName::BP_TABLE, $table);
        $operation->addParam(BatchOperationParamName::BP_ENTITY, $entity);
        $this->addOperation($operation);
    }
    
    /**
     * Adds insertOrReplaceEntity operation.
     * 
     * @param string $table  The table name.
     * @param Entity $entity The entity instance.
     * 
     * @return none
     */
    public function addInsertOrReplaceEntity($table, $entity)
    {
        $operation = new BatchOperation();
        $type      = BatchOperationType::INSERT_REPLACE_ENTITY_OPERATION;
        $operation->setType($type);
        $operation->addParam(BatchOperationParamName::BP_TABLE, $table);
        $operation->addParam(BatchOperationParamName::BP_ENTITY, $entity);
        $this->addOperation($operation);
    }
    
    /**
     * Adds insertOrMergeEntity operation.
     * 
     * @param string $table  The table name.
     * @param Entity $entity The entity instance.
     * 
     * @return none
     */
    public function addInsertOrMergeEntity($table, $entity)
    {
        $operation = new BatchOperation();
        $type      = BatchOperationType::INSERT_MERGE_ENTITY_OPERATION;
        $operation->setType($type);
        $operation->addParam(BatchOperationParamName::BP_TABLE, $table);
        $operation->addParam(BatchOperationParamName::BP_ENTITY, $entity);
        $this->addOperation($operation);
    }
    
    /**
     * Adds deleteEntity operation.
     * 
     * @param string $table        The table name.
     * @param string $partitionKey The entity partition key.
     * @param string $rowKey       The entity row key.
     * @param string $etag         The entity etag.
     * 
     * @return none
     */
    public function addDeleteEntity($table, $partitionKey, $rowKey, $etag)
    {
        $operation = new BatchOperation();
        $type      = BatchOperationType::DELETE_ENTITY_OPERATION;
        $operation->setType($type);
        $operation->addParam(BatchOperationParamName::BP_TABLE, $table);
        $operation->addParam(BatchOperationParamName::BP_ROW_KEY, $rowKey);
        $operation->addParam(BatchOperationParamName::BP_ETAG, $etag);
        $operation->addParam(
            BatchOperationParamName::BP_PARTITION_KEY,
            $partitionKey
        );
        $this->addOperation($operation);
    }
}

?>
