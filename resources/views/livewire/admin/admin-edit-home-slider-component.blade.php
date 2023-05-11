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
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Edit Home Slider
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
                                        add new slider
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.home.slider')}}" class="btn btn-success float-end">All sliders</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif

                                <form wire:submit.prevent="updatehomeslider">
                                    <div class="mb-3 mt-3">
                                        <label for="top_title" class="form-lable">top Title</label>
                                        <input name="top_title" type="text" class="form-control" placeholder="enter category name" wire:model="top_title" >
                                        @error('top_title')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-lable">title</label>
                                        <input name="title" type="text" class="form-control" placeholder="enter category slug" wire:model="title">
                                        @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sub_title" class="form-lable">sub title </label>
                                        <input name="sub_title" type="text" class="form-control" placeholder="enter category name" wire:model="sub_title">
                                        @error('sub_title')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="offer" class="form-lable">title</label>
                                        <input name="offer" type="text" class="form-control" placeholder="enter category slug" wire:model="offer">
                                        @error('offer')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="link" class="form-lable">regular Price</label>
                                        <input name="link" type="text" class="form-control" placeholder="enter category slug" wire:model="link">
                                        @error('link')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <label for="status" class="form-lable" > Status</label>
                                        <select class="form-control" name="status" wire:model="status">
                                            <option value="0">inActive</option>
                                            <option value="1">Active</option>
                                        </select>
                                        @error('status')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-lable">quantity</label>
                                        <input name="image" type="file" class="form-control"  wire:model="newimage">
                                        @if( $newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                        @else
                                            <img src="{{'assets/imgs/products'}}/{{$image}}" width="120" />
                                        @endif
                                        @error('newimage')
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
