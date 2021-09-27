@extends('sections/masterfiles/master')

@section('style')
    <style>
        .total {
            margin: auto;
            width: 60%;
            text-align: center;
            border-radius: 5px;
            border: 2px solid black;
            overflow: hidden;
        }

        /* .total .term strong {
                    background-color: gainsboro;
                    padding: 10px;
                } */

        .brdr {
            background-color: #cccccc;
            width: 80%;
            height: 3px;
            margin: auto;
        }

        .details {}

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="total">
            <div class="term">
                <h4>Total: <strong>856.73</strong></h4>
            </div>
            <div class="brdr"></div>
            <div class="term">
                <h4>Total: <strong>856.73</strong></h4>
            </div>
            <div class="brdr"></div>
            <div class="term">
                <h4>Total: <strong>856.73</strong></h4>
            </div>
            <div class="brdr"></div>
            <div class="term">
                <h4>Total: <strong>856.73 </strong></h4>
            </div>
        </div>
        <div class="details">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>


                    {{-- <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
