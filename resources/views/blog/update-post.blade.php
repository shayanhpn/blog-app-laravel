<x-admin-layout>
    <body>
        <form action="{{route('admin.update-post-func',$post->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" class="form-control my-3" placeholder="عنوان" name="post_title" value="{{$post->title}}">
            <x-ckeditor-up>
                <textarea id="editor" name="post_content">{{$post->content}}</textarea>
            </x-ckeditor-up>
            <div class="col-md-3">
                <input type="text" class="form-control my-3" name="post_category" value="{{$post->category}}" placeholder="دسته بندی">
            </div>
            <div class="my-3 col-md-3 p-4 bg-white rounded">
                <label for="formFile" class="badge bg-primary text-white form-label">بارگذاری تصویر</label>
                <input class="form-control"  type="file" id="formFile" name="post_image">
            </div>
            <div class="p-4 bg-white col-md-2 rounded">
                <label for="formFile" class="badge bg-primary text-white form-label">تصویر شاخص</label>
                <img src="{{url($post->indexImage)}}" width="100px" alt="post-title"/>
            </div>
            <div class="d-flex flex-row justify-content-center my-3">
                <button  type="submit" class=" btn btn-primary">ویرایش نوشته</button>
            </div>
        </form>
    </body>
</x-admin-layout>