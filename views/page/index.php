<h1><?= 'this is the view' ?></h1>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($pages as $page) : ?>
            <tr>
              <td><?= $page['id']?></td>
              <td><?= $page['title']?></td>
              <td><?= $page['slug']?></td>
              <td><?= $page['content']?></td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>
