<form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Picture</label>
        <input type="file" name="image" class="form-control input-default" required>
    </div>
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control input-default" placeholder="Name" required>
    </div>

    <div class="mb-3">
        <label>Designation</label>
        <input type="text" name="designation" class="form-control input-default" placeholder="Designation" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea rows="10" name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Show on frontend</label>
        <select name="can_show" class="form-control-sm">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
      
    </div>

    <button type="submit" class="btn light btn-primary">Create</button>
</form>