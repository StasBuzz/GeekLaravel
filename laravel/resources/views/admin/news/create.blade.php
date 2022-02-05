@extends('layouts/admin')

@section('title') Добавить запись @endsection

@section('header')
    <h1 class="h2">Добавить запись</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>
          
        </div>
@endsection

@section('content')
    <div>
        <form method="post" action=" {{ route('admin.news.store') }} ">
            @csrf
            <div  class="form-group">
                <label for="title">Наименование</label>
                <input type="text" class="form-control" name="title" id="title" >
            </div>
            <div  class="form-group">
                <label for="author">Автор</label>
                <input type="text" class="form-control" name="author" id="author" >
            </div>
            <div  class="form-group">
                <label for="status">Статус</label>
                <select class="form-control"name="status" id="status">
                    <option>DRAFT</option>
                    <option>ACTIVE</option>
                    <option>BLOCKED</option>
                </select>
            </div>
            <div  class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
      <br>
      <button type="submit" class="btn btn-success" style="float: right;">Сохранить</button>
    </form>
    </div>      
@endsection 