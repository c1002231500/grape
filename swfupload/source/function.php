<?php
function cookie($name, $value='', $option=null) {
    // Ĭ������
    $config = array(
        'prefix' => 'student_', // cookie ����ǰ׺
        'expire' => 86400, // cookie ����ʱ��
        'path' => '/', // cookie ����·��
        'domain' => '', // cookie ��Ч����
    );
    // ��������(�Ḳ���a������)
    if (!empty($option)) {
        if (is_numeric($option))
            $option = array('expire' => $option);
        elseif (is_string($option))
            parse_str($option, $option);
        $config = array_merge($config, array_change_key_case($option));
    }
    // ���ָ��ǰ׺������cookie
    if (is_null($name)) {
        if (empty($_COOKIE))
            return;
        // Ҫɾ����cookieǰ׺����ָ����ɾ��config���õ�ָ��ǰ׺
        $prefix = empty($value) ? $config['prefix'] : $value;
        if (!empty($prefix)) {// ���ǰ׺Ϊ���ַ�������������ֱ�ӷ���
            foreach ($_COOKIE as $key => $val) {
                if (0 === stripos($key, $prefix)) {
                    setcookie($key, '', time() - 3600, $config['path'], $config['domain']);
                    unset($_COOKIE[$key]);
                }
            }
        }
        return;
    }
    $name = $config['prefix'] . $name;
    if ('' === $value) {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null; // ��ȡָ��Cookie
    } else {
        if (is_null($value)) {
            setcookie($name, '', time() - 3600, $config['path'], $config['domain']);
            unset($_COOKIE[$name]); // ɾ��ָ��cookie
        } else {
            // ����cookie
            $expire = !empty($config['expire']) ? time() + intval($config['expire']) : 0;
            setcookie($name, $value, $expire, $config['path'], $config['domain']);
            $_COOKIE[$name] = $value;
        }
    }
}