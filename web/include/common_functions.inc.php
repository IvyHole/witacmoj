<?php

// Server Vars
function get_client_ip($type = 0)
{
    $type = $type ? 1 : 0;
    static $ip = NULL;
    if ($ip !== NULL) return $ip[$type];
if ($_SERVER['HTTP_X_REAL_IP']) {//nginx 代理模式下，获取客户端真实IP
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {//客户端的ip
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {//浏览当前页面的用户计算机的网关
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos) unset($arr[$pos]);
        $ip = trim($arr[0]);
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];//浏览当前页面的用户计算机的ip地址
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf("%u", ip2long($ip));
    $ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

function utf8_substr($str, $start = 0)
{
    /*
        utf-8编码下截取中文字符串,参数可以参照substr函数
        @param $str 要进行截取的字符串
        @param $start 要进行截取的开始位置，负数为反向截取
        @param $end 要进行截取的长度
    */
    if (empty($str)) {
        return false;
    }
    if (function_exists('mb_substr')) {
        if (func_num_args() >= 3) {
            $end = func_get_arg(2);
            return mb_substr($str, $start, $end, 'utf-8');
        } else {
            mb_internal_encoding("UTF-8");
            return mb_substr($str, $start);
        }
    } else {
        $null = "";
        preg_match_all("/./u", $str, $ar);
        if (func_num_args() >= 3) {
            $end = func_get_arg(2);
            return join($null, array_slice($ar[0], $start, $end));
        } else {
            return join($null, array_slice($ar[0], $start));
        }
    }
}

function pdo_real_escape_string($value, $pdo)
{
    return substr($pdo->quote($value), 1, -1);
}

function fire($status, $message, $result = null)
{
    /*
        Ajax返回json，用于API。
        @param $status HTTP状态码
        @param $message 提示信息，正常则"OK"，不正常提示错误原因
        @param $result 待返回结果
    */
    if ($result == null) unset($result);
    $httpStatusCode = array(
        200 => "HTTP/1.1 200 OK",
        400 => "HTTP/1.1 400 Bad Request",
        401 => "HTTP/1.1 401 Unauthorized",
        403 => "HTTP/1.1 403 Forbidden",
        404 => "HTTP/1.1 404 Not Found",
        500 => "HTTP/1.1 500 Internal Server Error",
        501 => "HTTP/1.1 501 Not Implemented",
        503 => "HTTP/1.1 503 Service Unavailable",
        504 => "HTTP/1.1 504 Gateway Time-out"
    );
    if (function_exists('http_response_code')) {
        http_response_code(intval($status));
    } else {
        @header($httpStatusCode[$status]);
    }
    header('Content-Type: application/json');
    exit(json_encode(compact("status", "message", "result")));
}

function defined_int_or_die($val)
{
    /*
        检查变量是否存在且是否是数值类型。
        如果均满足则返回对应的 int 值，否则 fire 400 (注意：`fire()`会调用`exit()`)。
        为了防止过多的 isset 检查而准备，使用时建议配合 @ 使用，即`@defined_int_or_die($someValue)`。

        @param $val 待检查值
    */
    if (isset($val) && is_numeric($val)) return intval($val);
    else fire(400, "Missing argument or invalid argument given");
}

function defined_or_die($val)
{
    /*
        检查变量是否存在。
        如果均满足则返回该值，否则 fire 400 (注意：`fire()`会调用`exit()`)。
        为了防止过多的 isset 检查而准备，使用时建议配合 @ 使用，即`@defined_int_or_die($someValue)`。

        @param $val 待检查值
    */
    if (isset($val)) return $val;
    else fire(400, "Missing argument");
}

//require_once("setting_db.inc.php");
function send_user_email($pdo, $to_user, $from_user, $title, $content)
{
    $to_user = $pdo->quote($to_user);
    $title = $pdo->quote($title);
    $from_user = $pdo->quote($from_user);
    $content = $pdo->quote($content);
    $sql = $pdo->prepare("INSERT INTO mail(to_user,from_user,title,content,in_date)
								VALUES($to_user,$from_user,$title,$content,now())");
    if ($sql->execute()) {
        return "Success";
    } else {
        return "Error";
    }
}

?>
