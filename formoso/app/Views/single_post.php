<?= $this->extend('layouts/main')?>

<?= $this->section('content')?>
<h1><?= $title?></h1>
<a href="/blog/delete/<?= $post['post_id'] ?>"><button class="btn btn-danger">Delete</button></a>
<a href="/blog/edit/<?= $post['post_id'] ?>"><button class="btn btn-primary">Edit</button></a>


<?= $this->endSection() ?>