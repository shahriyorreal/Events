@extends('layouts.frontend')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h2>Create Events</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{url('insert-data')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Text</label>
                                        <input type="text" class="form-control" name="text" placeholder="Enter Text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Creator</label>
                                        <input type="text" class="form-control" name="creator" placeholder="Enter Creator">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <!-- <a href="dashboard" type="submit" class="btn btn-primary"> Submit</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>