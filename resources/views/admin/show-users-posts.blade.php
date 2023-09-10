<x-admin-layout>
    <table class="table table-bordered table-hover p-4 bg-white rounded shadow-sm">
        <thead>
            <tr>
                <th>آیدی</th>
                <th>تصویر شاخص</th>
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th>تاریخ ایجاد پست</th>
                <th >عملیات</th>
            </tr>
        </thead>
        <tbody>
            @if($posts->count() == 0)
            <tr>
                <td colspan="9">رکوردی برای نمایش وجود ندارد</td>
            </tr>
            @endif
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td class="text-center"><img width="50px" src="{{asset($post->indexImage)}}" alt=""></td>
                <td>{{$post->title}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->created_at}}</td>
                <td class="text-center"><a  href="{{route('view-post-pub',$post->slug)}}"><i class="fas fa-eye text-primary mr-5"></i></a>
                    <a  href="{{route('admin.update-post',$post->slug)}}"><i class="fas fa-pencil-alt text-success mx-2 mr-5"></i></a>
                    <a  href="{{route('admin.delete-post',$post->slug)}}"><i class="fas fa-window-close text-danger mr-5"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
</x-admin-layout>
