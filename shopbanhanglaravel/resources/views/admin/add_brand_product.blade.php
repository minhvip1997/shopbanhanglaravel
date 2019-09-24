@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them Thuong Hieu San Pham
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
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ten Thuong Hieu</label>
                                    <input type="text" name="brand_product_name"class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo Ta Thuong Hieu</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mo Ta Danh Muc"></textarea>  
                                </div>
                               
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Hien Thi</label>
                                    <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">An</option>
                                <option value="1">Hien Thi</option>
                               
                            </select>
                                </div>
                              
                                <button type="submit" name="add_brand_product"class="btn btn-info">Them Thuong Hieu</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection