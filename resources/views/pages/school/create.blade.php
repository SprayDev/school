@extends('layouts.default')

@section('content')
    <div class="container">
        <form id="school_create" action="/schools">
            @csrf()
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Название школы</label>
                    <input type="text" class="form-control" name="name" placeholder="Название">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Почтовый адрес</label>
                    <input type="email" class="form-control" name="email" placeholder="Почта">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">website</label>
                <input type="text" class="form-control" name="website" placeholder="Сайт школы">
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="logo" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let form = document.getElementById('school_create');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                let data = new FormData(form)
                $.ajax('/schools',{
                    data: data,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: (data) => {
                        // alert(data)
                        console.log(data)
                    },
                    error: (data) => {
                        console.log(data)
                    }
                })
                console.log($('#school_create'))
            })
        })
    </script>
@endpush()
