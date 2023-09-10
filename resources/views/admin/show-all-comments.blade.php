<x-admin-layout>
    <table class="table table-bordered table-hover p-4 bg-white rounded shadow-sm">
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>عنوان نوشته</th>
                <th>تاریخ ثبت</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @if ($comments->count() == null)
                <tr>
                    <td colspan="9">نظری برای نمایش وجود ندارد</td>
                </tr>
            @endif
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->name}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->post->title}}</td>
                <td>{{$comment->created_at}}</td>
                <td class="text-center"><div class="text-white badge bg-{{$comment->status == 0 ? 'danger' : 'success'}}">{{$comment->status == 0 ? 'تایید نشده' : 'تاییده شده'}}</div></td>
                <td><a  href="{{route('admin.single-comment',$comment->id)}}"><i class="fas fa-eye text-primary mr-5"></i></a>
                    <a  href="{{route('admin.change-status',$comment->id)}}"><i class="fas fa-check-square text-success mx-2 mr-5"></i></a>
                    <a  href="{{route('admin.delete-comment',$comment->id)}}"><i class="fas fa-window-close text-danger mr-5"></i></a>
                </td>
            </tr>
        @endforeach
        {{$comments->links()}}
        </tbody>
    </table>
</x-admin-layout>