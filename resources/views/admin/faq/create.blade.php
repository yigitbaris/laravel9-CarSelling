@extends('layouts.adminbase')

@section('title', 'Add FAQ')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<!--content-->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <h1 class="h3 mb-3">
            <p>Add FAQ</p>
        </h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            
                            <div class="form-group">
                                <label for="exampleInputPassword4">Question</label>
                                <textarea class="form-control" id="question" name="question" placeholder="Question"> 
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                        .create(document.querySelector('#question'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                        </script>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword4">Answer</label>
                                <textarea class="form-control" id="answer" name="answer" placeholder="Answer"> 
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                        .create(document.querySelector('#answer'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                        </script>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">
                                    <h4 class="card-title">Status</h4>
                                </label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="input-group col-xs-12" style="max-width: 1000px;">
                                    <span class="input-group-append"> </span>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection