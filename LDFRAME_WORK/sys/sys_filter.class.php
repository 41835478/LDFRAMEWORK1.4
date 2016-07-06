<?php
/**
 * LD库文件
 * ============================================================================
 * * 版权所有 2016-2018   零度网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.hbclnx.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id:sys_filter.class.php  2016年7月6日  Lisonglin
 */
class sys_filter extends FilterIterator {
 	private $filter;  
    public function __construct(Iterator $iterator , $filter )
    {
        parent::__construct($iterator);
        $this->filter = $filter;
       
    }
    public function accept()
    {
        $filter = $this->getInnerIterator()->current();
        if(strcasecmp($filter,$this->filter) == 0) {
            return false;
        }        
        return true;
    }
}