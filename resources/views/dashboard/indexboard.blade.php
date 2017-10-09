@extends('layouts.dashboard')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >

<h1 class="page-header">Create Form</h1>

<form enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">hContent</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">pContent</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword2">p2Content</label>
        <input type="text" class="form-control" id="exampleInputPassword2   ">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">img1</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">First photo for slider</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile1">img2</label>
        <input type="file" id="exampleInputFile1">
        <p class="help-block">Second photo for slider</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile2">img2</label>
        <input type="file" id="exampleInputFile2">
        <p class="help-block">Third photo for slider</p>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>