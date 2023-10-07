<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #5161ce;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            margin-left: 20px;
        }

        .navbar-toggler {
            display: none;
        }

        .navbar-nav {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 15px;
            transition: color 0.6s, background-color 0.7s;
            position: relative;
        }

        .nav-link i {
            margin-right: 10px;
        }

        .nav-link.active {
            color: #5161ce;
            background-color: transparent;
        }

        .hori-selector {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background-color: #fff;
            border-radius: 3px;
            transition: left 0.6s;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                flex-direction: column;
                position: absolute;
                top: 55px;
                left: 0;
                right: 0;
                background-color: #5161ce;
                padding: 10px 0;
                display: none;
            }

            .navbar-toggler {
                display: block;
                position: absolute;
                top: 15px;
                right: 20px;
                cursor: pointer;
            }

            .nav-item {
                margin: 10px 0;
                text-align: center;
            }

            .nav-link {
                padding: 10px 0;
            }

            .hori-selector {
                display: none;
            }

            .navbar.active .navbar-nav {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#">Navbar</a>
    <button class="navbar-toggler" id="toggleNavbar">
        <i class="fas fa-bars text-white"></i>
    </button>
    <ul class="navbar-nav" id="navbarSupportedContent">
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
        </li>
    </ul>
    <div class="hori-selector"></div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById('toggleNavbar');
        const navbar = document.querySelector('.navbar');
        const navbarNav = document.querySelector('.navbar-nav');

        toggleButton.addEventListener('click', function() {
            navbarNav.classList.toggle('active');
        });
    });
</script>

</body>
</html>
