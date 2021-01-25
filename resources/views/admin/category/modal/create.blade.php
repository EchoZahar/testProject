<div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить категорию</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" action="{{ route('a.category.store') }}" method="post" novalidate>
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="text-primary" for="createName">название категории</label>
                    <input type="text" class="form-control" id="createName" name="name" placeholder="введите наименование категории" value="{{old('name')}}"  required>
                    <input type="hidden" name="slug">
                </div>
                <div class="mb-3">
                    <label class="text-primary" for="createName">наименование категорий</label>
                    <select class="custom-select" name="parentId" required>
                        <option value="">выбрать...</option>
                        <option value="0">главная категория</option>
                        @include('admin.category.categoryList')
                    </select>
                </div>
                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="published" class="custom-control-input" id="published" value="1">
                        <label class="custom-control-label" for="published">публикация</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">отменить</button>
                <button type="submit" class="btn btn-outline-success">сохранить</button>
            </div>
            </form>
        </div>
    </div>
</div>
