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
                    <span> All sliders</span>
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
                                    <div class="col-md-6">All sliders</div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.home.slider.add')}}" class="btn btn-success float-end">add new slider</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>top Title</th>
                                        <th>title</th>
                                        <th>sub Title</th>
                                        <th>offer</th>
                                        <th>link</th>
                                        <th>status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
//                                        $i=($sliders->currentPage()-1)*$sliders->perPage();
                                    $i=0;
                                    @endphp
                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img src="{{asset('assets/imgs/slider')}}/{{$slider->image}}" alt="{{$slider->name}}" width="80"></td>
                                            <td>{{$slider->top_title}}</td>
                                            <td>{{$slider->title}}</td>
                                            <td>{{$slider->sub_title}}</td>
                                            <td>{{$slider->offer}}</td>
                                            <td>{{$slider->link}}</td>
                                            <td>{{$slider->status == 1 ? 'active' : 'inActive'}}</td>

                                            <td>
                                                <a href="{{route('admin.home.slider.edit',['slider_id'=>$slider->id])}}" class=" btn-secondary">Edit</a>
                                                <a href="#" class=" btn-danger" onclick="deleteConfirmation({{$slider->id}})" style="margin-left:20px; ">Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Are you sure want to delete record?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteslide()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
        @this.set('slider_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteslide(){
        @this.call('deleteslide');
            $('#deleteConfirmation').modal('hide');
        }

    </script>
@endpush
