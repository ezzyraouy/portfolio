<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr" required
        value="{{ old('title_fr', $project->title_fr ?? '') }}">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en" required
        value="{{ old('title_en', $project->title_en ?? '') }}">
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr" required >  {{ old('description_fr', $project->description_fr ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description En</label>
    <textarea name="description_en" class="form-control" id="description_en" required >  {{ old('description_en', $project->description_en ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="link" class="form-label">Link</label>
    <input type="text" name="link" class="form-control" id="link" 
        value="{{ old('link', $project->link ?? '') }}">
</div>
<div class="col-12">
    <label for="image" class="form-label">Image Principale</label>
    <input type="file" name="image" class="form-control" id="image" >
</div>
<div class="col-12">
    <label for="video" class="form-label">Video</label>
    <input type="file" name="video" class="form-control" id="video" >
</div>
<div class="col-12">
    <label for="images" class="form-label">Images</label>
    <input type="file" multiple name="images[]" class="form-control" id="images" >
</div>


