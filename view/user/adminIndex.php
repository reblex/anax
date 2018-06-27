<?php
namespace Anax\View;

$urlToCreate = url("user/admin/create");
?>

<h1>Admin</h1>
<h3>Användare</h3>

<p>
    <a href='<?= $urlToCreate ?>'>Create</a>
</p>

<table>
    <tr>
        <th>Id</th>
        <th>username</th>
        <th>email</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php foreach ($data["users"] as $user) : ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->email ?></td>
        <td><a href="<?= url("user/admin/edit/{$user->id}"); ?>">edit</a></td>
        <td><a href="<?= url("user/admin/delete/{$user->id}"); ?>">delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>
