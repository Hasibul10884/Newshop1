@extends('backend.master')
@section('backend_content')
<h1>Create New Product</h1>
<form action="{{route('product.store')}}" method="POST">
    @csrf
    
    <label for="">Product Name *</label>
    <input type="text" class="form-control" name="name" required>

    <label for="">Product Price *</label>
    <input type="number" class="form-control" name="price" required min="1">

    <label for="">Product Qty *</label>
    <input type="number" class="form-control" name="qty" required>
    <div>
        <label for="floatingSelect">Product Category *</label>
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="category">
            <option selected>select category Name</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
    </div>
    
    <label for="">Product Description (optional)</label>
    <input type="text" class="form-control" name="description">
    <br>
    
    <div class="file is-boxed">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
        </label>
      </div>
      <br>
      <label class="checkbox">
        <input type="checkbox">
        I agree to the <a href="#">terms and conditions</a>
      </label>
 <br>
 <button type="submit" class="btn btn-outline-success">Submit</button>


</form>

@endsection