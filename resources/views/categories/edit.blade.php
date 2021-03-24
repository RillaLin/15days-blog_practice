@extends('layouts.app')

@section('page-title')
    <!--page title start-->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Edit Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/categories">Blog Admin Panel</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->

@endsection

@section('content')
<div class="page-content">    <!--再放入原本模板的class中讓畫面間隔更好看-->
    <div class="container">   <!--.container+enter跑出container架構，使畫面置中-->

    @include('categories._form',['category'=>$category])  <!--create跟edit的form做合併-->
    </div>
</div>

@endsection