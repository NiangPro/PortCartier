<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
</head>
<body class="">
<div class="wrapper">
<!-- Right navbar links -->
  <!-- Navbar -->
 @include('includes._header')
  <!-- /.navbar -->

 @include('includes._sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            @yield('content')
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  </div>
 @include('includes._footer')

</div>
