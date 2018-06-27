<?php

return [
    "routes" => [
        [
            "info" => "Alla kommentarer.",
            "requestMethod" => "get",
            "path" => "comments",
            "callable" => ["commentController", "getIndex"],
        ],
        [
            "info" => "Ny kommentar.",
            "requestMethod" => "get|post",
            "path" => "comments/new",
            "callable" => ["commentController", "getPostNewComment"],
        ],
    ]
];
