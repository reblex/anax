<?php

return [
    "routes" => [
        [
            "info" => "Alla kommentarer.",
            "requestMethod" => "get",
            "path" => "comments",
            "callable" => ["commentController", "getAllPosts"],
        ],
    ]
];
