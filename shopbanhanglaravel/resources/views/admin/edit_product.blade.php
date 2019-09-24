@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cap Nhat San Pham
                        </header>
<?php
    $message = Session::get('message');
    if($message){
        echo '<span style="text-alert">'.$message.'</span>';
        Session::put('message',null);
    }
    ?>
                        <div class="panel-body">
                                @foreach($edit_product as $key => $pro)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ten San Pham</label>
                                    <input type="text" name="product_name"class="form-control" id="exampleInputEmail1"value="{{$pro->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gia San Pham</label>
                                    <input type="text" value="{{$pro->product_price}}" name="product_price"class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hinh Anh San Pham</label>
                                    <input type="file" name="product_image"class="form-control" id="exampleInputEmail1" >
                                    <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo Ta San Pham</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="product_desc" id="exampleInputPassword1" >{{$pro->product_desc}}</textarea>  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Noi Dung San Pham</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="product_content" id="exampleInputPassword1" >{{$pro->product_content}}</textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Danh Muc San Pham</label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        @if($cate->category_id==$pro->category_id)
                                        <option  selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @else
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endif
                                         @endforeach
                               
                            </select>
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Thuong Hieu</label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                        @if($brand->brand_id==$pro->brand_id)
                                <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                  @else
                                  <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                  @endif
                                        @endforeach
                               
                            </select>
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Hien Thi</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">An</option>
                                <option value="1">Hien Thi</option>
                               
                            </select>
                                </div>
                              
                                <button type="submit" name="add_product"class="btn btn-info">Cap San Pham</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection