<?php
/**
 * Routes for the Comment handling.
 */

$app->router->add("comments", function () use ($app) {
    // Add views to a specific region
    $app->view->add("comments/comments");

    // Render a standard page using layout
    $app->renderPage([
        "title" => "Kommentarer",
    ]);
});
