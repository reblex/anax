<?php
/**
 * Routes for user controller.
 */
return [
    "routes" => [
        [
            "info" => "User Controller index.",
            "requestMethod" => "get",
            "path" => "",
            "callable" => ["userController", "getIndex"],
        ],
        [
            "info" => "User Controller index for Admin.",
            "requestMethod" => "get",
            "path" => "admin",
            "callable" => ["userController", "getIndexAdmin"],
        ],
        [
            "info" => "Login a user.",
            "requestMethod" => "get|post",
            "path" => "login",
            "callable" => ["userController", "getPostLogin"],
        ],
        [
            "info" => "Logout",
            "requestMethod" => "get",
            "path" => "logout",
            "callable" => ["userController", "getLogout"],
        ],
        [
            "info" => "Edit a user",
            "requestMethod" => "get|post",
            "path" => "edit",
            "callable" => ["userController", "getPostEditUser"],
        ],
        [
            "info" => "Create a user.",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["userController", "getPostCreateUser"],
        ],
    ]
];
