@extends('layouts.admin')

@section('content')
<h1>Categories</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="post">
                @csrf
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" >

                <button type="submit" class="btn btn.primary">Add</button>
                <input name="" id="" class="btn btn-primary" type="button" value="Button">
            </form>
        </div>
        <div class="col">
            <table>
                <thead>
                    <td>

                    </td>
                </thead>
            </table>
        </div>
    </div>


</div>
@endsection
