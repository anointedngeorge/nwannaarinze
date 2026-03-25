<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Picture</label>
        <input type="file" name="image" class="form-control input-default" required>
    </div>
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control input-default" placeholder="Title" required>
    </div>

    <div class="mb-3">
        <label>Sub title</label>
        <input type="text" name="sub_title" class="form-control input-default" placeholder="SubTitle" required>
    </div>

    <div class="mb-3">
        <label>Button title</label>
        <input type="text" name="btn_title" class="form-control input-default" placeholder="button title">
    </div>


    <div class="mb-3">
        <label>btn url</label>
        <input type="text" name="btn_url" class="form-control input-default" placeholder="btn url">
    </div>


    <div class="mb-3">
        <label>Can Show</label>
        <select name="can_show" class="form-control">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>

    <button type="submit" class="btn light btn-primary">Create</button>
</form>