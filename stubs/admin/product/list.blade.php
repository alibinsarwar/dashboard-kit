@extends('layouts.admin')

@section('content')
<div class="pcoded-content">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header table_head">
                    <h5>New Products</h5>
                    <a href="{{route('admin.product.add')}}" type="button" class="btn btn-icon btn-outline-secondary">
                        <i class="material-icons-two-tone">add</i></span>
                    </a>
                </div>
                <div class="pro-scroll" >
                    <div class="card-body p-0">
                        <div class="material-datatables">
                            <table class="table table-hover m-b-0 datatables" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$10</td>
                                        <td><a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jacket</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p3.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$35</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sofa</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p4.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$85</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$50</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$30</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$10</td>
                                        <td><a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jacket</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p3.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$35</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sofa</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p4.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$85</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$50</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$30</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$10</td>
                                        <td><a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jacket</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p3.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$35</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sofa</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p4.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$85</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$50</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$30</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$10</td>
                                        <td><a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jacket</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p3.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$35</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sofa</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p4.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$85</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p1.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$50</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="{{asset('admin_theme/images/widget/p2.jpg')}}" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$30</td>
                                        <td>
                                            <a href="{{route('admin.product.add')}}"><i class="icon feather icon-edit f-16 text-success"></i></a>
                                            <button class="btn" onclick="deleteAlert('{{ route('admin.product.list') }}')">
                                                <i class="feather icon-trash-2 ml-3 f-16 text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection