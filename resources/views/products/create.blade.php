<!doctype html>
<html lang="en">
<head>
    <title>Create Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-4">
       <h1> Create New Product</h1>
       <form method="POST" action="{{route('products.store')}}" >
           @csrf
           <div class ="mb-3">
               <label for ="name" class="form-label">Name</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror"
                      id="name" name="name" value ="{{old('name')}}">
               @error('name')
               <div class="Invalid-feedback">{{$message}}}]</div>
               @enderror
           </div>
           <div class ="mb-3">
               <label for ="description" class="form-label">Description</label>
               <textarea class="form-control @error('description') is-invalid @enderror"
                      id="description" name="description">{{old('description')}}
               </textarea>
               @error('description')
               <div class="Invalid-feedback">{{$message}}}]</div>
               @enderror
           </div>
           <div class ="mb-3">
               <label for ="price" class="form-label">Price</label>
               <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                      id="price" name="price" value ="{{old('price')}}">
               @error('price')
               <div class="Invalid-feedback">{{$message}}}]</div>
               @enderror
           </div>
           <div class ="mb-3">
               <label for ="quantity" class="form-label">Quantity</label>
               <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                      id="quantity" name  ="quantity" value ="{{old('quantity')}}">
               @error('quantity')
               <div class="Invalid-feedback">{{$message}}}]</div>
               @enderror
           </div>

           <button type="submit" class="btn btn-success"> Create product</button>
           <a href="{{route('products.index')}}" class="btn btn-secondary">Cancel</a>
       </form>
   </div>
</body>
</html>
