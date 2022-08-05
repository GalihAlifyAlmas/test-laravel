@extends('layouts.app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           @include('features.navbar-section')
            <!-- /.navbar-top-links -->

            @include('features.navbar-side')
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Data </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   <form id="signupForm1" method="post" class="form-horizontal" action="{{ url('/produk/proses/edit/' .  $products->id  ) }}" enctype="multipart/form-data">
                   @csrf
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="firstname1">Judul</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Anda" value="{{ $products->judul }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="firstname1">Diskon</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Masukan diskon" value="{{ $products->diskon }}" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="firstname1">Deskripsi</label>
                            <div class="col-sm-5">
                             <textarea name="deskripsi" class="form-control"> {{ $products->deskripsi }} </textarea>
                            </div>
                        </div>

                       

                        <div class="form-group">
                        <label class="col-sm-4 control-label" for="firstname1"> Harga</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="harga" name="price" placeholder="Masukan Harga" value="{{ $products->price }}" />
                            </div>
                        </div>

                        <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname1">Upload Gambar</label>
                           
                            <div class="col-sm-5">
                            <img src="{{ asset('img/'. $products->gambar ) }}" class="img-responsive" style="width: 250px; height: 100px;">
                                <br>
                                <input type="hidden" class="form-control"  name="gambar_old" value="{{ $products->gambar }}">
                                <input type="file"  class="form-control"  name="gambar" class="form-control-file" id="exampleFormControlFile1">
                                <span>Klik untuk ganti gambar</span><br>
                                <span>Kosong kan jika tidak ingin di ganti </span><br>
                            </div>
                        </div>

                            
                        
                     

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.panel -->
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

</div>

@endsection