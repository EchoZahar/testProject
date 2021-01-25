<div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить категория</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" action="{{ route('a.category.update', $category->id) }}" method="post" novalidate>
                @csrf @method('PATCH')
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="text-primary" for="editName{{$category->id}}">название категории</label>
                        <input type="text" class="form-control" id="editName{{$category->id}}" placeholder="введите наименование категории"
                               value="{{$category->name ?? old('name')}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editslug{{$category->id}}" class="text-primary">сгенерированое уникальное значение (url)</label>
                        <input type="text" name="slug" class="form-control" id="editslug{{$category->id}}" value="{{ $category->slug ?? old('slug') }}" required>
                    </div>
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="published" id="published{{$category->id}}" @if($category->published == 1) checked @endif>
                            <label class="custom-control-label" for="published{{$category->id}}">публикация</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-primary" for="createName">наименование категорий</label>
                        <select class="custom-select" name="parentId" required>
                            @include('admin.category.categoryList')
                        </select>
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
