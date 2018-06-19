<?php

return [
    "routes" => [
        [
            "info" => "Start the session and initiate the REM Server.",
            "requestMethod" => null,
            "path" => "api/**",
            "callable" => ["remController", "anyPrepare"]
        ],
        [
            "info" => "Init or re-init the REM Server.",
            "requestMethod" => "get",
            "path" => "api/init",
            "callable" => ["remController", "anyInit"]
        ],
        [
            "info" => "Destroy the session.",
            "requestMethod" => "get",
            "path" => "api/destroy",
            "callable" => ["remController", "anyDestroy"]
        ],
        [
            "info" => "Get the dataset or parts of it.",
            "requestMethod" => "get",
            "path" => "api/{dataset:alphanum}",
            "callable" => ["remController", "getDataset"]
        ],
        [
            "info" => "Get one item from the dataset.",
            "requestMethod" => "get",
            "path" => "api/{dataset:alphanum}/{id:digit}",
            "callable" => ["remController", "getItem"]
        ],
        [
            "info" => "Create a new item and add to the dataset.",
            "requestMethod" => "post",
            "path" => "api/{dataset:alphanum}",
            "callable" => ["remController", "postItem"]
        ],
        [
            "info" => "Upsert/replace an item in the dataset.",
            "requestMethod" => "put",
            "path" => "api/{dataset:alphanum}/{id:digit}",
            "callable" => ["remController", "putItem"]
        ],
        [
            "info" => "Delete an item from the dataset.",
            "requestMethod" => "delete",
            "path" => "api/{dataset:alphanum}/{id:digit}",
            "callable" => ["remController", "deleteItem"]
        ],
        [
            "info" => "Show a message that the route is unsupported, a local 404.",
            "requestMethod" => null,
            "path" => "api/**",
            "callable" => ["remController", "anyUnsupported"]
        ],
    ]
];
