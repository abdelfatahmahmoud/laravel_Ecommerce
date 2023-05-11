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
                    <span> All setting</span>
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
                                    <div class="col-md-6">All setting</div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.home.setting.add')}}" class="btn btn-success float-end">add new setting</a>
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
                                        <th>phone</th>
                                        <th>twitter</th>
                                        <th>facebool</th>
                                        <th>instagram</th>
                                        <th>email</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        //                                        $i=($sliders->currentPage()-1)*$sliders->perPage();
                                                                            $i=0;
                                    @endphp
                                    @foreach($settings as $setting)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$setting->phone}}</td>
                                            <td>{{$setting->tw_link}}</td>
                                            <td>{{$setting->fb_link}}</td>
                                            <td>{{$setting->insta}}</td>
                                            <td>{{$setting->email}}</td>
                                            <td>
                                                <a href="{{route('admin.home.setting.edit',['setting_id'=>$setting->id])}}" class=" btn-secondary">Edit</a>
                                                <a href="#" class=" btn-danger" onclick="deleteConfirmation({{$setting->id}})" style="margin-left:20px; ">Delete</a>

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
                        <button type="button" class="btn btn-danger" onclick="deletesetting()">Delete</button>
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
        @this.set('setting_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deletesetting(){
        @this.call('deletesetting');
            $('#deleteConfirmation').modal('hide');
        }

    </script>
@endpush
