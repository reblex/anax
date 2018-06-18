<?php

/**
 * Get value from GET array or return default value.
 * @param  string $key     Key for which value to get
 * @param  mixed $default Return value if key is not found
 * @return $_GET value or default
 */
function getGet($key, $default = null)
{
    return isset($_GET[$key])
        ? $_GET[$key]
        : $default;
}


/**
 * Get value from POST variable or return default value.
 *
 * @param mixed $key     to look for, or value array
 * @param mixed $default value to set if key does not exists
 *
 * @return mixed value from POST or the default value
 */
function getPost($key, $default = null)
{
    if (is_array($key)) {
        foreach ($key as $val) {
            $post[$val] = getPost($val);
        }
        return $post;
    }

    return isset($_POST[$key])
        ? $_POST[$key]
        : $default;
}
