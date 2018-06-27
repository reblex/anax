<?php
namespace Anax\View;

use Anax\User\User;
?>

<h1><u>Kommentarer</u></h1>
<br><br>

<?php
foreach ($data["comments"] as $comment) {
    $commenter = new User();
    $commenter->setDb($this->di->get("db"));
    $commenter->find("id", $comment->userId);

    echo("<i><u>{$commenter->username}</u></i>");
    echo("<br/>{$comment->content}");

    if ($data["currentAccount"] == $commenter->username || $data["currentUserRights"] == "admin") {
        echo("<br/>");
        $editUrl = url("comments/edit/$comment->id");
        $deleteUrl = url("comments/delete/$comment->id");
        echo("<a href='$editUrl'>Edit</a> ");
        echo("<a href='$deleteUrl'>Delete</a>");
    }

    echo("<br/><br/>");
}
?>
