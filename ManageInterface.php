<?php

namespace App\Lib;

use Swoft\Core\ResultInterface;
/**
 * The interface of bsp.manage service
 * 
 * @method ResultInterface getOneManage()
 * @method ResultInterface getListManage()
 * @method ResultInterface getAllManage()
 * @method ResultInterface addManage()
 * @method ResultInterface updateManage()
 * @method ResultInterface deleteManage()
 * 
 * @method ResultInterface getListConfig()
 * @method ResultInterface getAllOneServiceConfig()
 * @method ResultInterface getAllBaseServiceConfig()
 * @method ResultInterface addConfig()
 * @method ResultInterface updateConfig()
 * @method ResultInterface deleteConfig()
 * 
*/
interface ManageInterface
{
    /**
     * 系统管理--服务--mange 
     */
    public function getOneManage();             //get one
    public function getListManage();            //get list
    public function getAllManage();             //get all
    public function addManage();                //add
    public function updateManage();             //update
    public function deleteManage();             //delete

    /**
     * 系统管理--配置--config
     */
    public function getListConfig();            //get list
    public function getAllOneServiceConfig();   //get all 某个服务get all
    public function getAllBaseServiceConfig();  //get all 某个base服务get all
    public function addConfig();                //add
    public function updateConfig();             //update
    public function deleteConfig();             //delete
}