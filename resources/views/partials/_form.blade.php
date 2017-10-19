<!--form used by create.blade and edit.blade-->
<div class="form-group">
    <label for="name1">Nimi:</label>
    <input type="text" id="name" class="form-control" name="name" value="{{$nameValue}}" placeholder="nimi" required min="3">
  </div>
  <div class="form-group">
    <label for="price1">Hind:</label>
    <input type="number" id="price" step="0.01" class="form-control" value="{{$priceValue}}" name="price" placeholder="hind" required>
  </div>
  <div class="form-group">
    <label for="desc1">Kirjeldus:</label>
    <textarea id="desciption" cols="30" rows="10" class="form-control" name="description" placeholder="sisesta kirjeldus" required>{{$descValue}}</textarea>
  </div>
  <!--div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="img">
    <p class="help-block">Example block-level help text here.</p>
  </div-->
  <div class="form-group">
    <button type="submit" class="btn btn-primary">{{$submitButtonText}}</button>
    <a class="btn btn-default ml-20" href="{{ URL::previous() }}" role="button" title="tagasi">Loobu</a>
   </div>