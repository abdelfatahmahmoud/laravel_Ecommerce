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
                    <span></span> All Home Editsetting
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
                                        add new setting
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.home.setting')}}" class="btn btn-success float-end">All setting</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif

                                <form wire:submit.prevent="updatesetting">
                                    <div class="mb-3 mt-3">
                                        <label for="phone" class="form-lable">phone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="enter setting phone" wire:model="phone" >
                                        @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="fb_link" class="form-lable">fb_link</label>
                                        <input name="fb_link" type="text" class="form-control" placeholder="enter setting fb_link" wire:model="fb_link">
                                        @error('fb_link')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="tw_link" class="form-lable"> tw_link </label>
                                        <input name="tw_link" type="text" class="form-control" placeholder="enter setting tw_link" wire:model="tw_link">
                                        @error('tw_link')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="insta" class="form-lable">insta</label>
                                        <input name="insta" type="text" class="form-control" placeholder="enter setting insta" wire:model="insta">
                                        @error('insta')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="email" class="form-lable">email</label>
                                        <input name="link" type="email" class="form-control" placeholder="enter setting email" wire:model="email">
                                        @error('email')
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
