<x-admin-layout>
    <table class="table table-bordered table-hover p-4 bg-white rounded shadow-sm">
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>عنوان نوشته</th>
                <th>تاریخ ثبت</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @if ($contacts->count() == null)
                <tr>
                    <td colspan="9">تماسی برای نمایش وجود ندارد</td>
                </tr>
            @endif
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->fullname}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->title}}</td>
                <td>{{$contact->created_at}}</td>
                <td><a  href="{{route('admin.view-contact',$contact->id)}}"><i class="fas fa-eye text-primary mx-2 mr-5"></i></a>
                    <a  href="{{route('admin.delete-contact',$contact->id)}}"><i class="fas fa-window-close text-danger mr-5"></i></a>
                </td>
            </tr>
        @endforeach
        {{$contacts->links()}}
        </tbody>
    </table>
</x-admin-layout>