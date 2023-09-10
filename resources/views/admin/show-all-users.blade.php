<x-admin-layout>
    <table class="table table-bordered table-hover bg-white p-4 shadow-sm rounded">
        <thead>
            <tr>
                <th>شماره</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>ایمیل</th>
                <th>تاریخ ایجاد شده</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as  $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td><a data-toggle="tooltip" data-placement="top" title="مشاهده"  href="{{route('admin.view-user',$user->id)}}"><i class="fas fa-eye text-primary mr-5"></i></a>
                    <a data-toggle="tooltip" data-placement="top" title="ویرایش"  href="{{route('admin.update-user',$user->id)}}"><i class="fas fa-pencil-alt text-success mx-2 mr-5"></i></a>
                    <a data-toggle="tooltip" data-placement="top" title="حذف"  href="{{route('admin.delete-user',$user->id)}}"><i class="fas fa-window-close text-danger mr-5"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</x-admin-layout>