<?php
require_once(dirname(__FILE__).'/../../../init.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsXmlRpcRequestTest extends MY_UnitTestCase
{
    protected $myclass = 'XoopsXmlRpcRequest';
    
    public function test___construct()
	{
		$x = new $this->myclass();
		$this->assertInstanceof($this->myclass, $x);
		$this->assertInstanceof('XoopsXmlRpcDocument', $x);
	}

    public function test___construct100()
    {
    }

    public function test_render()
    {
    }
}
