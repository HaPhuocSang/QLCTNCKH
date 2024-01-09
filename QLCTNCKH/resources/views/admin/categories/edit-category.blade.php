@extends('admin.categories.layout.master')
@section('css')
   <link rel="stylesheet" href="{{asset('ad/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('ad/css/typography.css')}}">
   <link rel="stylesheet" href="{{asset('ad/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('ad/css/responsive.css')}}">
@endsection
@section('content1')
      <div class="custom-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Sửa danh mục</h4>
                           </div>
                        </div>
                        @if ($errors->any())
                           <div class="alert alert-danger">
                              <ul>
                                 @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div>
                        @endif
                        @isset($typeproject)
                              <div class="iq-card-body">
                              <form action="{{route('admin.postCategoryEdit',$typeproject[0]->id)}}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 @method('put') 
                                 <div class="form-group">
                                       <label>Tên danh mục:</label>
                                       <input type="text" name="name" value="{{isset($typeproject[0]->name)?$typeproject[0]->name:''}}" class="form-control">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Gửi</button>
                                 <a href="{{ route('admin.getCategoryList') }}" class="btn btn-danger"><font color="white">Trở lại</font></a>
                              </form>
                              </div>
                        @endisset
                     </div>
                  </div>
               </div>
            </div>
      </div>
@endsection
@section('js')
    <script src="{{asset('ad/js/preview-img.js')}}"></script>
    <script src="{{asset('ad/js/jquery.min.js')}}"></script>
    <script src="{{asset('ad/js/popper.min.js')}}"></script>
    <script src="{{asset('ad/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.appear.js')}}"></script>
    <script src="{{asset('ad/js/countdown.min.js')}}"></script>
    <script src="{{asset('ad/js/waypoints.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('ad/js/wow.min.js')}}"></script>
    <script src="{{asset('ad/js/apexcharts.js')}}"></script>
    <script src="{{asset('ad/js/slick.min.js')}}"></script>
    <script src="{{asset('ad/js/select2.min.js')}}"></script>
    <script src="{{asset('ad/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ad/js/smooth-scrollbar.js')}}"></script>
    <script src="{{asset('ad/js/lottie.js')}}"></script>
    <script src="{{asset('ad/js/core.js')}}"></script>
    <script src="{{asset('ad/js/charts.js')}}"></script>
    <script src="{{asset('ad/js/animated.js')}}"></script>
    <script src="{{asset('ad/js/kelly.js')}}"></script>
    <script src="{{asset('ad/js/maps.js')}}"></script>
    <script src="{{asset('ad/js/worldLow.js')}}"></script>
    <script src="{{asset('ad/js/raphael-min.js')}}"></script>
    <script src="{{asset('ad/js/morris.js')}}"></script>
    <script src="{{asset('ad/js/morris.min.js')}}"></script>
    <script src="{{asset('ad/js/flatpickr.js')}}"></script>
    <script src="{{asset('ad/js/style-customizer.js')}}"></script>
    <script src="{{asset('ad/js/chart-custom.js')}}"></script>
    <script src="{{asset('ad/js/custom.js')}}"></script>
@endsection