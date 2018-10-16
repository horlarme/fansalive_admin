@extends('layouts.app')

@section('title') Countries @stop
@section('content')
    <div class="padding">
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <span class="label label-lg primary pos-rlt m-r-xs pull-right"
                              data-target="#m-md" data-toggle="modal">Create</span>
                        <h2><strong>Countries</strong></h2>
                    </div>
                    <div class="row p-a">
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <div class="table-responsive">
                        <table class="table-strip table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Continent</th>
                                <th>Flag</th>
                                <th>Currency</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-toggle="modal" data-target="#m-md">
                                <td>1</td>
                                <td>Nigeria</td>
                                <td>NG</td>
                                <td>
                                    <a href="{{route('continent','africa')}}">Africa</a>
                                </td>
                                <td>
                                    <img src="" alt="Nigeria - NG"/>
                                </td>
                                <td>
                                    <a href="">Nigerian Naira - #</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <footer class="dker p-a">
                        <div class="row">
                            <div class="col-sm-4 col-sm-pull-4 text-center">
                                <ul class="pagination pagination-sm m-0">
                                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href="">5</a></li>
                                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <div id="m-md" class="modal" data-backdrop="true" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="box">
                <div class="box-header">
                    <h2>Country Form</h2>
                    <small>Create and or edit country information.</small>
                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Country Name</label>
                            <div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" min="5" class="form-control" required
                                               id="name" name="name"
                                               placeholder="Enter Country Name">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" min="1" max="2" class="form-control" required
                                               id="short_name" name="short_name"
                                               placeholder="AF, GH, US">
                                    </div>
                                </div>
                                <p class="help-block">Enter fully qualified country name and its short name (only 2 characters).</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="continent">Continent</label>
                            <select class="form-control"
                                    id="continent" name="continent">
                                <option value="Africa">Africa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="currency">Currency</label>
                            <div class="input-group">
                                <select class="form-control"
                                        id="currency" name="currency">
                                    <option value="Nigerian Naira">Nigeria Naira - NGN</option>
                                </select>
                                    <button class="input-group-btn btn-info"
                                            id="refreshCurrencyButton">
                                        <i class="material-icons md-24">&#xe5d5;</i>
                                    </button>
                                    <button class="input-group-btn btn-primary"
                                            id="addNewCurrencyButton">
                                        <i class="material-icons md-24">&#xe145;</i>
                                    </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="flag">Flag</label>
                            <div class="col-md-6">
                                <img src="" alt="" style="width: 100%" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-6">
                                <input type="file" id="flag" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn m-b btn-lg btn-block md-btn md-raised m-b-sm w-xs indigo" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection