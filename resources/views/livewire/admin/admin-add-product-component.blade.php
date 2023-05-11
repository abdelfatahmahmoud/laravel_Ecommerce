<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All products
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        add new product
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.product')}}" class="btn btn-success float-end">All products</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif

                                <form wire:submit.prevent="addProduct">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-lable">Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="enter category name" wire:model="name" wire:keyup="generateSlug">
                                        @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-lable">Slug</label>
                                        <input name="slug" type="text" class="form-control" placeholder="enter category slug" wire:model="slug">
                                        @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="short_description" class="form-lable">short Description</label>
                                        <textarea class="form-control" name="short_description" placeholder="enter short description" wire:model="short_description"></textarea>
                                        @error('short_description')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-lable"> Description</label>
                                        <textarea class="form-control" name="description" placeholder="enter  description "  wire:model="description"></textarea>
                                        @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-lable">regular Price</label>
                                        <input name="regular_price" type="text" class="form-control" placeholder="enter category slug" wire:model="regular_price">
                                        @error('regular_price')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>



                                    <div class="mb-3 mt-3">
                                        <label for="sale_price" class="form-lable">sale Price</label>
                                        <input name="sale_price" type="text" class="form-control" placeholder="enter sale price" wire:model="sale_price">
                                        @error('sale_price')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sku" class="form-lable">SKU</label>
                                        <input name="sku" type="text" class="form-control" placeholder="enter sku " wire:model="sku">
                                        @error('sku')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="stock_status" class="form-lable" >stock Status</label>
                                        <select class="form-control" name="stock_status" wire:model="stock_status">
                                        <option value="instock">InStock</option>
                                            <option value="outofstock">out Of Stock</option>
                                        </select>
                                        @error('stock_status')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-lable" >featured </label>
                                        <select class="form-control" name="featured" wire:model="featured">
                                            <option value="0">no</option>
                                            <option value="1">yas</option>
                                        </select>
                                        @error('stock_status')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="quantity" class="form-lable">quantity</label>
                                        <input name="quantity" type="text" class="form-control" placeholder="enter quantity " wire:model="quantity">
                                        @error('quantity')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-lable">quantity</label>
                                        <input name="image" type="file" class="form-control"  wire:model="image">
                                        @if( $image)
                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                        @endif
                                        @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-lable">category </label>
                                        <select class="form-control" name="category_id" wire:model="category_id">
                                            <option value="">select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}} </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
