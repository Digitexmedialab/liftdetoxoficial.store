<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="col-md-12" style="justify-content:center; text-align: -webkit-center;">
    <div id="myCarousel" class="carousel slide   " data-ride="carousel" style="width:100%; justify-content:center;">
        <div class="col-md-12">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/ab1.png" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/ab2.png" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/ab3.png" style="width:100%;">
                </div>

            </div>
            <ol class="carousel-indicators" style="bottom:-25px">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Left and right controls -->
            <a class="left carousel-controlin" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-controlin" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
</div>

<style type="text/css">
    .carousel-controlin {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 15%;
        font-size: 20px;
        color: #6DE307;
        text-align: center;
        background-color: rgba(0, 0, 0, 0);
        filter: alpha(opacity=50);
        opacity: .5
    }

    .carousel-controlin.left {
        background-repeat: repeat-x
    }

    .carousel-controlin.right {
        right: 0;
        left: auto;
        background-repeat: repeat-x
    }

    .carousel-controlin:focus,
    .carousel-controlin:hover {
        color: black;
        text-decoration: none;
        outline: 0;
        filter: alpha(opacity=90);
        opacity: .9
    }

    .carousel-controlin .glyphicon-chevron-left,
    .carousel-controlin .glyphicon-chevron-right,
    .carousel-controlin .icon-next,
    .carousel-controlin .icon-prev {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        margin-top: -10px
    }

    .carousel-controlin .glyphicon-chevron-left,
    .carousel-controlin .icon-prev {
        left: 50%;
        margin-left: -10px
    }

    .carousel-controlin .glyphicon-chevron-right,
    .carousel-controlin .icon-next {
        right: 50%;
        margin-right: -10px
    }

    .carousel-controlin .icon-next,
    .carousel-controlin .icon-prev {
        width: 20px;
        height: 20px;
        font-family: serif;
        line-height: 1
    }

    .carousel-controlin .icon-prev:before {
        content: "\2039"
    }

    .carousel-controlin .icon-next:before {
        content: "\203a"
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #6DE307;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #fff;
        border-radius: 10px
    }

    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
    }

    .carousel-caption .btn {
        text-shadow: none
    }

    @media screen and (min-width:768px) {

        .carousel-controlin .glyphicon-chevron-left,
        .carousel-controlin .glyphicon-chevron-right,
        .carousel-controlin .icon-next,
        .carousel-controlin .icon-prev {
            width: 30px;
            height: 30px;
            margin-top: -10px;
            font-size: 30px
        }

        .carousel-controlin .glyphicon-chevron-left,
        .carousel-controlin .icon-prev {
            margin-left: -10px
        }

        .carousel-controlin .glyphicon-chevron-right,
        .carousel-controlin .icon-next {
            margin-right: -10px
        }

        .carousel-caption {
            right: 20%;
            left: 20%;
            padding-bottom: 30px
        }

        .carousel-indicators {
            bottom: 20px
        }
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #6DE307;
        border: 1px solid black;
        border-radius: 10px
    }

    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: #6DE307
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: black;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }

    .carousel-caption .btn {
        text-shadow: none
    }

    @media screen and (min-width:768px) {

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            width: 30px;
            height: 30px;
            margin-top: -10px;
            font-size: 30px
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            margin-left: -10px
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            margin-right: -10px
        }

        .carousel-caption {
            right: 20%;
            left: 20%;
            padding-bottom: 30px
        }

        .carousel-indicators {
            bottom: 20px
        }
    }
</style>