<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data_provider.request_sql' shared service.

return $this->services['prestashop.core.grid.data_provider.request_sql'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(${($_ = isset($this->services['prestashop.core.admin.request_sql.repository']) ? $this->services['prestashop.core.admin.request_sql.repository'] : $this->load('getPrestashop_Core_Admin_RequestSql_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.query.doctrine_query_parser']) ? $this->services['prestashop.core.grid.query.doctrine_query_parser'] : $this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser()) && false ?: '_'}, 'request_sql');
