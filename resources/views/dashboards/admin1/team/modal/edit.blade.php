



<form action="{{ route('team.update', ['team' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="row mt-3 mb-3">
        <img src="/storage/{{ $result->image }}" alt="{{ $result->name }}" width="100" height="300">
    </div>

    <div class="mb-3">
        <label>Picture</label>
        <input type="file" name="image" class="form-control input-default">
    </div>
    <div class="mb-3">
        <label>Name</label>
        <input value="{{ $result->name }}" type="text" name="name" class="form-control input-default" placeholder="Name" required>
    </div>

    <div class="mb-3">
        <label>Designation</label>
        <input value="{{ $result->designation }}" type="text" name="designation" class="form-control input-default" placeholder="designation" required>
    </div>

     <div class="mb-3">
        <label>Show on frontend </label>
        <select name="can_show" class="form-control-sm">
            <option selected value="{{ $result->can_show }}"> {{ $result->can_show == 1 ? "Yes" : "No" }} </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
      
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea  name="description" class="form-control" rows="10">
            {{ $result->description }}
        </textarea>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>