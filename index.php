<?php
/*
    @author ZDLAY 我是指针* DLAY 瀚于世间 chinadlay 随风 Stranger 陌生人 萌夫 梦境 惊奇猫
    @email chinadlay@163.com
    @weixin zs1692548226

    * 信息：Happyy框架V2.0.07
    * 作者：20秋中专计算机1班(柯YZ)

    * 版本号：V2.0.07
    * 更新
    - Happyy框架加载方法，将所有数据文件移动至app
    - 新建公共pulic和静态文件库static
    - 重写Happyy框架common公共库构造函数
    - 类库使用全局变量调用数据库变量

    * 更新 时间：2022-01-26 18:42
    - Happyy再次减少目录结构让目录结构从复杂变为更简单
    
    
    * 支持
    - Happyy框架
    - PHP HTML CSS JavaScript
    - 伪静态请设置为thinkphp
    
    * 感谢
    - OP支付模板 OP支付common写法
    - thinkphp目录结构 thinkphp伪静态加载方法
    - thinkphp全局函数灵感
*/


//加载Happyy配置
// +----------------------------------------------------------------------
require_once __DIR__ . '/../Config/config.inc.php';


//加载Happyy公共入口
// +----------------------------------------------------------------------
require_once __HAPPYY_SUPPORT_DIR__ . "Common.php";


//接收入口参数
// +----------------------------------------------------------------------
$request_action = Happyy_function::chinadlay($_GET['s']);


//解析入口
// +----------------------------------------------------------------------
Happyy::index($request_action);


//输出HTML尾部
// +----------------------------------------------------------------------
Happyy::html_end();


//关闭数据库链接
// +-----------------------------------------------------------------------
Happyy::database_close();
?>