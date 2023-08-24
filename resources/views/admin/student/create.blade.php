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
                    <h3 class="card-title">Add Student</h3>
                  </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm">
                            <div class="card-body">
                                <div class="row">
                                    <x-form.input type="text" name="admission_id" value="" label="Sr. No."/>
                                    <x-form.input type="text" name="name" value="" label="Name"/>
                                    <x-form.input type="email" name="email" value="" label="Email"/>
                                    <x-form.input type="text" name="parent_id" value="" label="Parent"/> 
                                    <x-form.input type="text" name="class" value="" label="Class"/> 
                                    <x-form.input type="text" name="section " value="" label="Section"/> 
                                    <x-form.input type="text" name="fee_concession " value="" label="Fee Concession"/> 
                                    <x-form.input type="date" name="dob " value="" label="Birthday"/> 
                                    <x-form.input type="text" name="mobile" value="" label="Mobile"/>
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