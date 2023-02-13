<?= $this->extend('layouts/main')?>

<?= $this->section('content')?>
<h1><?= $title?></h1>

<div class="row"> 
    <div class = "col-12 col-md-8 offset-md-2">

        <form method="post" action="/blog/new">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="post_title" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="me">Content</label>
                <textarea name="post_content" id="" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Create</button>
            </div>
        </form>

    </div>
</div>
<?= $this->endSection() ?>