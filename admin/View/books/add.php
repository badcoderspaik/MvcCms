<? $this->theme->header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h5>Добавить книгу</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <form enctype="multipart/form-data" name="add_content_form" method="post" action="" id="add_content_form">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Название книги...">
                </div>

                <div class="form-group">
                    <label for="author">Автор</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Автор...">
                </div>

                <div class="form-group">
                    <label for="year">Год издания</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Год издания...">
                </div>

                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>

                <div class="form-group">
                    <label for="shortDescription">Краткое описание</label>
                    <textarea class="form-control" id="shortDescription" name="shortDescription"></textarea>
                </div>

                <div class="form-group">
                    <label for="cover">Обложка</label>
                    <input type="file" name="cover" id="cover">
                </div>

                <div class="form-group">
                    <label for="bookFile">Файл книги</label>
                    <input type="file" name="bookFile" id="bookFile">
                </div>

                <div class="form-group">
                    <label for="categories">Категория</label>
                    <select name="categories" id="categories" class="custom-select">

                        <? foreach ($items as $item): ?>

                            <option value = <?=$item['category_id']; ?> > <?=$item['name']?> </option>

                        <? endforeach; ?>

                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div>
                <button type="submit" class="btn btn-primary">Добавить книгу</button>
            </div>
        </div>
    </div>


</div>

<? $this->theme->footer(); ?>
