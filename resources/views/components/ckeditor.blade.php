<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="{{asset('assets/vendor/ckeditor/build/ckeditor.js')}}"></script>
    <title>CKE5 in Laravel</title>
</head>
<body>

<textarea id="editor" name="post_content"></textarea>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
