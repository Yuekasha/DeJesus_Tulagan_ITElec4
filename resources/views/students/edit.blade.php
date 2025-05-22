@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Students') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-6 m-auto">
                  <div class="card card-secondary">
                   <div class="card-header">
                     <h3 class="card-title">Edit Student Information</h3>
                   </div>

                     <form  action="{{ route('students.edit',$students->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                       <div class="row card-body col-12">
                         <div class="form-group col-12">
                            <label
                               for="exampleInputEmail1">First Name
                            </label>
                               <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require value="{{ $students->fname}}">
                         </div>
                          @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                  
                        <div class="form-group col-12">
                          <label for="exampleInputPassword1">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name"
                          value="{{ $students->lname}}">
                        </div>
                          @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                           <label for="exampleInputFile">Middle Name</label>
                   
                          <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your Middle Name"
                          value="{{ $students->mname}}">
                        </div>
                          @error('mname') <span class="text-danger">{{$message}}</span> @enderror


                        <div class="form-group col-12">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" id="add" name="add" placeholder="Enter Address" value="{{ $students->add}}">
                        </div>
                          @error('add') <span class="text-danger">{{$message}}</span> @enderror



                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Zip</label>
                          <input type="number" class="form-control" id="zip" name="zip" placeholder="" value="{{ $students->zip}}">
                        </div>
                        @error('zip') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Age</label>
                          <input type="number" class="form-control" id="age" name="age" placeholder="" value="{{ $students->age}}">
                        </div>
                        @error('age') <span class="text-danger">{{$message}}</span> @enderror
              
                        </div>
                        <div class="card-footer ">
                        <button type="submit" class="btn btn-success col-12">Update</a>
                        </div>
                    </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection