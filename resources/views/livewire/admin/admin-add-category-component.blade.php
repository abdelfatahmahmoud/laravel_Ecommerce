<div>
    <style>
        .nav svg{
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
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> All Categories
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
                                       add new Categories
                                   </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.categories')}}" class="btn btn-success float-end">All cetegories</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif

                              <form wire:submit.prevent="categoryStore">
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
                                      <label for="is_popular" class="form-lable" >popular </label>
                                      <select class="form-control" name="is_popular" wire:model="is_popular">
                                          <option value="0">no</option>
                                          <option value="1">yas</option>
                                      </select>
                                      @error('is_popular')
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
