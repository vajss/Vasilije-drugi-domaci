
@extends('layout')

@section('content')
<div class="container">
<h4 align="center">Pregled putovanja</h4>
    <div>
        <table id="putovanja" class="table table-light table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Domacin</th>
                    <th>Hotel</th>
                    <th>Dogadjaj</th>
                    <th>datum</th>
                    <th>Cena </th>
                    <th>Akcije</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>

<script src="/js/putovanja.js"></script>
@endsection