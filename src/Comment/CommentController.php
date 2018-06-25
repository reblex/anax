<?php

namespace Anax\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Comment Controller.
 */
class CommentController implements InjectionAwareInterface
{
    use InjectionAwareTrait;


    // public function makePost()
    // {
    //     $poster = getPost("poster") ?: "";
    //     $content = getPost("content") ?: "";
    //     return $this->di->get("comment")->makePost($poster, $content);
    // }
    //
    // public function getAllPosts()
    // {
    //     $comments = $this->di->get("comment")->getAll();
    //     $this->di->get("view")->add("comments/comments", ["content" => $comments], "main");
    //     $this->di->get("pageRender")->renderPage(["title" => "Kommentarer"]);
    // }
    //

    /**
     * Show all items.
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "A collection of items";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment = new Comment();
        $comment->setDb($this->di->get("db"));

        $data = [
            "content" => $comment->findAll(),
        ];

        $view->add("comments/view-all", $data);

        $pageRender->renderPage(["title" => $title]);
    }


    //
    // /**
    //  * Handler with form to create a new item.
    //  *
    //  * @return void
    //  */
    // public function getPostCreateItem()
    // {
    //     $title      = "Create a item";
    //     $view       = $this->di->get("view");
    //     $pageRender = $this->di->get("pageRender");
    //     $form       = new CreateForm($this->di);
    //
    //     $form->check();
    //
    //     $data = [
    //         "form" => $form->getHTML(),
    //     ];
    //
    //     $view->add("book/crud/create", $data);
    //
    //     $pageRender->renderPage(["title" => $title]);
    // }
    //
    //
    //
    // /**
    //  * Handler with form to delete an item.
    //  *
    //  * @return void
    //  */
    // public function getPostDeleteItem()
    // {
    //     $title      = "Delete an item";
    //     $view       = $this->di->get("view");
    //     $pageRender = $this->di->get("pageRender");
    //     $form       = new DeleteForm($this->di);
    //
    //     $form->check();
    //
    //     $data = [
    //         "form" => $form->getHTML(),
    //     ];
    //
    //     $view->add("book/crud/delete", $data);
    //
    //     $pageRender->renderPage(["title" => $title]);
    // }
    //
    //
    //
    // /**
    //  * Handler with form to update an item.
    //  *
    //  * @return void
    //  */
    // public function getPostUpdateItem($id)
    // {
    //     $title      = "Update an item";
    //     $view       = $this->di->get("view");
    //     $pageRender = $this->di->get("pageRender");
    //     $form       = new UpdateForm($this->di, $id);
    //
    //     $form->check();
    //
    //     $data = [
    //         "form" => $form->getHTML(),
    //     ];
    //
    //     $view->add("book/crud/update", $data);
    //
    //     $pageRender->renderPage(["title" => $title]);
    // }
}
