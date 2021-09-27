@extends('sections/masterfiles/master')

@section('style')
    <style>
        .mainclass {
            width: 90%;
            margin: auto;
        }

        .orderSection {
            width: 70%;
            float: right;
            text-align: center;
            border-radius: 10px;
            margin: 1vh;
            height: 500px;
            overflow: auto;

        }

        .example2 {
            border: 1px solid black;
            padding: 10px;
            box-shadow: 5px 7px #888888;
        }


        .brdr {
            background-color: #cccccc;
            width: 3px;
            height: 530px;
            margin: auto;
            float: right;
        }

        .editSection {
            width: 25%;
            float: right;
            text-align: center;
            border-radius: 10px;
            margin: 1vh 2vh;
            height: 500px;
            overflow: auto;
            box-shadow: 5px 7px #888888;


        }

        /* .product {
                                                                                                                                                                        width: 20%;
                                                                                                                                                                        float: right;
                                                                                                                                                                        text-align: center;
                                                                                                                                                                        border: solid 3px rgb(54, 198, 247);
                                                                                                                                                                        border-radius: 10px;
                                                                                                                                                                        margin: 1vh;
                                                                                                                                                                    } */

        .product h4 {
            margin: 20px 0;
            white-space: inherit;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 75px;
        }

        .product textarea {
            /* margin: 20px 0;
                                                                white-space: inherit;
                                                                overflow: hidden; */
            /* text-overflow: ellipsis; */
            /* height: 75px; */
            border: 0;
            padding: 10px;
            font-size: 15px;
            font-weight: bold;
            max-height: 12vh;
            min-height: 12vh;
            /* font-family: "Ubuntu Light", "Ubuntu", "Ubuntu Mono", "Segoe Print", "Segoe UI"; */
            /* color: #ccc; */
            border: solid 1px #ccc;
            margin: 0 0 20px;
            /* width: 300px; */
            /* -moz-box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.2);
                                                    -webkit-box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.2);
                                                    box-shadow: inner 0 0 4px rgba(0, 0, 0, 0.2); */
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .expensesClass:focus {
            outline: none !important;
            border: 1px solid red;
            box-shadow: 0 0 10px #719ECE;
        }

        .product .brdr {
            background-color: #cccccc;
            width: 50%;
            height: 2px;
            margin: auto;
            float: initial;
        }

        .product .productQtyContainer {
            margin: 30px 0;
        }

        .product .productQtyContainer .productqty {
            padding: 0px 20px;
            margin: 0;
        }

        .product .productQtyContainer input {
            padding: 0px 20px;
            margin: 3px auto;
            width: 50%;
            text-align: center;
        }

        .product .productCostContainer {
            margin: 30px 0;
        }

        .product .productCostContainer .productcost {
            padding: 0px 20px;
            margin: 0;
        }

        .product .productCostContainer input {
            padding: 0px 20px;
            margin: 3px auto;
            width: 50%;
            text-align: center;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {
            background-color: #008CBA;
        }

        /* Blue */
        .button3 {
            background-color: #f44336;
        }

        /* Red */

        .cashFooter {
            float: right;
            width: 70%;
            text-align: center;
            border-radius: 10px;
            overflow: auto;
        }

        .cashFooter h4 {
            margin: 0 0 20px 0;
        }

        .cashFooter strong {
            background-color: gainsboro;
            padding: 10px;
        }

        .clearfix {
            clear: both;
        }

    </style>
@endsection


@section('content')
    <div class="mainclass">

        <div class="orderSection example2">
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
                </tbody>
            </table>
        </div>
        <div class="brdr"></div>
        <div class="editSection product example2">
            {{-- <h4>
                Hello Supermarket
            </h4> --}}
            <textarea name="expensesname" class="expensesClass" id="expensesid" placeholder="Expenses Description."
                cols="25" rows="3"></textarea>
            <div class="brdr"></div>
            {{-- <div class="productQtyContainer">
                <p class="productqty">ProductQty</p>
                <input type="number" step="0.001">
            </div> --}}

            <div class="productCostContainer">
                <p class="productcost">Expenses Cost</p>
                <input type="number" step="0.01">
            </div>
            <button class="button button3">Delete</button>
            <button class="button button2">Add</button>
        </div>
        {{-- <div class="cashFooter">
            <h4>Cash: <strong>308.66</strong></h4>
            <button class="button button3">Delete Order</button>
            <button class="button button2">Print</button>
        </div> --}}
        <div class="clearfix"></div>
    </div>
@endsection
