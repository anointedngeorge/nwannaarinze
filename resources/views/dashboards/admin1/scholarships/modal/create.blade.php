<form action="{{ route('scholarships.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Scholarship Picture</label>
        <input type="text" name="image" placeholder="image url" class="form-control input-default" required>
    </div>
    <div class="mb-3">
        <label>Scholarship Title</label>
        <input type="text" name="title" class="form-control input-default" placeholder="Scholarship Title" required>
    </div>

    <div class="mb-3">
        <label>Google form url</label>
        <input type="text" name="google_form_link" class="form-control input-default" placeholder="Google form url" required>
    </div>

    <div class="mb-3">
        <label>Scholarship Description</label>
        <textarea rows="10" name="description" class="form-control"></textarea>
    </div>

     <div class="mb-3">
        <label>Scholarship Status</label>
        <select name="status" class="form-control input-default" required>
            <option value="">Select Status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn light btn-primary">Create Scholarship</button>
</form>