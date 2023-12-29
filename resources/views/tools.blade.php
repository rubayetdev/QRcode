<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .ag-format-container {
            width: 1142px;
            margin: 0 auto;
        }


        body {
            background-color: #000;
        }
        .ag-courses_box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;

            padding: 50px 0;
        }
        .ag-courses_item {
            -ms-flex-preferred-size: calc(33.33333% - 30px);
            flex-basis: calc(33.33333% - 30px);

            margin: 0 15px 30px;

            overflow: hidden;

            border-radius: 28px;
        }
        .ag-courses-item_link {
            display: block;
            padding: 30px 20px;
            background-color: #121212;

            overflow: hidden;

            position: relative;
        }
        .ag-courses-item_link:hover,
        .ag-courses-item_link:hover .ag-courses-item_date {
            text-decoration: none;
            color: #FFF;
        }
        .ag-courses-item_link:hover .ag-courses-item_bg {
            -webkit-transform: scale(10);
            -ms-transform: scale(10);
            transform: scale(10);
        }
        .ag-courses-item_title {
            min-height: 87px;
            margin: 0 0 25px;

            overflow: hidden;

            font-weight: bold;
            font-size: 30px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }
        .ag-courses-item_date-box {
            font-size: 18px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }
        .ag-courses-item_date {
            font-weight: bold;
            color: #f9b234;

            -webkit-transition: color .5s ease;
            -o-transition: color .5s ease;
            transition: color .5s ease
        }
        .ag-courses-item_bg {
            height: 128px;
            width: 128px;
            background-color: #f9b234;

            z-index: 1;
            position: absolute;
            top: -75px;
            right: -75px;

            border-radius: 50%;

            -webkit-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }
        .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
            background-color: #3ecd5e;
        }
        .ag-courses_item:nth-child(3n) .ag-courses-item_bg {
            background-color: #e44002;
        }
        .ag-courses_item:nth-child(4n) .ag-courses-item_bg {
            background-color: #952aff;
        }
        .ag-courses_item:nth-child(5n) .ag-courses-item_bg {
            background-color: #cd3e94;
        }
        .ag-courses_item:nth-child(6n) .ag-courses-item_bg {
            background-color: #4c49ea;
        }



        @media only screen and (max-width: 979px) {
            .ag-courses_item {
                -ms-flex-preferred-size: calc(50% - 30px);
                flex-basis: calc(50% - 30px);
            }
            .ag-courses-item_title {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

        }
        @media only screen and (max-width: 639px) {
            .ag-courses_item {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
            }
            .ag-courses-item_title {
                min-height: 72px;
                line-height: 1;

                font-size: 24px;
            }
            .ag-courses-item_link {
                padding: 22px 40px;
            }
            .ag-courses-item_date-box {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ScanHub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                <a class="nav-link" href="#">Tools</a>
                <a class="nav-link" href="{{route('alter2')}}">Sign In</a>
            </div>
        </div>
    </div>
</nav>

<div class="ag-format-container">
    <div class="ag-courses_box">
        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Product QR
                </div>

                <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
            04.11.2022
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Email QR
                </div>

                <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
            04.11.2022
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    SMS QR
                </div>

                <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
            04.11.2022
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    WIFI QR
                </div>

                <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
            04.11.2022
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Location QR
                </div>

                <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
            30.11.2022
          </span>
                </div>
            </a>
        </div>



        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg">
                </div>
                <div class="ag-courses-item_title">
                    URL QR
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Contact QR
                </div>

                <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
            31.10.2022
          </span>
                </div>
            </a>
        </div>

    </div>
</div>
</body>
</html>
