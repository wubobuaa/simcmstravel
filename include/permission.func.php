<?php
/*
 本软件版权归作者所有,在投入使用之前注意获取许可
 作者：北京市普艾斯科技有限公司
 项目：simcms_锐游1.0
 电话：010-58480317
 网址：http://www.simcms.net
 simcms.net保留全部权力，受相关法律和国际		  		
 公约保护，请勿非法修改、转载、散播，或用于其他赢利行为，并请勿删除版权声明。
*/
//获得权限PID字符串
function get_permission_str($uid='')
{
    global $db;
    if (empty($uid)) $uid = $_SESSION['ADMIN_UID'];
    $rs = $db->row_select_one('admin',"adminid=$uid",'permission');
    return $rs['permission'];
}

//获得权限详细数组
function get_permission_arr($uid='')
{
    global $db;
    $str_id = get_permission_str($uid);
    if (empty($str_id)) return array();
    $rs = $db->row_select('permission',"pid in($str_id)");
    $arr = array();
    foreach ($rs as $v)
    {
        if (!empty($v['mod'])) $arr[$v['mod']][] = $v['ac'];
    }
    return (array)$arr;
}

//检查用户是否有权限
function has_permission()
{
    global $mod;
    if (in_array($mod,array('main','index','login'))) return true;
    if ($_SESSION['ADMIN_TYPE'] == 'administrator') return true;
    $arr_permission = get_permission_arr();
    if (!isset($arr_permission[$mod])) return false;
    if (count($arr_permission[$mod]) == 1 && $arr_permission[$mod][0] == '') return true;
    foreach ($arr_permission[$mod] as $v)
    {
        if (isset($_REQUEST['ac']) && in_array($_REQUEST['ac'],(array)$v)) return true;
    }
    return false;
}

function permission_chk()
{
    if (has_permission()) return '';
    header('Content-type:text/html;Charset='.CHARSET);
    exit('没有权限');
}
?>