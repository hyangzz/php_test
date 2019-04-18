<?php
/**
 * Created by PhpStorm.
 * User: mastery
 * Date: 2019-04-18
 * Time: 00:06
 */

namespace App\Http\Controllers;


class OssUploadController extends Controller
{
//    function gmt_iso8601($time) {
//        $dtStr = date("c", $time);
//        $mydatetime = new DateTime($dtStr);
//        $expiration = $mydatetime->format(DateTime::ISO8601);
//        $pos = strpos($expiration, '+');
//        $expiration = substr($expiration, 0, $pos);
//        return $expiration."Z";
//    }

    function UploadConfig(){
        $now = time();
        $expire = 30;  //设置该policy超时时间是10s. 即这个policy过了这个有效时间，将不能访问。
        $end = $now + $expire;
       // $expiration = gmt_iso8601($end);


        //最大文件大小.用户可以自己设置
        $condition = array(0=>'content-length-range', 1=>0, 2=>1048576000);
        $conditions[] = $condition;

        // 表示用户上传的数据，必须是以$dir开始，不然上传会失败，这一步不是必须项，只是为了安全起见，防止用户通过policy上传到别人的目录。
        $start = array(0=>'starts-with', 1=>'$key', 2=>config('oss.dir'));
        $conditions[] = $start;


        $arr = array('conditions'=>$conditions);
        $policy = json_encode($arr);
        $base64_policy = base64_encode($policy);
        $string_to_sign = $base64_policy;
        $signature = base64_encode(hash_hmac('sha1', $string_to_sign, config('oss.key'), true));

        $response = array();
        $response['accessid'] = config('oss.id');
        $response['host'] = config('oss.host');
        $response['policy'] = $base64_policy;
        $response['signature'] = $signature;
        $response['expire'] = $end;
     //   $response['callback'] = $base64_callback_body;
        $response['dir'] = config('oss.dir');  // 这个参数是设置用户上传文件时指定的前缀。
        echo json_encode($response);
    }







}