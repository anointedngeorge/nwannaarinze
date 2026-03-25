



<form action="{{ route('slider.update', ['slider' => $result->id]) }}" method="POST" enctype="multipart/form-data">
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
        <label>sub title</label>
        <input value="{{ $result->sub_title }}" type="text" name="sub_title" class="form-control input-default" placeholder="sub title" required>
    </div>


    <div class="mb-3">
        <label>btn url</label>
        <input type="text" value="{{ $result->btn_url }}" name="btn_url" class="form-control input-default" placeholder="Button url">
    </div>


    <div class="mb-3">
        <label>btn title</label>
        <input type="text" value="{{ $result->btn_title }}" name="btn_title" class="form-control input-default" placeholder="Button Title" >
    </div>

    <div class="mb-3">
        <label>Can Show</label>
        <select name="can_show" class="form-control">
            <option selected value="{{ $result->can_show }}">{{ $result->can_show == 1 ? "Yes" : "No" }}</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>


    <button type="submit" class="btn light btn-primary">Submit</button>
</form>