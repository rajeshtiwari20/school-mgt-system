@extends('admin.layout.layout')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">{{ $breadcrumb }}</h3>
                  </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="parentForm" >
                            <div class="card-body">
                                <div class="row">
                                    <x-form.select name="name_prefix" value="" label="Prefix"/>
                                    <x-form.input type="text" name="first_name" value="" label="First Name"/>
                                    <x-form.input type="text" name="last_name" value="" label="Last Name"/>
                                    <x-form.input type="text" name="mobile" value="" label="Mobile"/>
                                    <x-form.input type="email" name="email" value="" label="Email"/>
                                    <x-form.select name="type" value="" label="Garden Type"/> 
                                    <x-form.input type="file" name="photo" value="" label="Uplaod Photo"/> 
                                    <x-form.input type="text" name="identity_no" value="" label="Identity No."/> 
                                    <x-form.select name="identity_type" value="" label="Identity Type"/>
                                    <x-form.input type="file" name="identity_doc" value="" label="Uplaod Identity doc"/>
                                    
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
               <!-- /.card -->
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  @endsection