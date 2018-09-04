<? $this->theme->header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Create Page</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <form>
                <div class="form-group">
                    <label for="formTitle">Title</label>
                    <input type="text" class="form-control" id="formTitle" placeholder="Title page...">
                </div>

                <div class="form-group">
                    <label for="formContent">Content</label>
                    <textarea class="form-control" id="formContent"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div>
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </div>
    </div>


</div>

<? $this->theme->footer(); ?>
