@extends('layouts.app')

@include('layouts.navbar')

@include('layouts.sidebar')

@section('container')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Companies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Companies</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                </button>
                <h4><i class="icon fas fa-check"></i> {{ Session::get('success') }}</h4>
            </div>
        @endif

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Companies</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20% ">
                            Name
                        </th>
                        <th style="width: 20%"></th>
                        <th style="width: 5%">
                            <a href="/companies/create" type="button" class="btn btn-block btn-success">Create new</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        {{ $company->name }}
                                    </a>
                                    <br/>
                                    <small>
                                        Created {{ date('d.m.Y', strtotime($company->created_at)) }}
                                    </small>
                                </td>
                                <td></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="/companies/{{ $company->id }}/edit">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="deleteItem(this, '/companies/')" data-id="{{ $company->id }}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{ $companies->links() }}
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

@stop

@include('layouts.footer')
