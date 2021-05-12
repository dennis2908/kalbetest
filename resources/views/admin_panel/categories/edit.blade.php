@extends('admin_panel.adminLayout') @section('content')
<script src="https://fb.me/react-15.2.1.js"></script>
    <script src="https://fb.me/react-dom-15.2.1.js"></script>
    <!-- Include the Babel library -->
    <script src="https://npmcdn.com/babel-core@5.8.38/browser.min.js"></script>
    <script src="{{asset('js/react/app_edit.js')}}" type="text/babel"></script>
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.categories')}}"> < Back to List</a>
                    <br><br>
                      <h4 class="card-title">Edit Category</h4>
                      <br>
                      <form class="forms-sample" method="post"  id="cat_form" enctype="multipart/form-data">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category Name</label>
                          <input type="text" class="form-control" id="Name" name="Name" value="{{$category->name}}">
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                               <input type="file" name="image" id="image" onChange={this.changeImageValue} class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Category Type</label>
                          <textarea type="textarea" class="form-control" id="Type" name="Type" >{{$category->type}}</textarea>
                        </div>
                        <div id="form_category"></div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    
    
    <!--JQUERY Validation-->
<!--/JQUERY Validation-->
@endsection