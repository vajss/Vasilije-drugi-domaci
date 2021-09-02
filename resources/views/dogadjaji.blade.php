
@extends('layout')

@section('content')
<div class="container">
<h4 align="center">Pregled dogadjaja</h4>
    <div>
        <table id="dogadjaji" class="table table-light table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Naziv</th>
                    <th>Tip</th>
                    <th>Broj Mesta</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<script src="/js/dogadjaji.js"></script>
@endsection