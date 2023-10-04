<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>

    @if(isset(auth()->user()->urlbukti))
        <h2>Uploaded Image:</h2>
        <img src="{{ asset('storage/images/' . auth()->user()->urlbukti) }}" width="100" alt="Uploaded Image">
    @endif
</body>
</html>