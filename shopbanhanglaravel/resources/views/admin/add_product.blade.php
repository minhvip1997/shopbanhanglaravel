@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them  San Pham
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
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ten San Pham</label>
                                    <input type="text" name="product_name"class="form-control" id="exampleInputEmail1" placeholder="Ten San Pham">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gia San Pham</label>
                                    <input type="text" name="product_price"class="form-control" id="exampleInputEmail1" placeholder="Gia San Pham">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hinh Anh San Pham</label>
                                    <input type="file" name="product_image"class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo Ta San Pham</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mo Ta San Pham"></textarea>  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Noi Dung San Pham</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Noi Dung San Pham"></textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Danh Muc San Pham</label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                         @endforeach
                               
                            </select>
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Thuong Hieu</label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
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
                              
                                <button type="submit" name="add_product"class="btn btn-info">Them San Pham</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection