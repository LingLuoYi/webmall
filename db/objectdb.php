<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 2:21 PM
 * 假装有数据库  ╯︿╰﹀
 */
class objectdb
{

    private static $db;

    //成功返回 objectdb 对象,不需要在外面使用new
    //目录需要写文件的权限
    /**
     * 连接数据库
     * @param $dbname
     * @return bool|objectdb
     */
    public function defaultdb($dbname)
    {
        self::$db = $dbname;
        if(file_exists($dbname))
        {
            return new objectdb();
        }

        $ret=file_put_contents($dbname,serialize(array()));
        if ($ret > 0) {
            return new objectdb();
        }
        return false;
    }

    /**
     * 添加数据key,value 或更新
     * @param $key
     * @param $value
     * @return bool
     */
    public function setValueForKey($key,$value)
    {
        $arrdata = $this->getDBarray();
        $arrdata[$key] = $value;
        return $this->setDBarray($arrdata);
    }


    /**
     * 删除指定key的数据
     * @param $key
     */
    public function removeValueForKey($key)
    {
        $arrdata = $this->getDBarray();
        unset($arrdata[$key]);
    }


    /**
     * 获取指定key的数据
     * @param $key
     * @return mixed
     */
    public function getValueForKey($key)
    {
        $arrdata = $this->getDBarray();
        return $arrdata[$key];
    }

    /**
     * 获取所有的数据
     * @return mixed
     */
    public function getAll()
    {
        $arrdata = $this->getDBarray();
        return $arrdata;
    }

    /**
     * 获取所有的key
     * @return array
     */
    public function getAllKey()
    {
        $arrdata = $this->getDBarray();
        return array_keys($arrdata);
    }

    /**
     * 清空db数据
     * @return bool|int
     */
    public function cleardb()
    {
        $ret=file_put_contents(self::$db,serialize(array()));
        return $ret;
    }


    //private get
    private function getDBarray()
    {
        $rdata=file_get_contents(self::$db);
        return unserialize($rdata);
    }

    //private set
    private function setDBarray($arr)
    {
        $ret=file_put_contents(self::$db,serialize($arr));
        if ($ret > 0) {
            return true;
        }else
        {
            return false;
        }
    }


}