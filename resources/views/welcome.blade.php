    @extends('layouts.master')

        <style>
            .content {
                text-align: center;
                display: inline-block;
            }
            .contTitle{
                display: table-cell;
                vertical-align: middle;
                text-align: center;
            }
            .title {
                font-size: 96px;

                font-family: 'Lato';
            }
        </style>
        @section('content')

            <div class="container contTitle">
                <div class="content">
                    <div class="title">Laravel 5</div>
                </div>
            </div>
        @endsection
