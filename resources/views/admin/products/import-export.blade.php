@extends('layouts.admin')


@section('content')

    <div class="card">
        <div class="card-header">
            Import
            <a class="btn btn-secondary float-right" href="{{ route('admin.products.index') }}">
                {{ trans('global.back') }}
            </a>
        </div>

        <div class="card-body">
        <form action="{{ route('admin.products.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-3">
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
</div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="{{ route('admin.products.sample') }}">Export data</a>
        </form>
        </div>
    </div>
@endsection
