



<form action="{{ route('projects.update', ['project' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="row mt-3 mb-3">
        <img src="/storage/{{ $result->image }}" alt="{{ $result->title }}" width="100" height="300">
    </div>

    <div class="mb-3">
        <label>Picture</label>
        <input type="file" name="image" class="form-control input-default">
    </div>
    <div class="mb-3">
        <label>Title</label>
        <input value="{{ $result->title }}" type="text" name="title" class="form-control input-default" placeholder="Title" required>
    </div>

    <div class="mb-3">
        <label>Tag</label>
        <input value="{{ $result->tag }}" type="text" name="tag" class="form-control input-default" placeholder="Title" required>
    </div>

    <div class="mb-3">
        <label>Content</label>
        <textarea  name="content" class="form-control" rows="10">
            {{ $result->content }}
        </textarea>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>