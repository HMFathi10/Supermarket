@extends('sections/masterfiles/master')

@section('style')
    <style>
        html {
            font-size: 15px;
        }

        .hashpage {
            width: 90%;
            margin: auto;
            /* float: left; */
        }

        .btn-glyphicon {
            padding: 8px;
            background: #ffffff;
            margin-right: 4px;
        }

        .icon-btn {
            padding: 1px 15px 3px 2px;
            border-radius: 50px;
        }

        .input-group.md-form.form-sm.form-2 input.amber-border {
            border: 1px solid #ffca28;
        }


        .brdr {
            background-color: lightskyblue;
            width: 90%;
            height: 2px;
            margin: 10px auto;
        }

        .products {
            width: 90%;
            /* margin: auto; */
        }

        .product {
            width: 20%;
            float: right;
            text-align: center;
            border: solid 3px rgb(54, 198, 247);
            border-radius: 10px;
            margin: 1vh;
        }

        .product h4 {
            margin: 20px 0;
            white-space: inherit;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 75px;
        }

        .product .brdr {
            background-color: #cccccc;
            width: 50%;
            height: 2px;
            margin: auto;
        }

        .product .productQtyContainer {
            margin: 10px 0;
        }

        .product .productQtyContainer .productqty {
            padding: 0px 20px;
            margin: 0;
        }

        .product .productCostContainer {
            margin: 10px 0;
        }

        .product .productCostContainer .productcost {
            padding: 0px 20px;
            margin: 0;
        }

        .clearfix {
            clear: both;
        }

    </style>
@endsection

@section('content')
    <div class="hashpage">
        {{-- Add button --}}
        <div style="margin: auto;float: left;margin: 0 15vh 0 0;">
            <a class="btn icon-btn btn-success" style="background-color: blueviolet;" href="#"><span
                    class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Add</a>
        </div>


        {{-- Search bar --}}
        <div class="input-group md-form form-sm form-2 pl-0" style="float: left;width: 70%;">
            <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                {{-- <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                        aria-hidden="true"></i></span> --}}
            </div>
        </div>
        {{-- <div class="input-group">
            <div class="form-outline">
                <input id="search-focus" type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div> --}}
        <div class="clearfix"></div>

    </div>
    <div class="brdr"></div>
    <div class="products">

        <div class="product">
            <h4>
                Hello Supermarket Supermarket Supermarket Supermarket
            </h4>
            <div class="brdr"></div>
            <div class="productQtyContainer">
                <p class="productqty">ProductQty</p>
                <small>100</small>
            </div>

            <div class="productCostContainer">
                <p class="productcost">ProductCost</p>
                <small>12.50</small>
            </div>
        </div>
        <div class="product">
            <h4>
                Hello Supermarket
            </h4>
            <div class="brdr"></div>
            <div class="productQtyContainer">
                <p class="productqty">ProductQty</p>
                <small>100</small>
            </div>

            <div class="productCostContainer">
                <p class="productcost">ProductCost</p>
                <small>12.50</small>
            </div>
        </div>
        <div class="product">
            <h4>
                Hello Supermarket
            </h4>
            <div class="brdr"></div>
            <div class="productQtyContainer">
                <p class="productqty">ProductQty</p>
                <small>100</small>
            </div>

            <div class="productCostContainer">
                <p class="productcost">ProductCost</p>
                <small>12.50</small>
            </div>
        </div>
        <div class="product">
            <h4>
                Hello Supermarket
            </h4>
            <div class="brdr"></div>
            <div class="productQtyContainer">
                <p class="productqty">ProductQty</p>
                <small>100</small>
            </div>

            <div class="productCostContainer">
                <p class="productcost">ProductCost</p>
                <small>12.50</small>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
@endsection
