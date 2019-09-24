@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them Danh Muc San Pham
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
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ten Danh Muc</label>
                                    <input type="text" name="category_product_name"class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo Ta Danh Muc</label>
                                    <textarea style="resize:none" rows="5"class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mo Ta Danh Muc"></textarea>  
                                </div>
                               
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Hien Thi</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0">An</option>
                                <option value="1">Hien Thi</option>
                               
                            </select>
                                </div>
                              
                                <button type="submit" name="add_category_product"class="btn btn-info">Them Danh Muc</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection