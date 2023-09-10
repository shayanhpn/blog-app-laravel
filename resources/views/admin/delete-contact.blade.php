<x-admin-layout>
    <div class="container">
        <div class="d-flex flex-row justify-content-center p-4">
            <form class="bg-white" style="padding: 30px" action="{{route('admin.delete-contact-func',$contact->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <h2>آیا مایل به حذف  نظر {{$contact->id}} هستید؟</h2>
                <hr>
                <button type="submit" class="btn btn-sm btn-danger">حذف پست</button>
                <button class="btn btn-sm btn-warning">برگشت</button>
            </form>
        </div>
    </div>
</x-admin-layout>