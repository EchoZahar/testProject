<div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">удаление категорий</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" action="{{ route('a.category.destroy', $category->id) }}" method="post" novalidate>
                @csrf @method('DELETE')
                <div class="modal-body">
                    <div class="mb-3">
                        <p>вы действительно хотите удалить категорию: <span class="text-primary">"{{ $category->name }}"</span></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">отменить</button>
                    <button type="submit" class="btn btn-outline-danger">удалить</button>
                </div>
            </form>
        </div>
    </div>
</div>
