@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cap Nhat Thuong Hieu San Pham
                        </header>

                        <div class="panel-body">
                                <?php
    $message = Session::get('message');
    if($message){
        echo '<span style="text-alert">'.$message.'</span>';
        Session::put('message',null);
    }
    ?>
                            <div class="position-center">
                                @foreach($edit_brand_product as $key => $edit_value)
                                <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ten Danh Muc</label>
                                    <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name"class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo Ta Danh Muc</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="brand_product_desc" id="exampleInputPassword1" >{{$edit_value->brand_name}}</textarea>  
                                </div>
                               
                              
                                <button type="submit" name="update_brand_product"class="btn btn-info">Cap Nhat Danh Muc</button>
                            </form>
                            </div>
    @endforeach
                        </div>
                    </section>

            </div>
@endsection