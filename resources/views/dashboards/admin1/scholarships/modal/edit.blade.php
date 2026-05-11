
@php
    function status($str) {
        return $str ? "Active" : "Not Active";
    }
@endphp


<form action="{{ route('scholarships.update', ['scholarship' => $result->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="row mt-3 mb-3">
        <img src="{{ $result->image }}" alt="{{ $result->title }}" width="100" height="300">
    </div>

    <div class="mb-3">
        <label>Scholarship Picture</label>
        <input type="text" value="{{ $result->image }}" name="image" class="form-control input-default">
    </div>
    <div class="mb-3">
        <label>Scholarship Title</label>
        <input value="{{ $result->title }}" type="text" name="title" class="form-control input-default" placeholder="Scholarship Title" required>
    </div>

    <div class="mb-3">
        <label>Google form url </label>
        <input value="{{ $result->google_form_link }}" type="text" name="google_form_link" class="form-control input-default" placeholder="Google form url" required>
    </div>

    <div class="mb-3">
        <label>Scholarship Description</label>
        <textarea  name="description" class="form-control" rows="10">
            {{ $result->description }}
        </textarea>
    </div>

    <div class="mb-3">
        <label>Scholarship Status</label>
        <select name="status" class="form-control input-default" required>
            <option value="">Select Status</option>
            <option value="1" {{ $result->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$result->status ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn light btn-primary">Submit</button>
</form>