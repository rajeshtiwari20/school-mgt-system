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
                                    <x-form.select :options="array()" name="parent" value="" label="Parent"/> 
                                    <x-form.input type="text" name="first_name" value="" label="First Name"/>
                                    <x-form.input type="last_name" name="last_name" value="" label="Last Name"/>
                                    <x-form.input type="date" name="dob " value="" label="DOB"/>
                                    <x-form.select :options="array('Male', 'Female', 'Others')" name="gender" value="" label="Gender" />
                                    <x-form.textarea name="address" placeholder="Please Enter Address" label="Address"/>
                                    <x-form.input type="file" name="photo" value="" label="Uplaod Photo"/> 
                                    <x-form.input type="text" name="bank_name" value="" label="Bank Name"/> 
                                    <x-form.input type="text" name="bank_account_no" value="" label="Bank Account No."/> 
                                    <x-form.input type="text" name="bank_ifsc_code" value="" label="IFSC Code"/> 
                                    <x-form.input type="text" name="identity_no" value="" label="Identity No."/> 
                                    <x-form.select :options="array('Aadhaar', 'Voter', 'Driving')" name="identity_type" value="" label="Identity Type"/>
                                    <x-form.input type="file" name="identity_doc" value="" label="Identity Doc"/> 
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