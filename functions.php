<?php
require_once 'sql.php';
class func {

    public static function checkLoginState($SQL)
    {
        if (!isset($_SESSION['id']) || !isset($_COOKIE['PHPSESSID']))
        {
            session_start();
        }
        if (isset($_COOKIE['userid']) && isset($_COOKIE['token']) && isset($_SESSION['serial']))
        {
            $query = "SELECT * FROM sessions WHERE session_userid =:userid AND session_token =:token AND session_serial =:serial;";

            $userid = $_COOKIE['userid'];
            $token = $_COOKIE['token'];
            $serial = $_COOKIE['serial'];

            $stmt = $SQL->prepare($query);
            $stmt -> execute(array(':userid' => $userid, ':token' => $token, ':serial' => $serial));

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['session_userid'] > 0)
            {
                if (
                    $row['session_userid'] == $_COOKIE['userid'] &&
                    $row['session_token'] == $_COOKIE['token'] &&
                    $row['session_serial'] == $_COOKIE['serial'] 
                )
                {
                    if (
                        $row['session_userid'] == $_SESSION['userid'] &&
                        $row['session_token'] == $_SESSION['token'] &&
                        $row['session_serial'] == $_SESSION['serial']
                        )
                    {
                        return true;
                    }
                    else 
                    {
                    createSession($_COOKIE['username'], $_COOKIE['userid'], $_COOKIE['token'], $_COOKIE['serial']);
                    return true;
                    }
                }
            }
        }
    }

    public static function createStrings($len)
    {
        $string = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789";
        $s = '';
        $r_new = '';
        $r_old = '';

        for($i = 1; $i < $len; $i++)
        {
            while ($r_old == $r_new)
            {
                $r_new = rand(0,40);
            }
            $r_old = $r_new;

            $s = $s.$string[$r_new];
        }
    return $s;
    }

    public static function createRecord($user_id)
    {
        $SQL = new SQL();
        $SQL->deleteSession($user_id);

        date_default_timezone_set('Europe/Vilnius');
        $date = date('m/d/Y H:i:s', time());

        $token = func::createStrings(20);
        $serial = func::createStrings(20);

        func::createCookie($user_id, $serial);
        func::createSession($user_id, $token, $serial);

        $SQL->createSessionRecord($user_id, $token, $serial, $date);
    }

    public static function createCookie($user_id, $serial)
    {
        setcookie('user_id', $user_id, time() + (86400) * 2, "/");
        setcookie('serial', $serial, time() + (86400) * 2, "/");
    }

    public static function deleteCookie()
    {
        setcookie('user_id', $user_id, time() + (86400) - 1, "/");
        setcookie('serial', $serial, time() + (86400) - 1, "/");
    }

    public static function createSession($user_id, $token, $serial)
    {
        $_SESSION['user_id'] = $user_id; 
        $_SESSION['token'] = $token; 
        $_SESSION['serial'] = $serial; 
    }
}
?>