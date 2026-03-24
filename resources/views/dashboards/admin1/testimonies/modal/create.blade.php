<form action="{{ route('testimonies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- <div class="mb-3">
        <label>Picture</label>
        <input type="file" name="image" class="form-control input-default" >
    </div> --}}
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="name" class="form-control input-default" placeholder="Name" required>
    </div>

    <div class="mb-3">
        <label>Tag</label>
        <input type="text" name="tag" class="form-control input-default" placeholder="Tag" required>
    </div>

    <div class="mb-3">
        <label>Content</label>
        <textarea rows="10" name="content" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn light btn-primary">Create Post</button>
</form>