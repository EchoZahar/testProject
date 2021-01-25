@foreach ($categories as $category_list)
    @dump($category_list)
    <option value="{{$category_list->id ?? ""}}"
    @isset($category->id)
        @if ($category->parentId == $category_list->id) selected @endif
        @if ($category->id == $category_list->id) hidden @endif
    @endisset >
        {!! $delimiter ?? "" !!}{{$category_list->name ?? ""}}
    </option>

    @if(count($category_list->children) > 0)
        @include('admin.category.categoryList', [
          'categories' => $category_list->children,
          'delimiter'  => ' - ' . $delimiter
        ])
    @endif
@endforeach
