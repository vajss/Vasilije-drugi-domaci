
@extends('layout')

@section('content')
<div class="container">
    <h4>Putovanja na {{$dogadjaj->tip}} dogadjaj {{$dogadjaj->naziv}}</h4>
    <div>
        <table id="putovanja" class="table table-light table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Domacin</th>
                    <th>Hotel</th>
                    <th>Kad</th>
                    <th>Cena </th>
                    <th>Pregled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($putovanja as $putovanje)
                    <tr>
                        <td>{{$putovanje->domacinLG}}</td>
                        <td>{{$putovanje->hotel}}</td>
                        <td>{{$putovanje->datum_pocetka}}</td>
                        <td>{{$putovanje->cena}}</td>
                        
                        <td>
                        <a href={{
                            "http://127.0.0.1:8000/putovanje/" .$putovanje->id
                        }} class="btn btn-info btn-block">Pregledaj</a>
                       
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection